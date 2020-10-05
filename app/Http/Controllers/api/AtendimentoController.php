<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\AtendimentoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AtendimentoController extends Controller
{
    public function listAll()
    {
        return AtendimentoModel::paginate();
    }

    public function findById($id)
    {
        return AtendimentoModel::find($id);
    }

    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), ['data_atendimento' => 'required|date_format:Y-m-d']);

        if ($validate->fails()) {
            $errors = $validate->errors();
            return response()->json("Ocorreu um erro ao salvar o Atendimento (" . $errors . ")", 404);
        }

        $atendimento = AtendimentoModel::create($request->all());
        return response()->json($atendimento, 201);
    }

    public function remove($id)
    {
        $remove = AtendimentoModel::destroy($id);

        if ($remove) {
            return response()->json("Atendimento removido com sucesso", 200);
        }

        return response()->json("Ocorreu um erro ao remover o atendimento (Registro não encontrado).", 404);
    }
}
