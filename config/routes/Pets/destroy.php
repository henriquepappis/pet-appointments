<?php
/**
 * @OA\Delete(
 *   path = "/api/pet/{id}",
 *   tags={"Pets"},
 *   summary = "Remove um Pet identificado pelo id",
 *   description = "Remove um Pet identificado pelo id",
 *   @OA\Response(
 *     response = 200,
 *     description = "Remove um pet",
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
               "Pet removido com sucesso"
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
