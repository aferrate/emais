<?php

namespace App\Controller;

use App\Application\UseCases\AddVhs;
use App\Application\UseCases\GetAllVhs;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class VhsController.
 *
 * @Route(path="/api/v1/")
 */
class VhsController
{
    /**
     * @Route("vhs/getall", name="get_all_vhs", methods={"GET"})
     * @OA\Get(
     *      path="/vhs/getall",
     *      @OA\Response(
     *          response="200",
     *          description="get all vhs",
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Vhs"))
     *      )
     * )
     */
    public function getAllVhs(GetAllVhs $getAllVhs): JsonResponse
    {
        $result = $getAllVhs->execute();

        return new JsonResponse($result, Response::HTTP_OK);
    }

    /**
     * @Route("vhs/create", name="add_vhs", methods={"POST"})
     * @OA\Post(
     *      path="/vhs/create",
     *      @OA\RequestBody(ref="#/components/requestBodies/AddVhs"),
     *      @OA\Response(
     *          response="201",
     *          description="insert vhs",
     *          @OA\JsonContent(type="string", description="response of insering vhs")
     *      ),
     *      @OA\Response(
     *          response="400",
     *          description="insert vhs bad parameters",
     *          @OA\JsonContent(type="string", description="response of insering vhs with bad parameters")
     *      )
     * )
     */
    public function addVhs(Request $request, AddVhs $addVhs): JsonResponse
    {
        $data = json_decode(strval($request->getContent()), true);

        $result = $addVhs->execute($data);

        $status = ($result['badRequest']) ? Response::HTTP_BAD_REQUEST : Response::HTTP_CREATED;

        return new JsonResponse($result['data'], $status);
    }
}
