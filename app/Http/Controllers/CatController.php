<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        // 這個 get() 等同於 sql 中的 select；沒有參數的情況下等於 [ select * from table ]
        $data = DB::table('cats')->get();
        dd($data);


        // $url = asset("css/style.css");
        // dd($url);


        // cat 是資料夾名稱，然後底下有一個檔案叫做 index.blade.php；中間用 . 連結
        return view('cat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // insert( ) 會新增一筆資料進到 cats 資料表中
        DB::table('cats')->insert([
            'name' => 'klay',
            'tel' => '0977888999'
        ]);

        // return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        dd("hello $id");
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
