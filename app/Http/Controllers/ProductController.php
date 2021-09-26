<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{

     private $productRepository;

   public function __construct(ProductRepositoryInterface  $productRepository)
   {
       $this->productRepository = $productRepository;
   }

    /**
     * @return \Illuminate\Http\JsonResponse
     *  Get All Product
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json( $this->productRepository->index() ,200);
    }

}
