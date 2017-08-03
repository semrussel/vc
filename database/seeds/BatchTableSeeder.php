<?php

use Illuminate\Database\Seeder;
use App\Models\Batch;

class BatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batch = new Batch();
        $batch->name = 'Transformers';
        $batch->bibleVerse = "Romans 12:2";
        $batch->save();

        $batch = new Batch();
        $batch->name = 'Mighty Warriors';
        $batch->bibleVerse = "Judges 6:12";
        $batch->save();

        $batch = new Batch();
        $batch->name = 'Followers';
        $batch->bibleVerse = "1 Corinthians 11:1";
        $batch->save();
    }
}
