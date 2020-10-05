<?php
/**
 * @OA\Get(
 *   path = "/api/pet/{id}",
 *   tags={"Pets"},
 *   summary = "Lista um Pet identificado pelo id",
 *   description = "Lista um Pet identificado pelo id",
 *   @OA\Response(
 *     response = 200,
 *     description = "Lista um pet com seus atributos",
 *     content={
 *       @OA\MediaType(
 *         mediaType="application/json",
 *         @OA\Schema(
 *           @OA\Property(
 *             property="id",
 *             type="integer",
 *             description="Identificação do Pet"
 *           ),
 *           @OA\Property(
 *             property="nome",
 *             type="string",
 *             description="Nome do Pet"
 *           ),
 *           @OA\Property(
 *             property="especie",
 *             type="string",
 *             description="Espécie do Pet (C ou G)"
 *           ),
 *           example={
                {
                    {
                        "nome": "Coragem",
                        "especie": "C",
                        "data_atendimento": "2020-10-01",
                        "descricao": "recebeu dose de 100mg de coragem",
                        "descritivo": "Em 01/10/2020 o Pet Coragem (Cão) 'recebeu dose de 100mg de coragem'"
                    }
                }
 *           }
 *         )
 *       )
 *     }
 *   ),
 *
 *   @OA\Parameter(
 *     name = "id",
 *     in = "path",
 *     description = "Pet id",
 *     required = true,
 *
 *   @OA\Schema(
 *       type = "integer",
 *     ),
 *     style = "form"
 *   ),
 *
 * )
 */
