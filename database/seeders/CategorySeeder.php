<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    $category = new Category;
    $category->name='Frutas y Verduras';
    $category->description='Productos frescos y saludables, incluyendo frutas, verduras y hortalizas.';
    $category->save();

    $category = new Category;
    $category->name='Carnes y Aves';
    $category->description='Todo tipo de carnes y aves, frescas y envasadas.';
    $category->save();

    $category = new Category;
    $category->name='Pescado y Mariscos';
    $category->description='Productos del mar, frescos y congelados.';
    $category->save();

    $category = new Category;
    $category->name='Lácteos y Huevos';
    $category->description='Productos lácteos como leche, queso, yogur, y huevos frescos.';
    $category->save();

    $category = new Category;
    $category->name='Panes y Cereales';
    $category->description='Pan fresco, cereales, y productos horneados.';
    $category->save();

    $category = new Category;
    $category->name='Productos enlatados';
    $category->description='Alimentos enlatados como conservas, legumbres y salsas.';
    $category->save();

    $category = new Category;
    $category->name='Bebidas';
    $category->description='Bebidas alcohólicas y no alcohólicas, incluyendo refrescos y aguas.';
    $category->save();

    $category = new Category;
    $category->name='Dulces y Snacks';
    $category->description='Golosinas, chocolates, galletas y snacks.';
    $category->save();

    $category = new Category;
    $category->name='Cuidado Personal';
    $category->description='Productos de higiene personal y cuidado del cuerpo.';
    $category->save();

    $category = new Category;
    $category->name='Artículos de Limpieza';
    $category->description='Productos de limpieza para el hogar y utensilios de limpieza.';
    $category->save();

    }
}
