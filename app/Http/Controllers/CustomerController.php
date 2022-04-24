<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list()
    {
        $customer = Customer::all();
        return view ('admin.customer.customer-list',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.customer.add-customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required| string',
            'phone_number' => 'required| string',
            'address' => 'required| string',
            'city' => 'required| string',
            'country' => 'required| string',
            'username' => 'required| string',
            'password' => 'required| string'
        ]);

        $customer = new Customer;
        $customer->customer_name = $request->customer_name;
        $customer->company_name = $request->company_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->postal_code = $request->postal_code;
        $customer->country = $request->country;
        $customer->username = $request->username;
        $customer->password = $request->password;

        $customer->save();
        return redirect()->route('customer.customer-list')->with('status', 'Customer Data Has Been Submitted');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if($request->ajax()){
        //     $data =Customer::latest()->get();
        //     return Datatables::of($data)
        //     ->addIndexColumn()
        //     ->addColumn('action', function($row){
        //         $actionBtn = '<a href="" class="btn btn-sm btn-success">Edit</a>';
        //         return $actionBtn;
        //     })
        //     ->rawColumns(['action'])
        //     ->make(true);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit-customer', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->company_name = $request->company_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->postal_code = $request->postal_code;
        $customer->country = $request->country;
        $customer->username = $request->username;
        $customer->password = $request->password;

        $customer->update();
        return redirect()->route('customer.customer-list')->with('status', 'Customer Data Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        
        $customer->delete();
        return redirect()->back()->with('status','Customer info deleted Successfully');
    }
}
