<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Customer;

class CustomerController extends Controller
{

    protected $validationRules = [
        'email' => 'required|unique:customer|max:150',
        'name' => 'required|max:150',
        'address' => 'required|max:150',
        'creation' => 'required|date',
        'password' => 'required|max:10',
    ];    

    public function index(){

		$customers = Customer::all();
		return response()->json($customers);

    }

    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
            return response()->json($validation->errors(), 404);
        }

        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return response()->json('Success', 201);
    }

    public function show($id){

        $customer = Customer::find($id);

        if(!$customer){
            return response()->json([
                'message'   => 'Record not found.',
            ], 404);
        }

        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        if(!$customer) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
            return response()->json($validation->errors(), 404);
        }


        $customer->fill($request->all());
        $customer->save();

        return response()->json('Success', 201);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);

        if(!$customer) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $customer->delete();
        return response()->json('Success', 201);
    }

    public function validateCustomer(Request $request)
    {

        $customer = Customer::where('email',$request->get('email'))
	        		->where('password',$request->get('password'))
	        		->first();

       	if(isset($customer))
        	return response()->json('Success', 200);
        else
        	return response()->json(['error'=>'User or Password not found.'], 400);

    }    
}
