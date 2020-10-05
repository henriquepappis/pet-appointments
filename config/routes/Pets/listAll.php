<?php
/**
 * @OA\Get(
 *   path = "/api/pet",
 *   tags={"Pets"},
 *   summary = "Listagem dos Pets cadastrados",
 *   description = "Listagem dos Pets cadastrados",
 *   @OA\Response(
 *     response = 200,
 *     description = "Listagem dos pets e seus atributos",
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
                 "current_page": 1,
                 "data": {
                   {
                     "id": 1,
                     "nome": "Coragem",
                     "especie": "C",
                     "created_at": "2020-10-04T22:19:26.000000Z",
                     "updated_at": "2020-10-04T22:19:26.000000Z"
                   },
                   {
                     "id": 2,
                     "nome": "Scooby Doo",
                     "especie": "C",
                     "created_at": "2020-10-04T22:19:26.000000Z",
                     "updated_at": "2020-10-04T22:19:26.000000Z"
                   },
                   {
                     "id": 3,
                     "nome": "Mew",
                     "especie": "G",
                     "created_at": "2020-10-04T22:19:26.000000Z",
                     "updated_at": "2020-10-04T22:19:26.000000Z"
                   },
                   {
                     "id": 4,
                     "nome": "Mewtwo",
                     "especie": "G",
                     "created_at": "2020-10-04T22:19:26.000000Z",
                     "updated_at": "2020-10-04T22:19:26.000000Z"
                   }
                 },
                 "first_page_url": "http://localhost/api/pet?page=1",
                 "from": 1,
                 "last_page": 1,
                 "last_page_url": "http://localhost/api/pet?page=1",
                 "links": {
                   {
                     "url": null,
                     "label": "Previous",
                     "active": false
                   },
                   {
                     "url": "http://localhost/api/pet?page=1",
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
                 "path": "http://localhost/api/pet",
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
