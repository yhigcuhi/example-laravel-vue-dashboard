<?php

namespace Database\Seeders\Initialize;

use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * (管理画面)ユーザー シーダー
 */
class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // TODO:環境ごと と 2回目用
        // TRUNCATE
        User::truncate();
        // 管理画面ユーザー 生成
        User::factory()->create([
            'name' => 'Admin User',
            'email' => config('admin.admin_gmail'),
        ]);
    }
}
