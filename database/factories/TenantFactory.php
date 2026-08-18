<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('pt_BR');
        return [
            'id' => $faker->unique()->safeEmail(),
            'razao_social' => $faker->company(),
            'cnpj' => $faker->cnpj(),
            'email' => $faker->unique()->safeEmail(),
            'telefone' => $faker->cellphone(),
            'endereco' => $faker->streetAddress(),
        ];
    }
}
