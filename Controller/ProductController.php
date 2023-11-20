<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

// DISIMULASIKAN INI ADALAH CLASS CONTROLLER PRODUCT 
class ProductController extends Controller
{
    // gunakan trait yang sudah dibuat 
    use ResponseFormatter;

    // MAGIC METHOD, Method ini akan diakses pada saat pembuatan object.

    public function __construct()
    {

        // SET ATRIBUT controllerlane PADA PARENT CLASS CONTROLLER

        $this->controllerName = "Get ALL Product";

        // SET ATRIBUT controllerlethod PADA PARENT CLASS CONTROLLER

        $this->controllerMethod = "GET";
    }

    // DISIMULASIKAN INI METHOD UNTUK GET DATA PRODUCT

    public function getAllProduct()
    {
        // ARRAY DUNNY DATA 
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambur"
        ];

        $response = [
            "controller attribute" => $this->getControllerAttribute(), // ambil method getControllerAttribute da parent class
            "product" => $dummyData
        ];

        // gunakan method dari trait yang sudah dibuat 
        return $this->responseFormatter(200, "Success", $response);
    }
}