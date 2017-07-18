<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class videosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = App\Video::latest()->get();
        return view('dashboard.video.videoList', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.video.createVideos', compact('videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //If ($request->hasFile('video')) {
        $file = $request->file('video');
        $destinationPath = public_path() . '/uploads/video';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        $poster = $request->file('poster');
        $des = public_path() . '/uploads/poster';
        $posterName = $poster->getClientOriginalName();
        $poster->move($des, $posterName);
        App\video::create([
            'filename' => $filename,
            'postername' => $posterName,
            'videoTitle' => request('videoTitle'),
            'videoBody' => request('videoBody')
        ]);

        App\news::create([
            'videoName' => $filename,
            'filename' => $posterName,
            'newsCategory_id'=>request('newsCategory_id'),
            'category' => request('category'),
            'author' => request('author'),
            'newsTitle' => request('videoTitle'),
            'newsBody' => request('videoBody')
        ]);
        // }
        session()->flash('message', 'Video Upload Successful');
        return redirect('/videoList');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = App\Video::find($id);
        return view('dashboard.video.singleVideo', compact('videos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = App\video::find($id);
        session()->flash('message', 'Video Edit Successful');
        return view('dashboard.video.videoEdit', compact('video'));
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
        $file = $request->file('video');
        $destinationPath = public_path() . '/uploads/video';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        $poster = $request->file('poster');
        $des = public_path() . '/uploads/poster';
        $posterName = $poster->getClientOriginalName();
        $poster->move($des, $posterName);
        $video = App\video::find($id);
        $video->videoTitle = $request->videoTitle;
        $video->videoBody = $request->videoBody;
        $video->filename = $filename;
        $video->postername = $posterName;
        $video->save();
        session()->flash('message', 'video Updated Successful');
        return redirect('/videoList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = App\video::find($id);
        $video->delete();
        session()->flash('message', 'Video Deleted Successful');
        return redirect()->back();
    }
}
