<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support) { // ...index(Support $support) <==> $support = new Support();  Creat a instance of Class "Support".

        // Getting dates from database from our model "Support" that have conection with our migration "supports"
        $supports = $support->all();

        return view('admin/supports/index', compact('supports')); // Enviando todos os valores retornado nos "Supports" para a blade e manipula-los por la.
    }

    // Metodo responsavel por exibir os detalhes de um registro (suporte)
    public function show(string|int $id) {
        if (!$support = Support::find($id)) // find() -> recupera um item pelo parametro passado, nesse caso eh o id. Se o item nao for encontrado, o utilizador eh redirecionado na pagina anterior
            return redirect()->back();
        
        return view('admin/supports/show', compact('support'));
    }

    // Metodo responsavel por cadastrar um novo suporte/duvida
    public function create() {
        return view('admin/supports/create');
    }

    // Metodo responsavel por receber a nova duvida e armazena-la
    public function store(Request $request, Support $support) {
        $data = $request->all();
        $data['status'] = 'a'; // Para todos os suportes a serem cadastrados, inicializar o campo "status" com "a -> active"

        $support->create($data); // Fazendo a insersecao na BD, na tabela de suporte.
        
        return redirect()->route('supports.index'); // Depois de fazer o cadastro, redirecionar para a pagina de listagem dos suportes
    }
}
