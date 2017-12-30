<?php

namespace Rubel\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Rubel\Http\Controllers\Controller;
use Rubel\Repositories\Eloquent\Api\PostRepository;
use Rubel\Http\Requests\Api\v1\Post\StorePostRequest;
use Rubel\Http\Requests\Api\v1\Post\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * STATUS_CODE_OK
     *
     * @var int
     */
    const STATUS_CODE_OK = 200;

    /**
     * PostRepository
     *
     * @var $postRepository
     */
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json($this->postRepository->index(), self::STATUS_CODE_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(StorePostRequest $request): JsonResponse
    {
        return response()->json($this->postRepository->store($request), self::STATUS_CODE_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(Int $id): JsonResponse
    {
        return response()->json($this->postRepository->show($id), self::STATUS_CODE_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     * @return JsonResponse
     */
    public function update(UpdatePostRequest $request, int $id): JsonResponse
    {
        return response()->json($this->postRepository->update($request, $id), self::STATUS_CODE_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json($this->postRepository->destroy($id), self::STATUS_CODE_OK);
    }
}
