<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reply;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reply::create([
            'post_id' => 1,
            'name' => '太郎',
            'body' => '太郎です',
        ]);

        Reply::create([
            'post_id' => 1,
            'name' => '山田',
            'body' => '山田です',
        ]);
    }
}
