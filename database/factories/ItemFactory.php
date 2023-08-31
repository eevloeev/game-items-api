<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 1, 1000000);
        $discountPrice = $this->faker->optional()->randomFloat(2, 1, $price - 0.01);

        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $price,
            'game_name' => $this->faker->word,
            'game_website' => $this->faker->url,
            'discount_price' => $discountPrice,
        ];
    }
}
