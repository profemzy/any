<?php

namespace Anywork\Http\Controllers;

use Anywork\Category;
use Illuminate\Http\Request;
use Anywork\Company;

use Anywork\Http\Requests;
use Anywork\Http\Requests\CreateCompanyRequest;
use Anywork\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompaniesWebController extends Controller
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
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $user = Auth::user();
//        $profile = $user->profile;
//
//        if(!$profile){
//            return view('profiles.create')->with(['user' => $user]);
//        }

        $category = Category::find($id);

        return view('companies.create')->with(['category' => $category, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $name = $request->get('name');
        $information = $request->get('information');
        $email = $request->get('email');
        $year_estab = $request->get('year_estab');
        $address = $request->get('address');
        $cat_id = $request->get('category_id');
        $user_id =$request->get('user_id');

        $category = Category::find($cat_id);

        $category->companies()->create([
            'name' => $name,
            'information' => $information,
            'email' => $email,
            'year_estab' => $year_estab,
            'address' => $address,
            'category_id' => $cat_id,
            'user_id' => $user_id
        ]);

        return redirect('categories_web')->with(['company_created' => 'The Company has been created.']);

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
