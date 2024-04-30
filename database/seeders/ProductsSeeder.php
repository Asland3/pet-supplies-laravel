<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Dog Bone Toy',
                'price' => 100.00,
                'description' => 'This is a bone-shaped toy for dogs.',
                'image' => 'images/dog_bone_toy.jpg',
            ],
            [
                'name' => 'Catnip Mouse',
                'price' => 50.00,
                'description' => 'This is a mouse-shaped toy filled with catnip for cats.',
                'image' => 'images/catnip_mouse.jpg',
            ],
            [
                'name' => 'Dog Chew Rope',
                'price' => 75.00,
                'description' => 'This is a chew rope for dogs.',
                'image' => 'images/dog_chew_rope.jpg',
            ],
            [
                'name' => 'Cat Laser Pointer',
                'price' => 25.00,
                'description' => 'This is a laser pointer for playing with cats.',
                'image' => 'images/cat_laser_pointer.jpg',
            ],
            [
                'name' => 'Dog Frisbee',
                'price' => 120.00,
                'description' => 'This is a frisbee for dogs.',
                'image' => 'images/dog_frisbee.jpg',
            ],
            [
                'name' => 'Cat Feather Wand',
                'price' => 60.00,
                'description' => 'This is a feather wand for playing with cats.',
                'image' => 'images/cat_feather_wand.jpg',
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Products::create($product);
        }
    }
}
