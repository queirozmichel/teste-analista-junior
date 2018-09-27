<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;
use App\Filme;
use App\User;
use Auth;

class CadastroController extends Controller
{
	public function index() {
		$cadastro = Cadastro::all();
		$filme = Filme::all();
		$user = User::all();
		$total = Cadastro::all()->count();
		return view('list-cadastro', compact('cadastro','filme', 'user', 'total'));

	}

	public function create() {
		return view('include-cadastro');
	}

	public function store(Request $request) {
		$filmebd = new Filme;
		$registro = new Cadastro;
		$filmebd->nome = $request->nomeFilme;
		$filmebd->ano = $request->anoFilme;
		$filmebd->diretor = $request->diretorFilme;
		$filmebd->nota = $request->notaFilme;
		$filmebd->sinopse = $request->sinopseFilme;
		
		if (Auth::check()) {
			$filmebd->cadastro_id = Auth::id();
		}
		
		$filmebd->save();
		return redirect()->route('cadastro.index')->with('message', 'Cadastro criado com sucesso!');
	} 

	public function show($id) {
		//
	}

	public function edit($id) {
		$registro = Cadastro::findOrFail($id);
		return view('alter-cadastro', compact('registro'));
	}

	public function update(Request $request, $id) {
		$registro = Cadastro::findOrFail($id); 
		$registro->nome = $request->nome;
		$registro->titulacao = $request->titulacao;
		$registro->cpf = $request->cpf;
		$registro->rg = $request->rg;
		$registro->email = $request->email;
		$registro->save();
		return redirect()->route('cadastro.index')->with('message', 'Cadastro alterado com sucesso!');
	}

	public function destroy($id) {
		$registro = Cadastro::findOrFail($id);
		$registro->delete();
		return redirect()->route('cadastro.index')->with('message', 'Cadastro excluído com sucesso!');
	}
}
