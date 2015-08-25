<?php

namespace Anywork\Http\Controllers;

use Illuminate\Http\Request;
use Anywork\Company;
use Anywork\Http\Requests;
use Anywork\Http\Requests\CreateCompanyRequest;
use Anywork\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth.basic.once');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $companies = Company::all();
        return $companies;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $values = $request->only(['name','information', 'email', 'year_estab', 'address', 'category_id', 'user_id']);
        Company::create($values);

        return response()->json(['message' => 'Company Created Successfully', 'success' => 1], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $company = Company::find($id);

        if(!$company){
            return response()->json(['message' => 'This company does not exist','success'=> 0 , 'code' => 404], 404);
        }

        return $company;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CreateCompanyRequest $request, $id)
    {
        $company = Company::find($id);

        if(!$company){
            return response()->json(['message' => 'This company does not exist', 'success'=> 0,'code' => 404], 404);
        }

        $name = $request->get('name');
        $information = $request->get('information');
        $email = $request->get('email');
        $year_estab = $request->get('year_estab');
        $address = $request->get('address');
        $category_id = $request->get('category_id');
        $user_id = $request->get('user_id');

        $company->name = $name;
        $company->information = $information;
        $company->email = $email;
        $company->year_estab = $year_estab;
        $company->address = $address;
        $company->category_id = $category_id;
        $company->user_id = $user_id;

        $company->save();

        return response()->json(['message' => 'The Company has been updated', 'success'=> 1], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if(!$company){
            return response()->json(['message' => 'This Company does not exist', 'success'=> 0, 'code' => 404], 404);
        }

        $company->delete();

        return response()->json(['message' => 'This Company has been deleted', 'success'=> 1,'code' => 200], 200);

    }
}
