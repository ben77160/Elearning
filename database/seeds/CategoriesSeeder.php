<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->icon = '<i class="fas fa-code"></i>' ;
        $category->name = "Développemnt web";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-terminal"></i>' ;
        $category->name = "Développemnt Logiciel";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-pencil"></i>' ;
        $category->name = "Infrastructures";
        $category->save();
    }
}
