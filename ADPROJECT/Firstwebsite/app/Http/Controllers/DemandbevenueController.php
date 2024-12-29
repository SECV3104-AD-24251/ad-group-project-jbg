<?php

namespace App\Http\Controllers;

use App\Models\demandbevenue;
use Illuminate\Http\Request;

class DemandbevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data where user == auth()->user()->id
        $data = demandbevenue::where('venue_id', auth()->user()->id)->get();
        return view('user.beavenue', compact('data'));
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
        // validate
        $request->validate([


            'description' => 'required',
        ]);
        $inputs = $request->all();
        $inputs['name'] = auth()->user()->name;
        $inputs['image'] = auth()->user()->image;
        $inputs['email'] = auth()->user()->email;
        $inputs['venue_id'] = auth()->user()->id;
        demandbevenue::create($inputs);
        return redirect()->back()->with('success', 'Your request has been sent successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demandbevenue  $demandbevenue
     * @return \Illuminate\Http\Response
     */
    public function show(demandbevenue $demandbevenue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demandbevenue  $demandbevenue
     * @return \Illuminate\Http\Response
     */
    public function edit(demandbevenue $demandbevenue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\demandbevenue  $demandbevenue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demandbevenue $demandbevenue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demandbevenue  $demandbevenue
     * @return \Illuminate\Http\Response
     */
    public function destroy(demandbevenue $demandbevenue)
    {
        //
    }
}
