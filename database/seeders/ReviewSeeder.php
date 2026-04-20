<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'name' => 'Anaka Aiyar',
                'travel_date' => '2023-05-15',
                'travel_with' => 'Family',
                'comment' => 'This company was great! Jessica was a really great coordinator. Right from the get go she was quick to answer questions, and alleviate concerns with appropriate information and options.',
                'rating' => 5,
                'is_public' => true,
            ],
            [
                'name' => 'Michael Thompson',
                'travel_date' => '2023-06-20',
                'travel_with' => 'Friends',
                'comment' => 'We have just returned from our classic 4 day Inca Trail trek. Rolfi & Percy were our very knowledgeable & entertaining guides. The food was so good!',
                'rating' => 5,
                'is_public' => true,
            ],
            [
                'name' => 'Stewart Wyatt',
                'travel_date' => '2023-07-10',
                'travel_with' => 'Couple',
                'comment' => 'We took the Cusco Cultural Tour from Pachatusantrek. Jessica was extremely helpful and flexible in rescheduling our reservation after the pandemic.',
                'rating' => 5,
                'is_public' => true,
            ],
            [
                'name' => 'Mariella Pajuelo',
                'travel_date' => '2023-08-05',
                'travel_with' => 'Large Group',
                'comment' => 'Pachatusan Trek provided a very well organized, very easy going tour of all the major hot spots around the Valle Sagrado, Cusco and Machu Picchu.',
                'rating' => 4,
                'is_public' => false,
            ],
            [
                'name' => 'John Doe',
                'travel_date' => '2024-01-12',
                'travel_with' => 'Alone',
                'comment' => 'Amazing experience! I loved every single detail of the trip. Highly recommended for solo travelers.',
                'rating' => 5,
                'is_public' => false,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
