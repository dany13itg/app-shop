<?php

use Illuminate\Database\Seeder;
use App\product;
use App\category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factory
        
    	//factory(category::class, 5)->create();

        //factory(product::class, 50)->create();
        
        //factory(ProductImage::class, 100)->create();

        $categories = factory(category::class, 5)->create();
        $categories -> each(function ($category){
        $products = factory(product::class, 10)->make();
        $category->products()->saveMany($products);

        $products->each(function ($p){
        $images = factory(ProductImage::class, 5)->make();
        $p->images()->saveMany($images);
        });
        });


    }
}
