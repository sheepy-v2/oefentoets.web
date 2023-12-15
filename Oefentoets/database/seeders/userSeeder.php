<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //chatgpt want ik was te lui om alles zelf te typen 
        // User 1
        $user1 = new User();
        $user1->name = 'User One';
        $user1->email = 'user1@example.com';
        $user1->email_verified_at = now();
        $user1->password = bcrypt('password1');
        $user1->remember_token = Str::random(10);
        $user1->save();

        // User 2
        $user2 = new User();
        $user2->name = 'User Two';
        $user2->email = 'user2@example.com';
        $user2->email_verified_at = now();
        $user2->password = bcrypt('password2');
        $user2->remember_token = Str::random(10);
        $user2->save();

        // User 3
        $user3 = new User();
        $user3->name = 'User Three';
        $user3->email = 'user3@example.com';
        $user3->email_verified_at = now();
        $user3->password = bcrypt('password3');
        $user3->remember_token = Str::random(10);
        $user3->save();

        // User 4
        $user4 = new User();
        $user4->name = 'User Four';
        $user4->email = 'user4@example.com';
        $user4->email_verified_at = now();
        $user4->password = bcrypt('password4');
        $user4->remember_token = Str::random(10);
        $user4->save();

        // User 5
        $user5 = new User();
        $user5->name = 'User Five';
        $user5->email = 'user5@example.com';
        $user5->email_verified_at = now();
        $user5->password = bcrypt('password5');
        $user5->remember_token = Str::random(10);
        $user5->save();

        // User 6
        $user6 = new User();
        $user6->name = 'User Six';
        $user6->email = 'user6@example.com';
        $user6->email_verified_at = now();
        $user6->password = bcrypt('password6');
        $user6->remember_token = Str::random(10);
        $user6->save();

        // User 7
        $user7 = new User();
        $user7->name = 'User Seven';
        $user7->email = 'user7@example.com';
        $user7->email_verified_at = now();
        $user7->password = bcrypt('password7');
        $user7->remember_token = Str::random(10);
        $user7->save();

        // User 8
        $user8 = new User();
        $user8->name = 'User Eight';
        $user8->email = 'user8@example.com';
        $user8->email_verified_at = now();
        $user8->password = bcrypt('password8');
        $user8->remember_token = Str::random(10);
        $user8->save();

        // User 9
        $user9 = new User();
        $user9->name = 'User Nine';
        $user9->email = 'user9@example.com';
        $user9->email_verified_at = now();
        $user9->password = bcrypt('password9');
        $user9->remember_token = Str::random(10);
        $user9->save();

        // User 10
        $user10 = new User();
        $user10->name = 'User Ten';
        $user10->email = 'user10@example.com';
        $user10->email_verified_at = now();
        $user10->password = bcrypt('password10');
        $user10->remember_token = Str::random(10);
        $user10->save();
    }
}
