<?php

namespace Database\Seeders;

use App\Models\Tenant;
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
        Tenant::factory()->create(['id' => 'quintana.nelson@example.com']);
        Tenant::factory()->create(['id' => 'rcervantes@example.org']);
        Tenant::factory()->create(['id' => 'umarin@example.com']);
        Tenant::factory()->create(['id' => 'bfurtado@example.com']);
        Tenant::factory()->create(['id' => 'eavila@example.net']);

        $this->call(
            UserSeeder::class,
            // TenantSeeder::class,
        );
    }
}
