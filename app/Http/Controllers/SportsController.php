<?php

namespace App\Http\Controllers;

use App\Models\Sports;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SportsController extends Controller
{

    public function index(Request $request)
    {
        // DBよりBookテーブルの値を全て取得
        $sports = Sports::all();
  
        // 取得した値をビュー「book/index」に渡す
        return response() -> json($sports, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sports $sports): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sports $sports): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sports $sports): Response
    {
        //
    }
}
