<?php

namespace App\Http\Controllers;

use App\Models\node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'Hello, world!';
        return view('nodes.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->nodes()->create($validated);

        return redirect(route('nodes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function show(node $node)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function edit(node $node)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, node $node)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\node  $node
     * @return \Illuminate\Http\Response
     */
    public function destroy(node $node)
    {
        //
    }
}
