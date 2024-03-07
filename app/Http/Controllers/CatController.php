<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// 取得 model
use App\Models\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        // 這個 get() 等同於 sql 中的 select；沒有參數的情況下等於 [ select * from table ]
        // $data = DB::table('cats')->get();
        // $data['cats'] = DB::select("select * from cats");
        // $data['dogs'] = DB::select("select * from dogs");
        // $data['test'] = 123;


        // 使用 model 的方式來查詢 cats 資料表中的資料
        $data['cats'] = Cat::all();


        // $url = asset("css/style.css");
        // dd($url);


        // cat 是資料夾名稱，然後底下有一個檔案叫做 index.blade.php；中間用 . 連結

        // 後面那個陣列是可以傳到前端的內容，這裡我自定義 selfDefine，如此前端存取此內容時就會寫為 $selfDefine
        return view('cat.index', ['dataOK' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // insert( ) 會新增一筆資料進到 cats 資料表中

        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 這個變數儲存著欄位名稱和欄位值
        $input = $request->except('_token');
        $now = now();

        $input['created_at'] = $now;
        $input['updated_at'] = $now;
        $input['tel'] = "555";

        DB::table('cats')->insert($input);
        return redirect()->route('cats.index');
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
