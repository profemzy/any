<?php

namespace Anywork\Http\Controllers;

use Anywork\Testimonial;
use Illuminate\Http\Request;
use Anywork\Http\Requests\CreateTestimonialRequest;
use Illuminate\Support\Facades\Auth;

use Anywork\Http\Requests;
use Anywork\Http\Controllers\Controller;

class TestimonialsWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('testimonials.index')->with(['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();

        $profile = $user->profile;

        if(!$profile){
            return view('profiles.create')->with(['user' => $user]);
        }

        return view('testimonials.create')->with(['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateTestimonialRequest $request)
    {
        $details = $request->get('details');
        $user_id = $request->get('user_id');


        Testimonial::create([
            'details' => $details,
            'user_id' => $user_id
        ]);

        return redirect('categories_web')->with(['testimonial_created' => 'The Testimonial has been created.']);
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
