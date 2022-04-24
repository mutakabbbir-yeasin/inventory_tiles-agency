<?php

namespace App\Http\Controllers;

use App\Models\Biller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DataTables;

class BillerController extends Controller
{
   
    public function index()
    { 
  
        return view('admin.biller.add-biller');


    }

    public function list()
    {
        $biller = Biller::all();
        return view('admin.biller.biller-list', compact('biller'));
    }

 
    public function create()
    {
       return view ('admin.biller.add-biller');
    }

    public function store(Request $request)
    { 
        $this->validate($request, [
            'first_name' => 'required| string',
            'last_name' => 'required| string',
            'biller_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
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

        $biller = new Biller;
        $biller->first_name = $request->first_name;
        $biller->last_name = $request->last_name;
        $biller->company_name = $request->company_name;
        $biller->vat_num = $request->vat_num;
        $biller->email = $request->email;
        $biller->Phone = $request->Phone;
        $biller->address_1 = $request->address_1;
        $biller->address_2 = $request->address_2;
        $biller->country = $request->country;
        $biller->district = $request->district;
        $biller->thana = $request->thana;
        $biller->postal = $request->postal;

        if($request->hasfile('biller_image'))
        {
            $file = $request -> file('biller_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/billers/',$filename);
            $biller-> biller_image = $filename;
        }
        $biller ->save();

        return redirect()->route('biller.biller-list')->with('status', 'Biller Data Has Been Submitted');
        
    }

   
    public function show(Request $request)
    {
        // $biller = Biller::find($id);
        // return view('admin.biller.show-biller', compact('biller'));
        $biller = Biller::all();
        return view('admin.biller.show-biller', compact('biller'));
    }


    public function edit($id)
    {
        // return view('admin.biller.edit-biller');
        $biller = Biller::find($id);
        return view('admin.biller.edit-biller', compact('biller'));
    }

 
    public function update(Request $request, $id)
    {

        $biller = Biller::find($id);
        $biller->first_name = $request->first_name;
        $biller->last_name = $request->last_name;
        $biller->company_name = $request->company_name;
        $biller->vat_num = $request->vat_num;
        $biller->email = $request->email;
        $biller->Phone = $request->Phone;
        $biller->address_1 = $request->address_1;
        $biller->address_2 = $request->address_2;
        $biller->country = $request->country;
        $biller->district = $request->district;
        $biller->thana = $request->thana;
        $biller->postal = $request->postal;


        if($request->hasfile('biller_image'))
        {
            $destination = 'uploads/billers/'.$biller->biller_image;
            if(File::exists($biller))
            {
                File::delete($destination);
            }
            $file = $request -> file('biller_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/billers/',$filename);
            $biller-> biller_image = $filename;
        }


        $biller ->update();

        return redirect()->back()->with('status', 'Biller Data Has Been Updated');

        
    }


    public function destroy($id)
    {
        $biller = Biller::find($id);
        $destination = 'uploads/billers/'.$biller->biller_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $biller->delete();
        return redirect()->back()->with('status','Biller info deleted Successfully');
    }
}
