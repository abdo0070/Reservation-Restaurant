<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation as ModelsReservation;
use App\Models\Table;
use Illuminate\Http\Request;
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


        $reservations = ModelsReservation::all();

        return view('admin.reservation.index' , compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::all();
        
        return view('admin.reservation.create' , compact('tables')) ;
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

       $reservation->table_id = 1 ;
       $reservation->save();
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
        return view('admin.reservation.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationRequest $request, $id)
    {
        //
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
        return to_route('admin.reservation.index');
    }
}
