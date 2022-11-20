<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation as ModelsReservation;
use App\Models\Table;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;

class Reservation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$reservations = DB::table('reservations')
        ->select("reservations.first_name AS first_name" , "reservations.second_name AS second_name" ,
         "reservations.phone AS phone" ,"reservations.res_date","reservations.email",
         "reservations.guest_number","reservations.created_at","reservations.updated_at",
         "tables.name AS table_name","tables.id as table_id","tables.status" )
        ->join('tables', 'reservations.table_id', '=', 'tables.id')
        ->orderBy('res_date')->get();*/


        $reservations = ModelsReservation::orderBy('res_date')->get();

        return view('admin.reservation.index' , compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::where('status' , 'available')->get();
        
        return view('admin.reservation.create' , compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {

       $reservation = new ModelsReservation();
       $reservation->first_name = $request->first_name;
       $reservation->second_name = $request->second_name;
       $reservation->email = $request->email;
       $reservation->phone = $request->phone;
       $reservation->res_date = $request->res_date;
       $reservation->guest_number = $request->guest_number;

       $reservation->created_at = date("Y-m-d H:i:s", strtotime('now'));
       $reservation->updated_at = date("Y-m-d H:i:s", strtotime('now'));
       $reservation->table_id = $request->table_id;

        // check if the guest is suitable for the selected table 
       $guestNumber = $request->guest_number;
       $tableGuestNumber = $reservation->table->guest_number;
       if ($tableGuestNumber < $guestNumber)
       {
        return back()->with('warning','please select the table based on your guest number .');
       }

       // check the date if it available in the selected day .
       $reservationsOnThisTable =  DB::table('reservations')
       ->select('res_date')
       ->where('table_id' ,$reservation->table_id)->get();
       $request_date = Carbon::parse($request->res_date);
       foreach($reservationsOnThisTable as $reservation_date)
       {
        if($reservation_date->res_date == $request_date)
        {
            return back()->with('warning' , 'please choose anthor date ');
        }
       }

       // if it ok so store a new reservation and move back to the index page
       $reservation->save();
       return to_route('admin.reservation.index')->with('success' , 'Reservation added successfuly .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = ModelsReservation::find($id);
        dd($reservation);
        return view('admin.reservation.edit',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = ModelsReservation::find($id);
        $tables = Table::where('status' , 'available')->get();
        
        return view('admin.reservation.edit',compact('reservation' , 'tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request,ModelsReservation $reservation)
    {
        $reservation->update($request->validated());
        return to_route('admin.reservation.index')->with('success', 'Reservation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsReservation::find($id)->delete();
        return to_route('admin.reservation.index')->with('danger','the reservation has been deleted');
    }
}
