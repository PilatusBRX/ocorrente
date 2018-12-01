<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
//adicionados:

use Illuminate\Support\Facades\Gate;

class ChamadoController extends Controller
{

    public function __construct()
 {

     Carbon::setLocale('pt_BR');
 }



    public function index()
    {

        //$chamados= Chamado::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate();
        $user = Auth::user();
        $chamados = Chamado::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index', compact('chamados'));
    }


    public function create()
    {
        return view('admin.create');

    }


    public function store(Request $request)
    {

        $chamado = new Chamado;
        $chamado->title = $request->input('title');
        $chamado->description = $request->input('description');
        $chamado->status = $request->input('status');
        Auth::user()->chamados()->save($chamado);

        return redirect('/');
    }


    public function show($id)
    {
     $chamado = Chamado::find($id);
     return view('admin.show', compact('chamado'));


    }

    public function edit($id)
        {
        $chamado = Chamado::find($id);
        return view('admin.edit', compact('chamado'));

       }


    public function update(Request $request, $id)
    {
        $chamado = Chamado::find($id);
        $chamado->title = $request->input('title');
        $chamado->description = $request->input('description');
        $chamado->status = $request->input('status');
        $chamado->save();
         return redirect('/');

    }


    public function destroy($id)
    {
        $chamado = Chamado::find($id);
        $chamado->delete();
        return redirect('/');

    }

}//Fim
