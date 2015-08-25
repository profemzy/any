<?php

namespace Anywork\Http\Controllers;

use Anywork\Booking;
use Illuminate\Http\Request;

use Anywork\Http\Requests;
use Anywork\Http\Requests\CreateBookingRequest;
use Anywork\Http\Controllers\Controller;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bookings = Booking::all();

        return $bookings;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $values = $request->only(['details','service_id', 'user_id']);

        Booking::create($values);

        return response()->json(['message' => 'Booking Made Successfully', 'success' => 1], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        if(!$booking){
            return response()->json(['message' => 'This booking does not exist','success'=> 0 , 'code' => 404], 404);
        }

        return $booking;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CreateBookingRequest $request, $id)
    {
        $booking = Booking::find($id);

        if(!$booking){
            return response()->json(['message' => 'This booking does not exist', 'success'=> 0,'code' => 404], 404);
        }

        $details = $request->get('details');
        $service_id = $request->get('service_id');
        $user_id = $request->get('user_id');

        $booking->details = $details;
        $booking->service_id = $service_id;
        $booking->user_id = $user_id;

        $booking->save();

        return response()->json(['message' => 'The Booking has been updated', 'success'=> 1], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);

        if(!$booking){
            return response()->json(['message' => 'This Booking does not exist', 'success'=> 0, 'code' => 404], 404);
        }

        $booking->delete();
    }
}
