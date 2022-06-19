<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Admin::factory()->create();
    }
//     لتشغيل ال  seeder الذي يتحكم بال factory نكتب php artisan migrate --seed
// اما لأنشاء واحد خاص فيك php artisan make:seeder AdminSeed
}
