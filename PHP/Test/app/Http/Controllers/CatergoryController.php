<?php

namespace App\Http\Controllers;

use App\Catergory;
use Illuminate\Http\Request;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = Catergory::all();
        return view('category.list',compact('list_category'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function show(Catergory $catergory)
    {
        // dd($catergory);
        return view('category.show', compact('catergory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catergory $catergory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catergory $catergory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catergory $catergory)
    {
        //
    }
    public function getListProductsbyCateID($id)
    {
        $list_product = Catergory::find($id)->product;
        return view('product.list',compact($list_product));
    }
}
