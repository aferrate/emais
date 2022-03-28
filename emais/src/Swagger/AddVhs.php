<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\RequestBody(
 *      request="AddVhs",
 *      required=true,
 *      @OA\JsonContent(
 *          required={"idFilm", "full_details"},
 *          @OA\Property(type="integer", property="idFilm"),
 *          @OA\Property(type="string", property="full_details")
 *      )
 * )
 */
class AddVhs
{
}
