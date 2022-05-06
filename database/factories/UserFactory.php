<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone' => $this->faker->unique()->numerify('##########'),
            'about_yourself'  => $this->faker->paragraph,
            'address'  => $this->faker->address, 
            'postcode' =>$this->faker->numerify('##########'),

            'country' =>$this->faker->country, 
            'city' =>$this->faker->streetName, 
            'dob' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31'),
            'gender' => $this->faker->randomElement($array = array ('male', 'female')) ,
            'marital_status' => $this->faker->randomElement($array = array ('Married', 'Unmarried')),  
            'profile_photo_path' => $this->faker->image('public/upload/profile',640,480, null, false),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
