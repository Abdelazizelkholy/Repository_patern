<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     *  Get All Users
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json( $this->userRepository->index() ,200);
    }




}
