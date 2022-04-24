<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DataTables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.supplier.supplier-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.supplier.add-supplier');
    }

    public function list()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.supplier-list', compact('supplier'));
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
            'first_name' => 'required| string',
            'last_name' => 'required| string',
            'supplier_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'company_name' => 'required| string',
            'vat_num' => 'required| string',
            'email' => 'required| string',
            'Phone' => 'required| string',
            'address_1' => 'required| string',
            'country' => 'required| string',
            'district' => 'required| string',
            'thana' => 'required| string',
            'postal' =>'required| string'
        ]);

        $supplier = new Supplier;
        $supplier->first_name = $request->first_name;
        $supplier->last_name = $request->last_name;
        $supplier->supplier_image = $request->supplier_image;
        $supplier->company_name = $request->company_name;
        $supplier->vat_num = $request ->vat_num;
        $supplier->email = $request ->email;
        $supplier->Phone = $request->Phone;
        $supplier->address_1 = $request->address_1;
        $supplier->address_2 = $request->address_2;
        $supplier->country = $request->country;
        $supplier->district = $request->district;
        $supplier->thana = $request->thana;
        $supplier->postal = $request->postal;


        if($request->hasfile('supplier_image'))
        {
            $file = $request -> file('supplier_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/suppliers/',$filename);
            $supplier-> supplier_image = $filename;
        }
        $supplier ->save();

        return redirect()->route('supplier.supplier-list')->with('status', 'Supplier Data Has Been Submitted');
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
        //     $data =Supplier::latest()->get();
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
        $supplier = Supplier::find($id);
        return view('admin.supplier.edit-supplier', compact('supplier'));
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
        $supplier = Supplier::find($id);
        $supplier->first_name = $request->first_name;
        $supplier->last_name = $request->last_name;
        $supplier->company_name = $request->company_name;
        $supplier->vat_num = $request->vat_num;
        $supplier->email = $request->email;
        $supplier->Phone = $request->Phone;
        $supplier->address_1 = $request->address_1;
        $supplier->address_2 = $request->address_2;
        $supplier->country = $request->country;
        $supplier->district = $request->district;
        $supplier->thana = $request->thana;
        $supplier->postal = $request->postal;


        if($request->hasfile('supplier_image'))
        {
            $destination = 'uploads/suppliers/'.$supplier->supplier_image;
            if(File::exists($supplier))
            {
                File::delete($destination);
            }
            $file = $request -> file('supplier_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/suppliers/',$filename);
            $supplier-> supplier_image = $filename;
        }


        $supplier ->update();

        return redirect()->back()->with('status', 'Supplier Data Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $destination = 'uploads/suppliers/'.$supplier->supplier_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $supplier->delete();
        return redirect()->back()->with('status','Supplier info deleted Successfully');
    }
}
