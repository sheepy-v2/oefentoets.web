<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //chatgpt want ik was te lui het zelf allemaal the typen

        $comment_post1 = new Comment();
        $comment_post1->user_id = 1;
        $comment_post1->post_id = 1;
        $comment_post1->content = 'Comment for Post 1';
        $comment_post1->save();

        $comment_post1 = new Comment();
        $comment_post1->user_id = 2;
        $comment_post1->post_id = 1;
        $comment_post1->content = 'Another comment for Post 1';
        $comment_post1->save();

        $comment_post1 = new Comment();
        $comment_post1->user_id = 3;
        $comment_post1->post_id = 1;
        $comment_post1->content = 'Yet another comment for Post 1';
        $comment_post1->save();

        $comment_post1 = new Comment();
        $comment_post1->user_id = 4;
        $comment_post1->post_id = 1;
        $comment_post1->content = 'Comment number four for Post 1';
        $comment_post1->save();

        $comment_post1 = new Comment();
        $comment_post1->user_id = 5;
        $comment_post1->post_id = 1;
        $comment_post1->content = 'Final comment for Post 1';
        $comment_post1->save();

        $comment_post2_1 = new Comment();
        $comment_post2_1->user_id = 1;
        $comment_post2_1->post_id = 2;
        $comment_post2_1->content = 'Comment for Post 2';
        $comment_post2_1->save();

        $comment_post2_2 = new Comment();
        $comment_post2_2->user_id = 2;
        $comment_post2_2->post_id = 2;
        $comment_post2_2->content = 'Another comment for Post 2';
        $comment_post2_2->save();

        $comment_post2_3 = new Comment();
        $comment_post2_3->user_id = 3;
        $comment_post2_3->post_id = 2;
        $comment_post2_3->content = 'Yet another comment for Post 2';
        $comment_post2_3->save();

        $comment_post2_4 = new Comment();
        $comment_post2_4->user_id = 4;
        $comment_post2_4->post_id = 2;
        $comment_post2_4->content = 'Comment number four for Post 2';
        $comment_post2_4->save();

        $comment_post2_5 = new Comment();
        $comment_post2_5->user_id = 5;
        $comment_post2_5->post_id = 2;
        $comment_post2_5->content = 'Final comment for Post 2';
        $comment_post2_5->save();

        $comment_post3_1 = new Comment();
        $comment_post3_1->user_id = 1;
        $comment_post3_1->post_id = 3;
        $comment_post3_1->content = 'Comment for Post 3';
        $comment_post3_1->save();

        $comment_post3_2 = new Comment();
        $comment_post3_2->user_id = 2;
        $comment_post3_2->post_id = 3;
        $comment_post3_2->content = 'Another comment for Post 3';
        $comment_post3_2->save();

        $comment_post3_3 = new Comment();
        $comment_post3_3->user_id = 3;
        $comment_post3_3->post_id = 3;
        $comment_post3_3->content = 'Yet another comment for Post 3';
        $comment_post3_3->save();

        $comment_post3_4 = new Comment();
        $comment_post3_4->user_id = 4;
        $comment_post3_4->post_id = 3;
        $comment_post3_4->content = 'Comment number four for Post 3';
        $comment_post3_4->save();

        $comment_post3_5 = new Comment();
        $comment_post3_5->user_id = 5;
        $comment_post3_5->post_id = 3;
        $comment_post3_5->content = 'Final comment for Post 3';
        $comment_post3_5->save();

        $comment_post4_1 = new Comment();
        $comment_post4_1->user_id = 1;
        $comment_post4_1->post_id = 4;
        $comment_post4_1->content = 'Comment for Post 4';
        $comment_post4_1->save();

        $comment_post4_2 = new Comment();
        $comment_post4_2->user_id = 2;
        $comment_post4_2->post_id = 4;
        $comment_post4_2->content = 'Another comment for Post 4';
        $comment_post4_2->save();

        $comment_post4_3 = new Comment();
        $comment_post4_3->user_id = 3;
        $comment_post4_3->post_id = 4;
        $comment_post4_3->content = 'Yet another comment for Post 4';
        $comment_post4_3->save();

        $comment_post4_4 = new Comment();
        $comment_post4_4->user_id = 4;
        $comment_post4_4->post_id = 4;
        $comment_post4_4->content = 'Comment number four for Post 4';
        $comment_post4_4->save();

        $comment_post4_5 = new Comment();
        $comment_post4_5->user_id = 5;
        $comment_post4_5->post_id = 4;
        $comment_post4_5->content = 'Final comment for Post 4';
        $comment_post4_5->save();

        $comment_post5_1 = new Comment();
        $comment_post5_1->user_id = 1;
        $comment_post5_1->post_id = 5;
        $comment_post5_1->content = 'Comment for Post 5';
        $comment_post5_1->save();

        $comment_post5_2 = new Comment();
        $comment_post5_2->user_id = 2;
        $comment_post5_2->post_id = 5;
        $comment_post5_2->content = 'Another comment for Post 5';
        $comment_post5_2->save();

        $comment_post5_3 = new Comment();
        $comment_post5_3->user_id = 3;
        $comment_post5_3->post_id = 5;
        $comment_post5_3->content = 'Yet another comment for Post 5';
        $comment_post5_3->save();

        $comment_post5_4 = new Comment();
        $comment_post5_4->user_id = 4;
        $comment_post5_4->post_id = 5;
        $comment_post5_4->content = 'Comment number four for Post 5';
        $comment_post5_4->save();

        $comment_post5_5 = new Comment();
        $comment_post5_5->user_id = 5;
        $comment_post5_5->post_id = 5;
        $comment_post5_5->content = 'Final comment for Post 5';
        $comment_post5_5->save();

        $comment_post6_1 = new Comment();
        $comment_post6_1->user_id = 1;
        $comment_post6_1->post_id = 6;
        $comment_post6_1->content = 'Comment for Post 6';
        $comment_post6_1->save();

        $comment_post6_2 = new Comment();
        $comment_post6_2->user_id = 2;
        $comment_post6_2->post_id = 6;
        $comment_post6_2->content = 'Another comment for Post 6';
        $comment_post6_2->save();

        $comment_post6_3 = new Comment();
        $comment_post6_3->user_id = 3;
        $comment_post6_3->post_id = 6;
        $comment_post6_3->content = 'Yet another comment for Post 6';
        $comment_post6_3->save();

        $comment_post6_4 = new Comment();
        $comment_post6_4->user_id = 4;
        $comment_post6_4->post_id = 6;
        $comment_post6_4->content = 'Comment number four for Post 6';
        $comment_post6_4->save();

        $comment_post6_5 = new Comment();
        $comment_post6_5->user_id = 5;
        $comment_post6_5->post_id = 6;
        $comment_post6_5->content = 'Final comment for Post 6';
        $comment_post6_5->save();

        $comment_post7_1 = new Comment();
        $comment_post7_1->user_id = 1;
        $comment_post7_1->post_id = 7;
        $comment_post7_1->content = 'Comment for Post 7';
        $comment_post7_1->save();

        $comment_post7_2 = new Comment();
        $comment_post7_2->user_id = 2;
        $comment_post7_2->post_id = 7;
        $comment_post7_2->content = 'Another comment for Post 7';
        $comment_post7_2->save();

        $comment_post7_3 = new Comment();
        $comment_post7_3->user_id = 3;
        $comment_post7_3->post_id = 7;
        $comment_post7_3->content = 'Yet another comment for Post 7';
        $comment_post7_3->save();

        $comment_post7_4 = new Comment();
        $comment_post7_4->user_id = 4;
        $comment_post7_4->post_id = 7;
        $comment_post7_4->content = 'Comment number four for Post 7';
        $comment_post7_4->save();

        $comment_post7_5 = new Comment();
        $comment_post7_5->user_id = 5;
        $comment_post7_5->post_id = 7;
        $comment_post7_5->content = 'Final comment for Post 7';
        $comment_post7_5->save();

        $comment_post8_1 = new Comment();
        $comment_post8_1->user_id = 1;
        $comment_post8_1->post_id = 8;
        $comment_post8_1->content = 'Comment for Post 8';
        $comment_post8_1->save();

        $comment_post8_2 = new Comment();
        $comment_post8_2->user_id = 2;
        $comment_post8_2->post_id = 8;
        $comment_post8_2->content = 'Another comment for Post 8';
        $comment_post8_2->save();

        $comment_post8_3 = new Comment();
        $comment_post8_3->user_id = 3;
        $comment_post8_3->post_id = 8;
        $comment_post8_3->content = 'Yet another comment for Post 8';
        $comment_post8_3->save();

        $comment_post8_4 = new Comment();
        $comment_post8_4->user_id = 4;
        $comment_post8_4->post_id = 8;
        $comment_post8_4->content = 'Comment number four for Post 8';
        $comment_post8_4->save();

        $comment_post8_5 = new Comment();
        $comment_post8_5->user_id = 5;
        $comment_post8_5->post_id = 8;
        $comment_post8_5->content = 'Final comment for Post 8';
        $comment_post8_5->save();

        $comment_post9_1 = new Comment();
        $comment_post9_1->user_id = 1;
        $comment_post9_1->post_id = 9;
        $comment_post9_1->content = 'Comment for Post 9';
        $comment_post9_1->save();

        $comment_post9_2 = new Comment();
        $comment_post9_2->user_id = 2;
        $comment_post9_2->post_id = 9;
        $comment_post9_2->content = 'Another comment for Post 9';
        $comment_post9_2->save();

        $comment_post9_3 = new Comment();
        $comment_post9_3->user_id = 3;
        $comment_post9_3->post_id = 9;
        $comment_post9_3->content = 'Yet another comment for Post 9';
        $comment_post9_3->save();

        $comment_post9_4 = new Comment();
        $comment_post9_4->user_id = 4;
        $comment_post9_4->post_id = 9;
        $comment_post9_4->content = 'Comment number four for Post 9';
        $comment_post9_4->save();

        $comment_post9_5 = new Comment();
        $comment_post9_5->user_id = 5;
        $comment_post9_5->post_id = 9;
        $comment_post9_5->content = 'Final comment for Post 9';
        $comment_post9_5->save();

        $comment_post10_1 = new Comment();
        $comment_post10_1->user_id = 1;
        $comment_post10_1->post_id = 10;
        $comment_post10_1->content = 'Comment for Post 10';
        $comment_post10_1->save();

        $comment_post10_2 = new Comment();
        $comment_post10_2->user_id = 2;
        $comment_post10_2->post_id = 10;
        $comment_post10_2->content = 'Another comment for Post 10';
        $comment_post10_2->save();

        $comment_post10_3 = new Comment();
        $comment_post10_3->user_id = 3;
        $comment_post10_3->post_id = 10;
        $comment_post10_3->content = 'Yet another comment for Post 10';
        $comment_post10_3->save();

        $comment_post10_4 = new Comment();
        $comment_post10_4->user_id = 4;
        $comment_post10_4->post_id = 10;
        $comment_post10_4->content = 'Comment number four for Post 10';
        $comment_post10_4->save();

        $comment_post10_5 = new Comment();
        $comment_post10_5->user_id = 5;
        $comment_post10_5->post_id = 10;
        $comment_post10_5->content = 'Final comment for Post 10';
        $comment_post10_5->save();
    }
}
