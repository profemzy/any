<?php

namespace Anywork\Http\Controllers;

use Anywork\User;
use Illuminate\Http\Request;

use Anywork\Http\Requests;
use Anywork\Http\Requests\CreateProfileRequest;
use Anywork\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileWebController extends Controller
{
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

        return view('profiles.create')->with(['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateProfileRequest $request)
    {
        $user = Auth::user();

        $surname = $request->get('surname');
        $other_names = $request->get('other_names');
        $sex = $request->get('sex');
        $mobile_no = $request->get('mobile_no');
        $contact_add = $request->get('contact_add');
        $user_id = $request->get('user_id');

        $user->profile()->create([
            'surname' => $surname,
            'other_names' => $other_names,
            'sex' => $sex,
            'mobile_no' => $mobile_no,
            'contact_add' => $contact_add,
            'user_id' => $user_id
        ]);

        return redirect('categories_web')->with(['profile_created' => 'The Profile has been created.']);

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
