<?php

namespace App\Http\Controllers;

use App\newsCategory;
use Illuminate\Http\Request;
use App;
use DB;

class newsCategoryController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $layout = 'adminlte::layouts.app';

    public function index()
    {
        $items = newsCategory::oldest()->get();
        return view('dashboard.category.category', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, APP\news $news)
    {
        newsCategory::create([
            'name' => request('category'),]);
        Session()->flash('message','New Category Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = newsCategory::find($id);
        return view('dashboard.category.editcategory', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = newsCategory::find($id);
        $items->name = $request->category;
        $items->save();
        Session()->flash('message','Category Updated Successful');
        return redirect('/newsCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = App\newsCategory::find($id);
        $items->delete();
        session()->flash('message', 'Delete successful');
        return redirect('/newsCategory');
    }
}
