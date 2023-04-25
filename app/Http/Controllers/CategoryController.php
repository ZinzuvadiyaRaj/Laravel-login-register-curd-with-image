<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $data = category::latest()->paginate();
        return view('category',compact('data'));
    }

    public function create()
    {
        return view('category_create');
    }

    public function test(Request $request)
    {
            $request->validate([
                'category' => 'required'
            ]);

            $category = new category;

            $category->category = $request->category;

            $category->save();

            return redirect()->route('category')->with('success','Category added');


    }

    public function destroy($id)
    {
        $category = category::where('id',$id)->firstorfail()->delete();
        return redirect()->route('category')->with('success','Category Deleted success');

    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('category_edit',compact('category'));
    }

    public function update(Request $request, category $category, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $category = category::find($id);

        $category->category = $request->category;

        $category->save();

        return redirect()->route('category')->with('success','Category Updated success');
    }
}
