<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $path = public_path('sql/language.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
