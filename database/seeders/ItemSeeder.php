<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foodGroupId = ItemGroup::where('name', 'Food')->value('id');
        $travelGroupId = ItemGroup::where('name', 'Travel')->value('id');
        $drinksGroupId = ItemGroup::where('name', 'Drinks')->value('id');

        $foodItems = [
            [
                'name' => 'Breakfast',
                'price' => 10.5,
                'item_group_id' => $foodGroupId,
            ],
            [
                'name' => 'Lunch',
                'price' => 15.75,
                'item_group_id' => $foodGroupId,
            ],
            // Add more food items as needed
        ];

        $travelItems = [
            [
                'name' => 'Taxi',
                'price' => 20.0,
                'item_group_id' => $travelGroupId,
            ],
            [
                'name' => 'Train ticket',
                'price' => 35.5,
                'item_group_id' => $travelGroupId,
            ],
            // Add more travel items as needed
        ];

        $drinksItems = [
            [
                'name' => 'Coffee',
                'price' => 4.5,
                'item_group_id' => $drinksGroupId,
            ],
            [
                'name' => 'Soda',
                'price' => 2.0,
                'item_group_id' => $drinksGroupId,
            ],
            // Add more drinks items as needed
        ];

        Item::insert($foodItems);
        Item::insert($travelItems);
        Item::insert($drinksItems);
    }
}
