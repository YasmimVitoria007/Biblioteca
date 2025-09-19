<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    public function store(Request $request){
        $membro = Membro::create([
            'nome_completo'=>$request->nome_completo,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
        ]);
        return response()->json($membro);
    }
    public function index(){
        $membros = Membro::all();
        return response()->json($membros);
    }
     public function update(Request $request)
    {
        $membro= Membro::find($request->id);
        if ($membro == null) {
            return response()->json([
                'erro' => 'Membro não encontrado'
            ]);

            if (isset($request->nome_completo)) {
                $membro->titulo = $request->titulo;
            }
            if (isset($request->endereco)) {
                $membro->endereco = $request->endereco;
            }
            if (isset($request->telefone)) {
                $membro->telefone = $request->telefone;
            }
        }
        $membro->update();
        return response()->json([
            'mensagem' => 'atualizada'
        ]);
    }
    public function show($id)
    {
        $membro = Membro::find($id);
        if ($membro == null) {
            return response()->json([
                'erro' => 'Membro não encontrado'
            ]);
        }
        return response()->json($membro);
    }
    public function delete($id)
    {
        $membro = Membro::find($id);
        if ($membro == null) {
            return response()->json([
                'erro' => 'Membro não encontrado'
            ]);
            $membro->delete();
            return response()->json([
                'Mensagem' => 'excluido'
            ]);
        }
    }
}
