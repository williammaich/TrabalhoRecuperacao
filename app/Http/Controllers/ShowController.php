<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $show = Show::all();
       return view('shows_lista', compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $acao = 1;
        
        return view('shows_form', compact('acao'));
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        
        $s = Show::create($dados);
        if($s){
            
            return redirect()->route('shows.index')
                    ->with('status', $request->nome.'Cadastrado com sucesso');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = new Show();
        $reg = $s ->find($id);
        
        $acao = 3;
        return view('shows_form', compact('reg','acao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = new Show();
        
        $reg = $s->find($id);
        
        $acao = 2;
        
        return view('shows_form', compact('reg', 'acao'));
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
        $reg = Show::find($id);
        $dados = $request->all();
        $alterado = $reg->update($dados);
        
        if($alterado){
            return redirect()->route('shows.index')
                    ->with('status', $request->nome.'Aterado com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Show::find($id);
        if($s->delete()){
            return redirect()->route('shows.index')->with('status', $s->nome . 'Excluido com sucesso');
        }
    }
}
