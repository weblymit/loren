<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->paginate(3);
        // dd($news);
        return view('pages.home', compact('news'));
    }
    
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $news)
    {
         return view('pages.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
         $request->validate([
            'title' => 'required|min:5|string|max:180|unique:news,title',
            'content' => 'required|min:20|max:2000|string',
            'img' => 'required|image|mimes:png,jpg,jpeg|max:2000',
    ]);

        $validateImg = $request->file('img')->store('news');

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $validateImg,
            'created_at' => now()
    ]);

        // redirect
         return redirect()->route('dashboard')->with('status', 'News added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //  dd($news);
         return view('pages.show', compact('news'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $post)
    {
        $post->delete();
            return redirect()
            ->route('dashboard')
            ->with('status', "The news has been deleted");
    }

    public function allNews()
  {
    $news = News::orderBy('updated_at', 'DESC')->paginate(5);
    return view('pages.all-news', compact('news'));
  }
}
