<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::latest()->paginate(10);

        return view('numbers.index', compact('numbers'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('numbers.create');
        
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
            'number' => 'required',
            'number_available' => 'required'
        ]);

        Number::create($request->all());

        return redirect()->route('numbers.index')
            ->with('success', 'Numbers created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show(int $number)
    {
        // dd($number);
        $data = Number::where('number_id', $number)->first();
        return view('numbers.show',  ["number" => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function edit(int $number)
    {
        // dd($number);
        $data = Number::where('number_id', $number)->first();
        return view('numbers.edit', ["number" => $data]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        // dd($number);
        $request->validate([
            'number' => 'required',
            'number_available' => 'required'
        ]);
        $number = Number::where('number_id', $id)->update([
            'number' => $request->input('number'),
            'number_available' => $request->input('number_available'),
        ]);

        return redirect()->route('numbers.index')
            ->with('success', 'Number updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $numbers = Number::where('number_id', $id);
        $numbers->delete();

        return redirect()->route('numbers.index')
            ->with('success', 'Number deleted successfully');
    }
}
