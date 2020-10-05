<?php
/**
 * @OA\Post(
 *   path = "/api/pet",
 *   tags={"Pets"},
 *   summary = "Adiciona um Pet",
 *   description = "Adiciona um Pet",
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
                 "nome": "Manda Chuva",
                 "especie": "G",
                 "updated_at": "2020-10-04T23:20:16.000000Z",
                 "created_at": "2020-10-04T23:20:16.000000Z",
                 "id": 24
               }
 *           }
 *         )
 *       )
 *     }
 *   ),
 *
 *   @OA\Parameter(
 *     name = "nome",
 *     in = "query",
 *     description = "Nome do Pet",
 *     required = true,
 *
 *   @OA\Schema(
 *       type = "string",
 *     ),
 *     style = "form",
 *   ),
 *
 *   @OA\Parameter(
 *     name = "especie",
 *     in = "query",
 *     description = "Espécie do Pet (C ou G)",
 *     required = true,
 *
 *   @OA\Schema(
 *       type = "string",
 *     ),
 *     style = "form"
 *   ),
 * )
 */
