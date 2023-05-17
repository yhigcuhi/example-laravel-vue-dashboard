<?php

namespace Database\Seeders\Initialize;

use App\Models\Season;
use Illuminate\Database\Seeder;

/**
 * Mリーグシーズン シーダー
 */
class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TRUNCATE
        Season::truncate();
        // 初期値設定
        Season::insert($this->values());
    }

    /**
     * @return array 初期値
     */
    private function values(): array
    {
        return [
            [
                'season_code' => '2022-23',
                'title' => '2022-23 シーズン',
                'regular_start_day' => '2022-10-03',
                'regular_end_day' => '2023-03-21',
                'semifinal_start_day' => '2023-04-10',
                'semifinal_end_day' => '2023-05-04',
                'final_start_day' => '2023-05-08',
                'final_end_day' => '2023-05-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
