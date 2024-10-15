<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Title::create(['name' => 'Ansatsu Kyoushitsu']);
        Title::create(['name' => 'Akame ga Kill']);
        Title::create(['name' => 'Black Clover']);
        Title::create(['name' => 'Bleach']);
        Title::create(['name' => 'Blue Exorcist']);
        Title::create(['name' => 'Boku no Hero Academia']);
        Title::create(['name' => 'Classroom of the Elite']);
        Title::create(['name' => 'Death Note']);
        Title::create(['name' => 'Demon Slayer']);
        Title::create(['name' => 'Dr. Stone']);
        Title::create(['name' => 'Fire Force']);
        Title::create(['name' => 'Fullmetal Alchemist']);
        Title::create(['name' => 'Gintama']);
        Title::create(['name' => 'Haikyuu']);
        Title::create(['name' => 'Hunter x Hunter']);
        Title::create(['name' => 'Jujutsu Kaisen']);
        Title::create(['name' => 'Kaguya-sama: Love is War']);
        Title::create(['name' => 'Monster']);
        Title::create(['name' => 'Naruto']);
        Title::create(['name' => 'One Piece']);
        Title::create(['name' => 'Shingeki no Kyojin']);
        Title::create(['name' => 'Sousou no Frieren']);
        Title::create(['name' => 'Steins;Gate']);
        Title::create(['name' => 'Sword Art Online']);
        Title::create(['name' => 'Tokyo Ghoul']);
    }
}
