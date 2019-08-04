<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $categories = App\newsCategory::all();
        $a = 1;
        $news = App\news::latest()->paginate(20);
        /*var_dump($news[0]->newsBody);die();*/
        return view('frontend.index', compact('news', 'a', 'categories'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = 0;
        $categories = App\newsCategory::all();
        $news = App\news::find($id);
        return view('frontend.readMore', compact('news', 'a', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*public function video()
    {
        $news = App\news::latest()->get();
        $videos = App\Video::latest()->get();
        return view('frontend.pages.video', compact('videos', 'news'));
    }*/

    public function forAll($id)
    {
        $a = 1;
        $categories = App\newsCategory::all();
        $news = App\news::latest()->where('newsCategory_id', $id)->paginate(20);
        return view('frontend.index', compact('news', 'a', 'categories'));
    }

    /* public function politics()
     {
         $a= 1;
         $news = App\news::latest()->where('newsCategory_id', 1)->paginate(20);
         return view('frontend.pages.main', compact('news','a'));
     }

     public function social()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',2)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }

     public function no4()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',3)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function no5()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',4)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function no6()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',5)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function no7()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',6)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function economic()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',7)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function entertainment()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',8)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function sports()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',9)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function video()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',10)->paginate(20);
         return view('frontend.pages.video',compact('news','a'));
     }
     public function no11()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',11)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }
     public function special()
     {
         $a= 1;
         $news =App\news::latest()->where('newsCategory_id',12)->paginate(20);
         return view('frontend.pages.main',compact('news','a'));
     }*/
}
