<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation as ModelsReservation;
use App\Rules\DateBetween;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reservation extends Controller
{
    public function stepOne()
    {
        $reservation = session()->get('reservation');
        return view('frontend.reservation.step-one' , compact('reservation'));
    }


    public function stepOneStore(Request $request)
    {
        $validate =  $request->validate([
            "first_name" => 'required',
            "second_name" => 'required',
            "email" => 'required|email',
            "res_date" => ['required', 'date' ,new DateBetween],
            "phone" => 'required',
            "guest_number" => 'required',
        ]);

        if (empty($request->session()->get('reservation')))
        {
            $reservation = new ModelsReservation();
            $reservation->fill($validate);
            $request->session()->put('reservation' , $reservation);
        }
        else
        {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validate);
            $request->session()->put('reservation' , $reservation);
        }
        return to_route('reservation.step.two');
    }


    public function stepTwo(Request $request)
    {

        $reservation = $request->session()->get('reservation');


        $res_table_id_on_this_date = ModelsReservation::orderBy('res_date')->get()->filter(function($value)  use($reservation) {
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d') ;
        })->pluck('table_id');

        $tables = DB::table('tables')
        ->where('guest_number' , '>' ,$reservation->guest_number-1 ,'and')
        ->where('status','=','available')
        ->whereNotIn('id',$res_table_id_on_this_date)
        ->get();

      
        return view('frontend.reservation.step-two' , compact('tables'));

    }
    public function stepTwoStore(Request $request)
    {

        
        $reservation = $request->session()->get('reservation');

        $validate = $request->validate([
            'table_id' => ['required']
        ]);


        $reservation->fill($validate);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('thankyou');
    }


}
