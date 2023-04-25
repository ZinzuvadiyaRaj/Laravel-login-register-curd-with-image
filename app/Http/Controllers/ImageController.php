<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Image::latest()->paginate();
        return view('image',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('image_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('images'), $imageName);

        $image = new Image;

        $image->image = $imageName;

        $image->save();

        return redirect()->route('image')->with('success','Image added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image,$id)
    {
        //
        $image = Image::find($id);
        return view('image_edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image,$id)
    {
        //
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('images'), $imageName);

        $image = Image::find($id);

        $image->image = $imageName;

        $image->save();

        return redirect()->route('image')->with('success','Image Updated success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image, $id)
    {
        //  
        $image = Image::where('id',$id)->firstorfail()->delete();
        return redirect()->route('image')->with('success','Image Deleted success');

    }
}
