<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        $this->call(ProductsSeeder::class);

        //Model::reguard();
    }
}

class ProductsSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('products')->insert([
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
            array('name' => 'Test products', 'cate_id' => 1, 'description' => 'Here is test product in Laravel 5', 'price' => 500000, 'created_at' => Carbon\Carbon::now()),
        ]);
    }
}
