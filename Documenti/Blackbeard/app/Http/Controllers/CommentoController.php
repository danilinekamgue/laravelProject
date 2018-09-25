<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Commento;
use Validator;
use Log;

class CommentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $commentos = Commento::orderBy('date', 'desc')->get();
    
        return view('commento.index', compact('commentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commento.create');
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
        $validator = Validator::make($request->all(), [
            
            'description'   =>  'required',
            'name'          =>  'required',
            'date'          =>  'required'
        ]);

        if ($validator->fails()) {
            return redirect('commento/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $input = $request->all();
        Commento::create($input);

        return redirect()->action('CommentoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commento = Commento::find($id);
        
        return view('commento.show', compact('commento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commento = Commento::find($id);

        return view('commento.edit',compact('commento'));
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

        
        
        $commento = Commento::find($id);
        $input = $request->all();
        $commento->update($input);
        
        return redirect()->action('CommentoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commento = Commento::find($id);

        $commento->delete();

        return redirect()->action('CommentoController@index');
    }
}
