<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 接続DB　Connectionの定義(database.php参照)
    protected $connection = 'domain-pgsql';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seasons', function (Blueprint $table) {
            // PK
            $table->id()->comment('Mリーグ シーズンID');
            // フィールド
            $table->string('season_code')->unique()->comment('シーズンコード'); // TODO: PKにするか？
            $table->string('title')->comment('画面表示名');
            $table->date('regular_start_day')->comment('レギュラーシーズン 期間 開始日');
            $table->date('regular_end_day')->comment('レギュラーシーズン 期間 終了日');
            $table->date('semifinal_start_day')->nullable()->comment('セミファイナル 期間 開始日');
            $table->date('semifinal_end_day')->nullable()->comment('セミファイナル 期間 終了日');
            $table->date('final_start_day')->nullable()->comment('ファイナル 期間 開始日');
            $table->date('final_end_day')->nullable()->comment('ファイナル 期間 終了日');
            // created_at, updated_at
            $table->timestamps();
            // テーブル名
            $table->comment('Mリーグ シーズン');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};
