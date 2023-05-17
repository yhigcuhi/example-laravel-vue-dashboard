<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 選手(Mリーガー) プロフィール マスタ
 */
class PlayerProfile extends Model
{
    use HasFactory;
    // 登録更新できないフィールド
    protected $guarded = ['id'];
    // 登録更新する際に設定できる項目(カラム)
    protected $fillable = [
        'player_code', // TODO: PKか？
        'last_name', // 姓
        'first_name', // 名
        'last_name_kana', // せい
        'first_name_kana', // 名
        'birthday', // 誕生日
        'date_of_birth', // 誕生日 月日だけ文字(MM/dd) ※ 年が不明な選手いるので こちらを必須
        'organization', // 所属団体
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
        'birthday' => 'immutable_datetime:Y-m-d',
        // TODO: 誕生日 月日だけ???
        // TODO: 所属団体 enum
    ];
}
