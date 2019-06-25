<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://hpmedia.bloomsbury.com/rep/s/9781408855911_309576.jpeg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aut cupiditate distinctio, dolor dolorum ducimus ea eius expedita odio ratione totam unde. Ad, consequatur dolores hic itaque praesentium voluptas!',
            'price' => 15
        ]);
        $product->save();
    }
}
