<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create sample categories
        Category::create([
            'name' => 'Điện thoại',
            'description' => 'Các loại điện thoại di động',
            'slug' => 'dien-thoai',
            'is_active' => true,
            'is_delete' => false,
        ]);

        Category::create([
            'name' => 'Laptop',
            'description' => 'Máy tính xách tay',
            'slug' => 'laptop',
            'is_active' => true,
            'is_delete' => false,
        ]);

        Category::create([
            'name' => 'Phụ kiện',
            'description' => 'Phụ kiện điện tử',
            'slug' => 'phu-kien',
            'is_active' => true,
            'is_delete' => false,
        ]);
    }
}
