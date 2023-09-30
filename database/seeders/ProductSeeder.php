<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $names = [
            'Aceite de oliva', 'Acondicionador capilar', 'Atún enlatado', 'Baguette de trigo', 'Camarones',
            'Cereal de avena', 'Cerveza artesanal', 'Champú nutritivo', 'Croissants', 'Detergente líquido',
            'Galletas de chocolate', 'Helado de vainilla', 'Leche desnatada', 'Limpiador multiusos', 'Manzanas',
            'Panecillos de canela', 'Pan integral', 'Pavo rebanado', 'Peras', 'Pizza congelada',
            'Plátanos', 'Pollo entero', 'Queso cheddar', 'Refresco de cola', 'Salmón fresco',
            'Sopa de lentejas enlatada', 'Sopa de tomate en lata', 'Ternera molida', 'Trucha ahumada', 'Yogur de fresa',
        ];
        
        $descriptions = [
            'Aceite esencial en la cocina, utilizado para cocinar y aliñar ensaladas.', 
            'Producto para el cuidado del cabello, aporta suavidad y brillo.', 
            'Pescado enlatado, rico en proteínas y ácidos grasos omega-3.', 
            'Pan tradicional francés, crujiente por fuera y tierno por dentro.', 
            'Mariscos delicados y sabrosos, ideales para platos de lujo.',
            'Alimento nutritivo para el desayuno, rico en fibra y vitaminas.', 
            'Bebida alcohólica, perfecta para relajarse y socializar.', 
            'Producto para el cabello, nutre y suaviza el pelo.', 
            'Deliciosos panecillos de origen francés, perfectos para el desayuno.', 
            'Producto de limpieza para ropa, elimina las manchas y refresca la ropa.', 
            'Galletas con trozos de chocolate, un placer dulce.', 
            'Postre congelado y cremoso, una delicia para el paladar.', 
            'Lácteo bajo en grasa, una fuente de calcio esencial para una dieta equilibrada.', 
            'Producto de limpieza versátil, ideal para varias superficies.', 
            'Una fruta dulce y crujiente, ideal para bocadillos y ensaladas.', 
            'Panecillos dulces y especiados, ideales para el desayuno o postre.', 
            'Pan saludable hecho con granos enteros, rico en fibra.', 
            'Carne de ave magra y saludable, perfecta para sándwiches.', 
            'Frutas jugosas con una textura suave y dulce sabor.', 
            'Comida rápida y congelada, ideal para cenas rápidas en casa.', 
            'Frutas de colores brillantes, una fuente de vitaminas y energía.', 
            'Carne de ave versátil y magra, perfecta para asar, hervir o freír.', 
            'Queso sabroso y cremoso, ideal para sándwiches y aperitivos.', 
            'Bebida refrescante y carbonatada, un favorito de muchas personas.', 
            'Pescado de agua dulce o salada, conocido por su sabor suave y saludable.', 
            'Sopa enlatada llena de proteínas y fibras, una comida rápida.', 
            'Alimento enlatado conveniente, una base para sopas y guisos.', 
            'Carne molida magra y versátil, ideal para hamburguesas y guisos.', 
            'Pescado ahumado, conocido por su sabor ahumado distintivo.', 
            'Producto lácteo cremoso con sabor a fruta, un postre popular.',
        ];
        
        $brands = [
            'OliveGrove', 'SilkyLocks', 'SeaHarvest', 'CrispyCrust', 'SeaTreasure',
            'MorningMunch', 'CraftBrew', 'HairGlow', 'FrenchFlavor', 'CleanSpark',
            'ChocoCharm', 'ChillyTreat', 'DairyDeluxe', 'SparkleClean', 'FreshBite',
            'CinnamonJoy', 'WholeGrainBake', 'SlicedTaste', 'FruitBurst', 'FrostyFeast',
            'FruitFiesta', 'PoultryPal', 'CreamyCheese', 'BubblySip', 'OceanCatch',
            'CanfulSoup', 'CanMagic', 'LeanGrind', 'SmokedCatch', 'YogurtBliss',
        ];
        
        $prices = [
            10500, 6000, 19850, 6200, 28500, 5750, 14800, 9950, 8950, 8100, 
            5300, 11200, 7500, 3900, 11750, 5600, 7400, 11950, 4500, 13450,
            12300, 9800, 9300, 2300, 16250, 3200, 4900, 17600, 23700, 6750,
        ];

        $images_routes = [
            'images/products/Aceitedeoliva.webp', 'images/products/Acondicionadorcapilar.webp', 'images/products/Atunenlatado.webp',
            'images/products/Baguettedetrigo.jpg', 'images/products/Camarones.jpg', 'images/products/Cerealdeavena.jpg',
            'images/products/Cervezaartesanal.jpg', 'images/products/Champunutritivo.jpg', 'images/products/Croissants.jpg',
            'images/products/Detergenteliquido.jpg', 'images/products/Galletasdechocolate.jpg', 'images/products/Heladodevainilla.jpg',
            'images/products/Lechedesnatada.jpg', 'images/products/Limpiadormultiusos.jpg', 'images/products/Manzanas.jpg',
            'images/products/Panecillosdecanela.jpg', 'images/products/Panintegral.png', 'images/products/Pavorebanado.webp',
            'images/products/Peras.png', 'images/products/Pizzacongelada.jpg', 'images/products/Platanos.jpg',
            'images/products/Polloentero.jpg', 'images/products/Quesocheddar.webp', 'images/products/Refrescodecola.jpg',
            'images/products/Salmonfresco.jpg', 'images/products/Sopadelentejasenlatada.jpg', 'images/products/Sopadetomateenlata.png',
            'images/products/Terneramolida.jpg', 'images/products/Truchaahumada.webp', 'images/products/Yogurdefresa.webp'
        ];
        
        
        
        $slides = [
            'No', 'No', 'No', 'No', 'No',
            'No', 'Si', 'No', 'No', 'No',
            'No', 'No', 'Si', 'No', 'Si',
            'No', 'No', 'No', 'No', 'Si',
            'No', 'No', 'No', 'No', 'No', 
            'No', 'No', 'Si', 'No', 'No', 
        ];

        $categories_ids = [
            11, 11, 7, 5, 3, 8, 12, 11, 5, 10,
            10, 6, 4, 7, 1, 12, 8, 2, 1, 6,
            12, 2, 8, 9, 3, 9, 7, 1, 3, 4,
        ];
        
        $user_ids = [
            2, 2, 2, 2, 2,
            2, 2, 2, 2, 2,
            3, 3, 3, 3, 3,
            3, 3, 3, 3, 3,
            3, 3, 3, 3, 3,
            3, 3, 3, 3, 3,
        ];

        for ($i = 0; $i < count($names); $i++) {
            $product = new Product;
            $product->name= $names[$i];
            $product->description= $descriptions[$i];
            $product->brand= $brands[$i];
            $product->price= $prices[$i];
            $product->image= $images_routes[$i];
            $product->slide= $slides[$i];
            $product->stock=50;
            $product->category_id= $categories_ids[$i];
            $product->user_id= $user_ids[$i];            
            $product->save();
        }

        // Product::factory(50)->create();
    }
}
