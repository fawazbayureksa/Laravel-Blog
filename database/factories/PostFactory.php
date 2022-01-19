<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(2,3)),

            // implode digunakan untuk menggabungkan data array , dibawah ini menggunakan <p> untuk menggabungkanya
            'body' => '<p>' .implode('<p></p>',$this->faker->paragraphs(mt_rand(4,6))),
            
            // ini sama saja dengan diatas tapi menggunakan fungsi map sebagai penggabungnya fn(function) dan implode sebagai penghubungnya
            // 'body' => collect($this->faker->paragraphs(mt_rand(4,6)))->map(fn($p) => "<p>$p</p>")->implode(''),

            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3)
        ];
    }
}
