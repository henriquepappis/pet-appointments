<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PetModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetController extends Controller
{
    public function listAll(Request $request)
    {
        $petModel = new PetModel;

        if ($request->has('nome')) {
            return $petModel->where('nome', 'like', '%' . $request->input('nome') . '%')->paginate();
        }

        return $petModel::paginate();
    }

    public function findById($id)
    {
        $petFind = PetModel::selectRaw("
            tb_pet.nome,
            tb_pet.especie,
            tb_atendimento.data_atendimento,
            tb_atendimento.descricao,
            CONCAT(
                'Em ',
                DATE_FORMAT(tb_atendimento.data_atendimento, '%d/%m/%Y'),
                ' o Pet ',
                tb_pet.nome,
                ' (',
                IF (tb_pet.especie = 'C', 'Cão', 'Gato'),
                ')',
                ' \'',
                tb_atendimento.descricao,
                '\''
            ) AS descritivo
        ")
        ->join(
            'tb_atendimento',
            'tb_pet.id',
            '=',
            'tb_atendimento.pet_id'
        )
        ->where('tb_pet.id', $id)
        ->get()
        ->toArray();

        if (!empty($petFind)) {
            return response()->json($petFind, 200);
        }

        return response()->json("Pet não encontrado.", 404);
    }

    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nome' => 'required|min:2',
            'especie' =>
                [
                    'required',
                    'regex:/(^[CGcg]{1}$)/u'
                ]
        ]);

        if ($validate->fails()) {
            $errors = $validate->errors();
            return response()->json("Ocorreu um erro ao salvar o Pet (" . $errors . ")", 404);
        }

        $pet = PetModel::create($request->all());
        return response()->json($pet, 201);
    }

    public function remove($id)
    {
        $remove = PetModel::destroy($id);

        if ($remove) {
            return response()->json("Pet removido com sucesso", 200);
        }

        return response()->json("Ocorreu um erro ao remover o Pet (Registro não encontrado).", 404);
    }
}
