<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Post 1
        $post = new Post();
        $post->user_id = '1';
        $post->subject = 'pokemon';
        $post->content = 'bulbasaur is mid';
        $post->save();

        //Post 2
        $post = new Post();
        $post->user_id = '2';
        $post->subject = 'coding';
        $post->content = 'PHP is versatile';
        $post->save();

        // Post 3
        $post = new Post();
        $post->user_id = '3';
        $post->subject = 'movies';
        $post->content = 'Inception is mind-bending';
        $post->save();

        // Post 4
        $post = new Post();
        $post->user_id = '4';
        $post->subject = 'travel';
        $post->content = 'Exploring beautiful landscapes';
        $post->save();

        // Post 5
        $post = new Post();
        $post->user_id = '5';
        $post->subject = 'food';
        $post->content = 'Sushi cravings satisfied';
        $post->save();

        // Post 6
        $post = new Post();
        $post->user_id = '6';
        $post->subject = 'pokemon';
        $post->content = 'Pikachu is iconic';
        $post->save();

        // Post 7
        $post = new Post();
        $post->user_id = '7';
        $post->subject = 'coding';
        $post->content = 'JavaScript is powerful';
        $post->save();

        // Post 8
        $post = new Post();
        $post->user_id = '8';
        $post->subject = 'movies';
        $post->content = 'The Shawshank Redemption';
        $post->save();

        // Post 9
        $post = new Post();
        $post->user_id = '9';
        $post->subject = 'travel';
        $post->content = 'Backpacking across Europe';
        $post->save();

        // Post 10
        $post = new Post();
        $post->user_id = '10';
        $post->subject = 'food';
        $post->content = 'Gourmet dining experience';
        $post->save();
    }
}
