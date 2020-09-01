<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'index_allowed'=>'required',
            'image'=>'required',
            'detailed_content'=>'required'
        ]);
        try{
            $page= new Page();
            $page->title=$request->title;
            $page->index_allowed=$request->index_allowed;
            $page->meta_description=$request->meta_description;
            if ($request->hasFile('image')) {
                // Get file with the extention
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                // Get file mime type
                $mimeType = $request->file('image')->getClientMimeType();
                // Get just name of image
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get extention of image
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store the image
                $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
                // Upload image

                Storage::disk('pageImage')->put($fileNameToStore, \File::get($request->file('image')));
                $page->image=$fileNameToStore;
            }
            $page->slider_text=$request->slider_text;
            $page->content=$request->detailed_content;
            $page->other_css=$request->other_css;
            $page->other_js=$request->other_js;
            $page->save();
            return redirect()->back()->with(['message'=>'Page Created Successfully','message-type'=>'success']);
        }catch (\Exception $e){
            return redirect()->back()->with(['message'=>$e->getMessage(),'message-type'=>'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title'=>'required',
            'index_allowed'=>'required',
            'detailed_content'=>'required'
        ]);
        try{
            $page->title=$request->title;
            $page->index_allowed=$request->index_allowed;
            $page->meta_description=$request->meta_description;
            if ($request->hasFile('image')) {
                // Get file with the extention
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                // Get file mime type
                $mimeType = $request->file('image')->getClientMimeType();
                // Get just name of image
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get extention of image
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store the image
                $fileNameToStore = $fileName . '-' . time() . '.' . $extension;
                // Upload image

                Storage::disk('pageImage')->put($fileNameToStore, \File::get($request->file('image')));
                $page->image=$fileNameToStore;

            }
            $page->slider_text=$request->slider_text;
            $page->content=$request->detailed_content;
            $page->other_css=$request->other_css;
            $page->other_js=$request->other_js;
            $page->save();
            return redirect()->back()->with(['message'=>'Page Created Successfully','message-type'=>'success']);
        }catch (\Exception $e){
            return redirect()->back()->with(['message'=>$e->getMessage(),'message-type'=>'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
