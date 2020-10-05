<?php
/**
 * @OA\Delete(
 *   path = "/api/atendimento/{id}",
 *   tags={"Atendimentos"},
 *   summary = "Remove um Atendimento identificado pelo id",
 *   description = "Remove um Atendimento identificado pelo id",
 *   @OA\Response(
 *     response = 200,
 *     description = "Remove um pet",
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
               "Atendimento removido com sucesso"
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
