<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

         return view('admin.category.category',compact('categories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'category_name' => 'required',
          'category_slug' => 'required',
          'category_description' => 'required',
          'category_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          
        ]);

        if($request->hasFile('category_image')) 
          {
            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            $filename  = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('category_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->category_image->move(public_path('/uploads/ProductImg'), $fileNameToStore);
          }   else {
            $fileNameToStore = 'no_img';
        }
 
        $category = new Category;
 
        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->category_description = $request->category_description;
        $category->category_image = $fileNameToStore;
       
 
        $category->save();
 
        return redirect()->back()->with('status', 'Category Data Has Been Submitted');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function Active($id){
       
       $category = Category::find($id);
       $category->status= 0;
       $category ->save();
         return Redirect()->back();
    }
       public function Inactive($id){
       
       $category = Category::find($id);
       $category->status= 1;
       $category ->save();
         return Redirect()->back();
    }
    public function edit($id)
{
         $category = Category::find($id);

         return view('admin.category.form',compact('category'));    
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
        $update =  Category::find($id);
        $update->category_name = $request->category_name;
        $update->category_slug = $request->category_slug;
        $update->category_description = $request->category_description;
        
        if($request->hasFile('category_image')) 
          {
            $image_path = public_path("uploads/ProductImg/{$update->category_image}");

            if (File::exists($image_path)) {
               //File::delete($image_path);
                 unlink($image_path);
            }




            $filenameWithExt = $request->file('category_image')->getClientOriginalName();
            $filename  = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('category_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->category_image->move(public_path('/uploads/ProductImg'), $fileNameToStore);
            $update->category_image = $fileNameToStore; 
          }



       $update->update();
        return redirect()->back()->with('status','Category Updated Successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $category = Category::find($id);
       $image_path = public_path("uploads/ProductImg/{$category->category_image}");

        if (File::exists($image_path)) {
        //File::delete($image_path);
        unlink($image_path);
    }

    
    $category->delete();


        
        return redirect()->back()->with('status',' Category Deleted Successfully');
    }
}
