<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Mリーグ シーゾン定義マスタ
 */
class Season extends Model
{
    use HasFactory;
    // 登録更新できないフィールド
    protected $guarded = ['id'];
    // 登録更新する際に設定できる項目(カラム)
    protected $fillable = [
        'season_code', // TODO: PKか？
        'title', // 画面表示名
        'regular_start_day', // レギュラーシーズン 期間 開始日
        'regular_end_day', // レギュラーシーズン 期間 終了日
        'semifinal_start_day', // セミファイナル 期間 開始日
        'semifinal_end_day', // セミファイナル 期間 終了日
        'final_start_day', // ファイナル 期間 開始日
        'final_end_day', // ファイナル 期間 終了日
    ];
    // Carbon インスタンスとして扱うところ
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    // シリアライズさせないところ
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    // キャスト
    protected $casts = [
        'regular_start_day' => 'immutable_datetime:Y-m-d',
        'regular_end_day' => 'immutable_datetime:Y-m-d',
        'semifinal_start_day' => 'immutable_datetime:Y-m-d',
        'semifinal_end_day' => 'immutable_datetime:Y-m-d',
        'final_start_day' => 'immutable_datetime:Y-m-d',
        'final_end_day' => 'immutable_datetime:Y-m-d',
    ];
}
