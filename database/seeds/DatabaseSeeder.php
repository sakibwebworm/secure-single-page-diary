<?php
use App\Diary;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::table('diaries')->truncate();
        $tutorial = factory(Diary::class, 30)->create();
    }
}
