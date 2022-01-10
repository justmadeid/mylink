<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('links.index',[
            'links' => Link::where('user_id', auth()->user()->id)
                ->withCount('visits')
                ->with('latest_visit')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'required',
                'link' => 'required|url'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        // $link = Auth::user()->links()
        //     ->create($request->only(['name', 'link']));

        // if ($link) {
        //     return redirect()->to('/dashboard/links');
        // }

        Link::create($validatedData);

        return redirect('/dashboard/links')->with('success','Success add data');

        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        if ($link->user_id !== Auth::id()) {
            return abort(404);
        }

        return view('links.edit', [
            'link' => $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        if ($link->user_id !== Auth::id()) {
            return abort(403);
        }

        $request->validate([
            'name' => 'required',
            'link' => 'required|url'
        ]);

        $link->update($request->only(['name', 'link']));

        return redirect()->to('/dashboard/links');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        if ($link->user_id !== Auth::id()) {
            return abort(403);
        }

        $link->delete();

        return redirect()->to('/dashboard/links');
    }
}
