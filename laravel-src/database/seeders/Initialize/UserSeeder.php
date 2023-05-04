<?php

namespace Database\Seeders\Initialize;

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
        // 管理画面ユーザー 生成
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => config('admin.admin_gmail'),
        ]);
    }
}
