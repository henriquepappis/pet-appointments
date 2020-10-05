<?php
/**
 * @OA\Get(
 *   path = "/api/atendimento",
 *   tags={"Atendimentos"},
 *   summary = "Listagem dos Atendimentos cadastrados",
 *   description = "Listagem dos Atendimentos cadastrados",
 *   @OA\Response(
 *     response = 200,
 *     description = "Listagem dos atendimentos e seus atributos",
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
                 "current_page": 1,
                 "data": {
                   {
                     "id": 1,
                     "pet_id": 1,
                     "data_atendimento": "2020-10-01",
                     "descricao": "recebeu dose de 100mg de coragem",
                     "created_at": "2020-10-04T22:24:07.000000Z",
                     "updated_at": "2020-10-04T22:24:07.000000Z"
                   },
                   {
                     "id": 2,
                     "pet_id": 2,
                     "data_atendimento": "2020-10-02",
                     "descricao": "recebeu dose de 10mg coragem",
                     "created_at": "2020-10-04T22:24:07.000000Z",
                     "updated_at": "2020-10-04T22:24:07.000000Z"
                   },
                   {
                     "id": 3,
                     "pet_id": 3,
                     "data_atendimento": "2020-10-03",
                     "descricao": "recebeu dose de 10mg de força",
                     "created_at": "2020-10-04T22:24:07.000000Z",
                     "updated_at": "2020-10-04T22:24:07.000000Z"
                   },
                   {
                     "id": 4,
                     "pet_id": 4,
                     "data_atendimento": "2020-10-04",
                     "descricao": null,
                     "created_at": "2020-10-04T22:24:07.000000Z",
                     "updated_at": "2020-10-04T22:24:07.000000Z"
                   }
                 },
                 "first_page_url": "http://localhost/api/atendimento?page=1",
                 "from": 1,
                 "last_page": 1,
                 "last_page_url": "http://localhost/api/atendimento?page=1",
                 "links": {
                   {
                     "url": null,
                     "label": "Previous",
                     "active": false
                   },
                   {
                     "url": "http://localhost/api/atendimento?page=1",
                     "label": 1,
                     "active": true
                   },
                   {
                     "url": null,
                     "label": "Next",
                     "active": false
                   }
                 },
                 "next_page_url": null,
                 "path": "http://localhost/api/atendimento",
                 "per_page": 15,
                 "prev_page_url": null,
                 "to": 4,
                 "total": 4
               }
 *           }
 *         )
 *       )
 *     }
 *   ),
 *
 * )
 */
