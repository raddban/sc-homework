<?php

namespace App\Controller;

use App\Model\Product as ProductDb;
use App\View\View;

class ProductController
{

    // Load index page. Form page to add products
    public function index()
    {
        return View::view('index.php');
    }

    // Save products in database
    public function postRequest()
    {
        ProductDb::save();
        return header('location: /');
    }

    // Get all products from database and display in all products page
    public function allProducts()
    {
        $products = ProductDb::allProducts();
        return View::view('all-products.php', [
            'products' => $products
        ]);
    }

    // Mass products delete from database
    public function delete()
    {
        ProductDb::massProductDelete();
        return header('location: /');
    }
}