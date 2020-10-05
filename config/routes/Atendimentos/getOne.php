<?php
/**
 * @OA\Get(
 *   path = "/api/atendimento/{id}",
 *   tags={"Atendimentos"},
 *   summary = "Lista um Atendimento identificado pelo id",
 *   description = "Lista um Atendimento identificado pelo id",
 *   @OA\Response(
 *     response = 200,
 *     description = "Lista um atendimento com seus atributos",
 *     content={
 *       @OA\MediaType(
 *         mediaType="application/json",
 *         @OA\Schema(
 *           @OA\Property(
 *             property="pet_id",
 *             type="integer",
 *             description="Identificação do Pet"
 *           ),
 *           @OA\Property(
 *             property="data_atendimento",
 *             type="date",
 *             description="Data do Atendimento"
 *           ),
 *           @OA\Property(
 *             property="descricao",
 *             type="string",
 *             description="Descrição do Atendimento"
 *           ),
 *           example={
               {
                 "id": 1,
                 "pet_id": 1,
                 "data_atendimento": "2020-10-01",
                 "descricao": "recebeu dose de 100mg de coragem",
                 "created_at": "2020-10-04T22:24:07.000000Z",
                 "updated_at": "2020-10-04T22:24:07.000000Z"
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
 *     description = "Atendimento id",
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
