<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Paracetamol 500mg',
                'description' => 'Alivia el dolor y reduce la fiebre.',
                'price' => 2.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 100,
            ],
            [
                'name' => 'Ibuprofeno 400mg',
                'description' => 'Antiinflamatorio y analgésico.',
                'price' => 4.50,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 80,
            ],
            [
                'name' => 'Amoxicilina 500mg',
                'description' => 'Antibiótico de amplio espectro.',
                'price' => 12.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 50,
            ],
            [
                'name' => 'Vitamina C 1000mg',
                'description' => 'Suplemento dietético para el sistema inmune.',
                'price' => 8.99,
                'category_id' => Category::where('name', 'Vitaminas')->first()->id,
                'stock' => 50,
            ],
            [
                'name' => 'Multivitamínico',
                'description' => 'Complejo vitamínico para la salud general.',
                'price' => 15.99,
                'category_id' => Category::where('name', 'Vitaminas')->first()->id,
                'stock' => 40,
            ],
            [
                'name' => 'Omega 3 1000mg',
                'description' => 'Suplemento dietético para la salud cardiovascular.',
                'price' => 12.99,
                'category_id' => Category::where('name', 'Suplementos')->first()->id,
                'stock' => 75,
            ],
            [
                'name' => 'Proteína Whey',
                'description' => 'Suplemento proteico para el crecimiento muscular.',
                'price' => 29.99,
                'category_id' => Category::where('name', 'Suplementos')->first()->id,
                'stock' => 25,
            ],
            [
                'name' => 'Ginseng',
                'description' => 'Suplemento para aumentar la energía y reducir el estrés.',
                'price' => 19.99,
                'category_id' => Category::where('name', 'Suplementos')->first()->id,
                'stock' => 60,
            ],
            [
                'name' => 'Alcohol en Gel 70%',
                'description' => 'Desinfectante de manos.',
                'price' => 3.50,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 200,
            ],
            [
                'name' => 'Jabón Antibacterial',
                'description' => 'Jabón de manos con propiedades antibacterianas.',
                'price' => 2.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 150,
            ],
            [
                'name' => 'Crema Hidratante',
                'description' => 'Crema para mantener la piel hidratada.',
                'price' => 7.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 60,
            ],
            [
                'name' => 'Protector Solar SPF 50',
                'description' => 'Protección solar de amplio espectro.',
                'price' => 10.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 40,
            ],
            [
                'name' => 'Termómetro Digital',
                'description' => 'Termómetro de alta precisión para medir la temperatura corporal.',
                'price' => 15.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 30,
            ],
            [
                'name' => 'Oxímetro de Pulso',
                'description' => 'Dispositivo para medir la saturación de oxígeno en la sangre.',
                'price' => 25.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 20,
            ],
            [
                'name' => 'Tensiómetro Digital',
                'description' => 'Dispositivo para medir la presión arterial.',
                'price' => 45.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 15,
            ],
            [
                'name' => 'Bastón Ortopédico',
                'description' => 'Bastón ajustable para soporte y equilibrio.',
                'price' => 19.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 10,
            ],
            [
                'name' => 'Silla de Ruedas',
                'description' => 'Silla de ruedas plegable para movilidad.',
                'price' => 199.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 5,
            ],
            [
                'name' => 'Mascarilla Quirúrgica',
                'description' => 'Mascarilla de protección para uso médico.',
                'price' => 0.50,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 500,
            ],
            [
                'name' => 'Gasa Estéril',
                'description' => 'Gasa para curaciones y heridas.',
                'price' => 1.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 200,
            ],
            [
                'name' => 'Venda Elástica',
                'description' => 'Venda para soporte y compresión.',
                'price' => 2.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 150,
            ],
            [
                'name' => 'Jarabe para la Tos',
                'description' => 'Jarabe expectorante para aliviar la tos.',
                'price' => 6.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 80,
            ],
            [
                'name' => 'Loratadina 10mg',
                'description' => 'Antihistamínico para alergias.',
                'price' => 3.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 120,
            ],
            [
                'name' => 'Aspirina 100mg',
                'description' => 'Antiinflamatorio y analgésico.',
                'price' => 4.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 90,
            ],
            [
                'name' => 'Suero Oral',
                'description' => 'Solución oral para la rehidratación.',
                'price' => 5.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 70,
            ],
            [
                'name' => 'Vendas Adhesivas',
                'description' => 'Vendas adhesivas para pequeñas heridas.',
                'price' => 2.50,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 100,
            ],
            [
                'name' => 'Enjuague Bucal',
                'description' => 'Enjuague bucal para una higiene completa.',
                'price' => 4.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 50,
            ],
            [
                'name' => 'Shampoo Anticaspa',
                'description' => 'Shampoo para el control de la caspa.',
                'price' => 6.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 40,
            ],
            [
                'name' => 'Gotas para los Ojos',
                'description' => 'Solución oftálmica para aliviar la irritación ocular.',
                'price' => 7.99,
                'category_id' => Category::where('name', 'Medicamentos')->first()->id,
                'stock' => 60,
            ],
            [
                'name' => 'Pañales para Adultos',
                'description' => 'Pañales desechables para adultos.',
                'price' => 14.99,
                'category_id' => Category::where('name', 'Equipos Médicos')->first()->id,
                'stock' => 30,
            ],
            [
                'name' => 'Tiritas Adhesivas',
                'description' => 'Tiritas para pequeñas cortaduras y raspones.',
                'price' => 1.50,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 200,
            ],
            [
                'name' => 'Crema Analgésica',
                'description' => 'Crema para el alivio del dolor muscular.',
                'price' => 5.99,
                'category_id' => Category::where('name', 'Cuidado Personal')->first()->id,
                'stock' => 80,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
