<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $dishes = [
            [
                'name' => 'Pasta alla Carbonara',
                'description' => 'Spaghetti cotti al dente con pancetta croccante, uova fresche, formaggio pecorino romano e pepe nero macinato.',
                'price' => 10.50,
                'viewable' => true,
                'image' => 'immagine_carbonara.jpg',
            ],
            [
                'name' => 'Insalata Caprese',
                'description' => 'Mozzarella di bufala fresca, pomodori maturi, basilico fresco, condita con olio extra vergine di oliva e riduzione di aceto balsamico.',
                'price' => 8.00,
                'viewable' => true,
                'image' => 'immagine_insalata_caprese.jpg'
            ],
            [
                'name' => 'Lasagna al Forno',
                'description' => 'Strati di pasta fresca, ragù di carne, besciamella e formaggio parmigiano, cotto lentamente al forno.',
                'price' => 12.00,
                'viewable' => true,
                'image' => 'immagine_lasagna.jpg'
            ],
            [
                'name' => 'Risotto ai Funghi Porcini',
                'description' => 'Riso carnaroli cotto lentamente con funghi porcini freschi, scalogno, vino bianco e brodo di carne, finemente mantecato con burro e parmigiano.',
                'price' => 14.00,
                'viewable' => true,
                'image' => 'immagine_risotto_funghi.jpg'
            ],
            [
                'name' => 'Tiramisù',
                'description' => 'Strati di savoiardi inzuppati nel caffè, crema di mascarpone leggera e cacao amaro.',
                'price' => 6.50,
                'viewable' => true,
                'image' => 'immagine_tiramisu.jpg'
            ]
        ];

        foreach($dishes as $dish){

            $newDish = new Dish();

            $newDish->name = $dish['name'];
            $newDish->description = $dish['description'];
            $newDish->price = $dish['price'];
            $newDish->viewable = $dish['viewable'];
            $newDish->image = $dish['image']; 

            $newDish->save();

        }

    }
}
