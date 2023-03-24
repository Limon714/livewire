<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$products=[


[
'name'=>'Product one',
'description'=>'This is a description for product One',
'price'=>123
],
[
'name'=>'Product two',
'description'=>'This is a description for product two',
'price'=>223
],
[
'name'=>'Product Three',
'description'=>'This is a description for product Three',
'price'=>323
],
[
'name'=>'Product Four',
'description'=>'This is a description for product Four',
'price'=>423
],
[
'name'=>'Product Five',
'description'=>'This is a description for product five',
'price'=>523
],
[
'name'=>'Product Six',
'description'=>'This is a description for product Six',
'price'=>623
],
[
'name'=>'Product Seven',
'description'=>'This is a description for product Seven',
'price'=>723
],
];

foreach($products as $product){
Product::create($product);
}


    }
}
