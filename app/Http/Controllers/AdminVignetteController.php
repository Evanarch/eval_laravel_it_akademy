<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vignette;
use App\User;
use Validator;

class AdminVignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin/hellothere');
    }

    public function displayAll()
    {
      $vignettes = Vignette::all();

      return view('admin/index',[
        'vignettes' => $vignettes
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
        'legende' => 'required|max:10',
      ]);

      if($validator->fails()){
        return back()->withErrors($validator)->withInput();
      }
      $vignette = new Vignette;
      $vignette->legende = $request->legende;
      $vignette->description = $request->description;
      $vignette->url = $request->url;
      $vignette->save();
      return "je suis dans le store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vignette = Vignette::find($id);

      return view('admin/show',[
        'vignette' => $vignette
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vignette = Vignette::find($id);

      return view('admin/edit',[
        'vignette' => $vignette
      ]);
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
      $validator = Validator::make($request->all(),[
      'legende' => 'required|max:10',
      ]);

      if($validator->fails()){
        return back()->withErrors($validator)->withInput();
      }
      $vignette = Vignette::find($id);
      $vignette->legende = $request->legende;
      $vignette->description = $request->description;
      $vignette->url = $request->url;
      $vignette->save();
      return "je suis dans l'edit";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vignette = Vignette::all();
      $vignette->destroy($id);
      return "destruction du " . $id;
    }
}
