<?php

use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1,20) as $number){
        	\App\Idea::create([
        			'title' => '第'.$number.'篇',
        			'category_id' => $number%8+1,
        			'content' => '這是第'.$number.'篇文章',
        			'private' => 1,
        			'user_id' => 1,
                    'created_at' => \Carbon\Carbon::now()->addSecond($number),
        		]);
        }
    }
}
