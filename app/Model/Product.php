<?php

namespace App\Model;

use Illuminate\Database\Capsule\Manager as Capsule;

class Product
{
    // Global setup for Capsule [Elequent]
    public static function db()
    {
        $capsule  = new Capsule();
        $capsule->addConnection([
            'driver' => '', // mysql
            'host' => '',   // host "localhost"
            'database' => '', // db_name
            'username' => '', // username
            'password' => '', // password
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }

    // Save products in database
    public static function save()
    {
        $products = self::db();
        $products->bootEloquent();
        if (!empty($_POST))
        {
            if ($_POST['type'] == 'size')
            {
                Capsule::table('products')->insert([
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'size' => $_POST['size'],
                ]);
            }elseif($_POST['type'] == 'weight' )
            {
                Capsule::table('products')->insert([
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'weight' => $_POST['weight'],
                ]);
            }elseif ($_POST['type'] == 'dimension')
            {
                Capsule::table('products')->insert([
                    'sku' => $_POST['sku'],
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'height' => $_POST['height'],
                    'width' => $_POST['width'],
                    'length' => $_POST['length']
                ]);
            }
        }
    }

    // Get all products from database
    public static function allProducts()
    {
        $products = self::db();
        $products->bootEloquent();
        $prod = Capsule::table('products')->get();
        return $prod;
    }

    // Delete products from database, by one, ore mass-delete
    public static function massProductDelete()
    {
        $delete = self::db();
        $delete->bootEloquent();
        $deleted = $_POST['del'];
        foreach ($deleted as $id)
        {
            Capsule::table('products')->delete($id);
        }
    }
}