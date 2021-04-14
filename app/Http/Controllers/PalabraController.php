<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }


    public function palabrab_aleatoria($letra){

  
        if ($letra=='coloquial'){
        $data = file_get_contents("../palabras/".$letra.".json");
        $palabras = json_decode($data, true);

        $rand = random_int(0, count($palabras));
        echo  $palabras[$rand]["palabra"];

        }else{
        
        $data = file_get_contents("../palabras/".$letra.".json");
        $palabras = json_decode($data, true);

        $rand = random_int(0, count($palabras));
        echo "https://dle.rae.es/". $palabras[$rand]["palabra"];
        
        }
    return view('index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
