<?php

namespace Anywork\Http\Controllers;

use Anywork\Booking;
use Anywork\Profile;
use Anywork\Service;
use Illuminate\Http\Request;

use Anywork\Http\Requests;
use Anywork\Http\Requests\CreateBookingRequest;
use Anywork\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingsWebController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $services = Service::lists('name', 'id');

        $profile = $user->profile;

        if(!$profile){
            return view('profiles.create')->with(['user' => $user]);
        }


        return view('bookings.create')->with(['user' => $user, 'services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $details = $request->get('details');
        $service_id = $request->get('services');
        $user_id = $request->get('user_id');

        Booking::create([
            'details' => $details,
            'service_id' => $service_id,
            'user_id' => $user_id
        ]);

        return redirect('categories_web')->with(['booking_created' => 'The Booking has been created.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
