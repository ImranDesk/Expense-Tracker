<?php

namespace Database\Seeders;

use App\Models\ItemGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itemGroups = [
            [
                'name' => 'Food',
            ],
            [
                'name' => 'Travel',
            ],
            [
                'name' => 'Drinks',
            ],
        ];

        foreach ($itemGroups as $itemGroup) {
            ItemGroup::create($itemGroup);
        }
    }
}
