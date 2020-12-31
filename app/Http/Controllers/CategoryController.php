<?php

namespace App\Http\Controllers;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $categories = Category::all();
      return view('Category',[
          'categories' => $categories,
      ]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $category = new Category();
        $category->job_cat_id=$request->get('job_cat_id');
        $category->job_id    =$request->get('job_id');
        $category->job_cat   =$request->get('job_cat');
        $category->save();
       return redirect()->route('Category');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Category::where('job_cat_id','=',$id)->first();
           return view('edit_category',[
            'categorie'=>$categorie
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$category)
    {
        ////$categorie = Category::where('job_cat_id','=',$category)->first();
        $affected = DB::table('job_categories')
        ->where('job_cat_id','=' ,$category)
        ->update(['job_cat' => $request->get('job_cat')]);
       return redirect()->route('Category');
       ///

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function delete($category)   {
       //$categorie = Category::where('job_cat_id','=',$category)->first();
        Category::where('job_cat_id', $category)->delete();
       // $categorie->delete();
        return redirect()->route('Category');
    }

}

