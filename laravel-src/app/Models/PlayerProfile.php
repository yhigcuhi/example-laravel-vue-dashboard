<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 選手(Mリーガー) プロフィール マスタ
 */
class PlayerProfile extends Model
{
    use HasFactory;
    /* 定数 */
    // 所属 団体
    const ORGANIZATIONS = [
        'JPML', //日本プロ麻雀連盟
        'NPM', //日本プロ麻雀協会
        'SAIKOUISEN', //最高位戦日本プロ麻雀協会
        'MJU', //麻将連合-μ-
        'RMU', //RMU
    ];

    // 登録更新できないフィールド
    protected $guarded = ['id'];
    // 登録更新する際に設定できる項目(カラム)
    protected $fillable = [
        'player_code', // TODO: PKか？
        'last_name', // 姓
        'first_name', // 名
        'last_name_kana', // せい
        'first_name_kana', // 名
        'gender', // 性別
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
        'gender' => Gender::class,
        'birthday' => 'immutable_datetime:Y-m-d',
        // TODO: 誕生日 月日だけ???
        'organization' => Organization::class,
    ];
}
