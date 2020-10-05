<?php
/**
 * @OA\Post(
 *   path = "/api/atendimento",
 *   tags={"Atendimentos"},
 *   summary = "Adiciona um Atendimento",
 *   description = "Adiciona um Atendimento",
 *
 *   @OA\Response(
 *     response = 200,
 *     description = "Retorno mensagem de sucesso",
 *     content={
 *       @OA\MediaType(
 *         mediaType="application/json",
 *         @OA\Schema(
 *           @OA\Property(
 *             property="id",
 *             type="integer",
 *             description="Identificação do Atendimento"
 *           ),
 *           @OA\Property(
 *             property="pet_id",
 *             type="integer",
 *             description="Identificação do Pet"
 *           ),
 *           @OA\Property(
 *             property="data_atendimento",
 *             type="string",
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
                 "data_atendimento": "2020-10-04",
                 "descricao": "recebeu a primeira dose da vacina da gripe",
                 "updated_at": "2020-10-04T23:20:16.000000Z",
                 "created_at": "2020-10-04T23:20:16.000000Z"
               }
 *           }
 *         )
 *       )
 *     }
 *   ),
 *
 *   @OA\Parameter(
 *     name = "pet_id",
 *     in = "query",
 *     description = "Identificador do Pet",
 *     required = true,
 *
 *   @OA\Schema(
 *       type = "integer",
 *     ),
 *     style = "form",
 *   ),
 *
 *   @OA\Parameter(
 *     name = "data_atendimento",
 *     in = "query",
 *     description = "Data do Atendimento",
 *     required = true,
 *
 *   @OA\Schema(
 *       type = "string",
 *     ),
 *     style = "form"
 *   ),
 *
 *   @OA\Parameter(
 *     name = "descricao",
 *     in = "query",
 *     description = "Descrição do Atendimento",
 *
 *   @OA\Schema(
 *       type = "string",
 *     ),
 *     style = "form"
 *   ),
 * )
 */
