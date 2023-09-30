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
        $names = [
            'Frutas y Verduras', 'Carnes y Aves', 'Pescados y Mariscos', 'Lácteos y Huevos',
            'Panadería y Pastelería', 'Congelados', 'Productos enlatados', 'Cereales y Desayuno',
            'Bebidas y Refrescos', 'Productos de Limpieza', 'Cuidado Personal', 'Artículos para el Hogar',
        ];
        
        $descriptions = [
            'Incluye una variedad de productos frescos y saludables, como frutas y verduras, ideales para una alimentación equilibrada.',
            'Incluye una selección de carnes y aves de alta calidad, perfectas para tus comidas principales.',
            'Incluye opciones frescas y deliciosas de pescados y mariscos.',
            'Incluye productos esenciales como leche, yogur, queso y huevos, elementos básicos de muchas dietas.',
            'Incluye pan fresco, pasteles y otros productos de panadería.',
            'Incluye alimentos listos para su uso, como comidas preparadas y alimentos congelados para mayor comodidad.',
            'Incluye productos enlatados con larga vida útil, ideales para almacenar alimentos básicos y preparar comidas rápidas.',
            'Incluye cereales y alimentos para el desayuno ideales para comenzar bien el día.',
            'Incluye bebidas y refrescos que abarcan una variedad de opciones, desde agua embotellada hasta bebidas gaseosas y jugos.',
            'Incluye productos de limpieza para el hogar, como detergentes y productos de cuidado del hogar.',
            'Incluye productos de cuidado personal, como champús, jabones y productos de belleza.',
            'Incluye una variedad de artículos esenciales para el hogar, como utensilios de cocina y productos para la organización del espacio.',
        ];

        for ($i = 0; $i < count($names); $i++) {
            $category = new Category;
            $category->name= $names[$i];
            $category->description= $descriptions[$i];
            $category->save();
        }
 

    }
}
