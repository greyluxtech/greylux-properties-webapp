<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_path' => $this->faker->text,
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'owner' => $this->faker->text,
            'agent' => $this->faker->text,
            'status' => $this->faker->numberBetween(0, 1),
            'price' => $this->faker->numberBetween(100, 5000),
            'beds' => $this->faker->numberBetween(1, 5),
            'bath' => $this->faker->numberBetween(1, 5),
            'property_type' => $this->faker->text,
            'featured' => $this->faker->numberBetween(0, 1),
            'land_size' => $this->faker->text,
            'location' => $this->faker->text,
            'state_of_property' => $this->faker->numberBetween(0, 1),
            'facts_and_features' => $this->faker->text,
            'likes' => $this->faker->numberBetween(0, 1),
            'impressions' => $this->faker->numberBetween(0, 1),
            'shares' => $this->faker->numberBetween(0, 1),
            'saves' => $this->faker->numberBetween(0, 1)
        ];
    }
}
