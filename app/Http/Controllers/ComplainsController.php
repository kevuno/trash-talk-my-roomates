<?php

namespace App\Http\Controllers;

use App\Complain;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ComplainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $complains = Complain::all()->sortByDesc("updated_at");;
        return view('complains.index',['complains' => $complains]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomates = \App\Roomate::all();
        return view('complains.create',['roomates' => $roomates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $complain = new Complain();
        $imageNameWithPath = Carbon::now()->format('Y-m-d H-M').'-'.$request->image_path->getClientOriginalName();
        $request->image_path->move(public_path('img/complain_img'), $imageNameWithPath);
        foreach($request->except(['_token','image_path']) as $key => $value){
            $complain->setAttribute($key, $value);
        }
        $complain->image_path = $imageNameWithPath;
        $complain->finished = false;
        $complain->votes = 0;
        $complain->save();
        return redirect()->route('complains.index')
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageNameWithPath);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
        return "Display an specific complain";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
        return "Complains will only be able to be eddited by the author, missing that";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
        return "Saving edit to db";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
        return "deleting complain, probably should not happen so we can keep track of the complains";
    }
}
