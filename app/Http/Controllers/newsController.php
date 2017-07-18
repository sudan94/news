<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = news::latest()->get();
        return view('dashboard.news.showNews', compact('news'));
    }

    public function create()
    {
        $items = App\newsCategory::all();
        return view('dashboard.news.createNews', compact('items'));
    }

    public function store(Request $request)
    {
        If ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $destinationPath = public_path() . '/uploads/';
                $filename = $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
                $images[] = $filename;
                $newsBody = $request->newsBody;
            }
            news::create(['newsTitle' => request('newsTitle'),
                'newsBody' => implode('|', $newsBody),
                'author' => request('author'),
                'newsCategory_id' => request('category'),
                'category' => request('category'),
                'filename' => implode("|", $images)
            ]);

        } else {
            news::create(['newsTitle' => request('newsTitle'),
                'newsBody' => request('newsBody'),
                'author' => request('author'),
                'newsCategory_id' => request('category'),
                'category' => request('category')
            ]);
        }
        session()->flash('message', 'News Created Successful');
        return redirect('/showNews');
    }

    public
    function show($id)
    {
        $news = news::find($id);
        return view('dashboard.News.singleNews', compact('news'));
    }

    public
    function edit($id)
    {
        $new = news::find($id);
        $items = App\newsCategory::all();
        return view('dashboard.news.edit', compact('new', 'items'));
    }

    public
    function update(Request $request, $id)
    {
        If ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $destinationPath = public_path() . '/uploads/';
                $filename = $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
                $images[] = $filename;
                $newsBody = $request->newsBody;
            }
            $news = news::find($id);
            $news->newsTitle = $request->newsTitle;
            $news->author = $request->author;
            $news->category = $request->category;
            $news->newsBody = implode('|', $newsBody);
            $news->filename = implode('|', $images);
            $news->save();
            session()->flash('message', 'Edit Successful');
            return redirect('/showNews');
        }
    }

    public
    function destroy($id)
    {
        $items = App\news::find($id);
        $items->delete();
        session()->flash('message', 'Delete successful');
        return redirect('/showNews');
    }
}