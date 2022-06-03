<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index')->with('livros', $livros);
    }

    public function create()
    {
       return view('livros.create');
    }

    public function store(LivroRequest $request)
    {
        $dados = $request->all();

        Livro::create($dados);

        return redirect('livro')->with('flash_message', 'Livro adicionado com sucesso!');
    }

    public function show($id)
    {
        $livro = Livro::find($id);

        return view('livros.show')->with('livro', $livro);
    }

    public function edit($id)
    {
        $livro = Livro::find($id);

        return view('livros.edit')->with('livro', $livro);
    }

    public function update(LivroRequest $request, $id)
    {
        $livro = Livro::find($id);

        $dados = $request->all();

        $livro->update($dados);

        return redirect('livro')->with('flash_message', 'livro salvo com sucesso!');
    }

    public function destroy($id)
    {
        Livro::destroy($id);

        return redirect('livro')->with('flash_message', 'livro apagado com sucesso!');
    }
}
