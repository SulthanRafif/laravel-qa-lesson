<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => rtrim($this->faker->sentence(rand(5, 10)), "."),
            'body' => implode("\n\n", $this->faker->paragraphs(rand(3, 7))),
            'views' => rand(0, 10),
            /**
             * Answer count sudah dijalankan di method boot ketika terdapat
             * data answer baru ditambahkan. Saat data answer baru ditambahkan, maka
             * kolom answer_count akan ditambahkan nilai integer sejumlah 1
             */
            // 'answers_count' => rand(0, 10),
            'votes' => rand(-3, 10)
        ];
    }
}
