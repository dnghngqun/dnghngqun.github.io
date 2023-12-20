<?php

namespace App\Http\Controllers;

use App\Models\Mobiles;
use Illuminate\Http\Request;

class MobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = mobiles::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. get data from Web
        //2. validate
        $request->validate([
            'mobile_name'         =>  'required',
            'model'         =>        'required',
            'maker'               =>  'required',
            'mobile_image'        =>  'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);

        //get unique name of Mobile
        $file_name = time() . '.' . request()->mobile_image->getClientOriginalExtension();
        request()->mobile_image->move(public_path('images'), $file_name);

        $mobile = new mobiles();
        $mobile->mobile_name = $request->mobile_name;
        $mobile->model = $request->model;
        $mobile->maker = $request->maker;
        $mobile->mobile_image = $file_name;

        echo $mobile;

        //3. Save to DB
        $mobile->save();

        //4. Redirect Mobile list
        return redirect()->route('mobiles.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobiles  $mobiles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mobiles = mobiles::find($id);
        return view('show', compact('mobiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobiles  $mobiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobiles $mobiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobiles  $mobiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobiles $mobiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobiles  $mobiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobiles $mobiles)
    {
        //
    }
}
