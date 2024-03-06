<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $url = asset("css/style.css");
        // dd($url);


        // cat 是資料夾名稱，然後底下有一個檔案叫做 index.blade.php；中間用 . 連結
        return view('cat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('hello cat store');
        // dd($request);
        $input =  $request->except('_token');
        dd($input);
        dd("hello cat store");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function multiple()
    {
        dd('hello cats multiple');
    }
}