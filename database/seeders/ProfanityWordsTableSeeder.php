<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfanityWord;

class ProfanityWordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFilePath = database_path('seeds/csv/bad-words.csv');

        $csvData = file($csvFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $wordRecords = [];
        foreach ($csvData as $word) {
            $wordRecords[] = ['word' => $word];
        }

        ProfanityWord::insert($wordRecords);
    }
}
