<?php

namespace Database\Seeders\Initialize;

use App\Enums\Gender;
use App\Enums\Organization;
use App\Models\Player;
use App\Models\PlayerProfile;
use Illuminate\Database\Seeder;

/**
 * (Mリーガー)選手 シーダー
 */
class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TRUNCATE
        Player::truncate();
        PlayerProfile::truncate();
        // 初期値設定
        Player::insert($this->playerValues());
        PlayerProfile::insert($this->playerProfileValues());
    }

    /**
     * @return array players 初期値
     */
    private function playerValues(): array
    {
        return [
            [
                'player_code' => 'SONODAKEN',
                'name' => '園田賢',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MURAKAMIJUN',
                'name' => '村上淳',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SUZUKITARO',
                'name' => '鈴木たろう',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MARUYAMAKANAKO',
                'name' => '丸山奏子',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NIKAIDOAKI',
                'name' => '二階堂亜樹',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KATUMATAKENJI',
                'name' => '勝又健志',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MATUGASETAKAYA',
                'name' => '松ヶ瀬隆弥',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NIKAIDORUMI',
                'name' => '二階堂瑠美',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'UCHIKAWAKOTARO',
                'name' => '内川幸太郎',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'OKADASAYAKA',
                'name' => '岡田紗佳',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HORISHINGO',
                'name' => '堀慎吾',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SIBUKAWANANBA',
                'name' => '渋川難波',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SASAKIHISATO',
                'name' => '佐々木寿人',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TAKAMIYAMARI',
                'name' => '高宮まり',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'DATEARISA',
                'name' => '伊達朱里紗',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TAKIZAWAKAZUNORI',
                'name' => '滝沢和典',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'OOITAKAHARU',
                'name' => '多井隆晴',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SHIRATORISHO',
                'name' => '白鳥翔',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MATUMOTOYOSIHIRO',
                'name' => '松本吉弘',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HINATAAIKO',
                'name' => '日向藍子',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'UOTANIYUMI',
                'name' => '魚谷侑未',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KONDOSEIICHI',
                'name' => '近藤誠一',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KAYAMORISAYAKA',
                'name' => '茅森早香',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TOJORIO',
                'name' => '東城りお',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HAGIWARAMASATO',
                'name' => '萩原聖人',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SETOKUMANAOKI',
                'name' => '瀬戸熊直樹',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KUROSAWASAKI',
                'name' => '黒沢咲',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HONDATOMOHIRO',
                'name' => '本田朋広',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KOBAYASIGO',
                'name' => '小林剛',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MIZUHARAAKINA',
                'name' => '瑞原明奈',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SUZUKIYU',
                'name' => '鈴木優',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NAKABAYASIKEI',
                'name' => '仲林圭',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
    /**
     * @return array player_profiles 初期値
     */
    private function playerProfileValues(): array
    {
        return [
            [
                'player_code' => 'SONODAKEN',
                'last_name' => '園田',
                'first_name' => '賢',
                'last_name_kana' => 'そのだ',
                'first_name_kana' => 'けん',
                'gender' => Gender::MEN->name,
                'birthday' => '1980/11/25',
                'date_of_birth' => '11/25',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MURAKAMIJUN',
                'last_name' => '村上',
                'first_name' => '淳',
                'last_name_kana' => 'むらかみ',
                'first_name_kana' => 'じゅん',
                'gender' => Gender::MEN->name,
                'birthday' => '1975/4/10',
                'date_of_birth' => '4/10',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SUZUKITARO',
                'last_name' => '鈴木',
                'first_name' => 'たろう',
                'last_name_kana' => 'すずき',
                'first_name_kana' => 'たろう',
                'gender' => Gender::MEN->name,
                'birthday' => '1973/10/4',
                'date_of_birth' => '10/4',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MARUYAMAKANAKO',
                'last_name' => '丸山',
                'first_name' => '奏子',
                'last_name_kana' => 'まるやま',
                'first_name_kana' => 'かなこ',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1993/8/17',
                'date_of_birth' => '8/17',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NIKAIDOAKI',
                'last_name' => '二階堂',
                'first_name' => '亜樹',
                'last_name_kana' => 'にかいどう',
                'first_name_kana' => 'あき',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1981/11/15',
                'date_of_birth' => '11/15',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KATUMATAKENJI',
                'last_name' => '勝又',
                'first_name' => '健志',
                'last_name_kana' => 'かつまた',
                'first_name_kana' => 'けんじ',
                'gender' => Gender::MEN->name,
                'birthday' => '1981/3/15',
                'date_of_birth' => '3/15',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MATUGASETAKAYA',
                'last_name' => '松ヶ瀬',
                'first_name' => '隆弥',
                'last_name_kana' => 'まつがせ',
                'first_name_kana' => 'たかや',
                'gender' => Gender::MEN->name,
                'birthday' => '1980/4/11',
                'date_of_birth' => '4/11',
                'organization' => Organization::RMU->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NIKAIDORUMI',
                'last_name' => '二階堂',
                'first_name' => '瑠美',
                'last_name_kana' => 'にかいどう',
                'first_name_kana' => 'るみ',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1980/9/27',
                'date_of_birth' => '9/27',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'UCHIKAWAKOTARO',
                'last_name' => '内川',
                'first_name' => '幸太郎',
                'last_name_kana' => 'うちかわ',
                'first_name_kana' => 'こうたろう',
                'gender' => Gender::MEN->name,
                'birthday' => '1981/5/6',
                'date_of_birth' => '5/6',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'OKADASAYAKA',
                'last_name' => '岡田',
                'first_name' => '紗佳',
                'last_name_kana' => 'おかだ',
                'first_name_kana' => 'さやか',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1994/2/19',
                'date_of_birth' => '2/19',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HORISHINGO',
                'last_name' => '堀',
                'first_name' => '慎吾',
                'last_name_kana' => 'ほり',
                'first_name_kana' => 'しんご',
                'gender' => Gender::MEN->name,
                'birthday' => '1984/3/23',
                'date_of_birth' => '3/23',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SIBUKAWANANBA',
                'last_name' => '渋川',
                'first_name' => '難波',
                'last_name_kana' => 'しぶかわ',
                'first_name_kana' => 'なんば',
                'gender' => Gender::MEN->name,
                'birthday' => '1986/5/19',
                'date_of_birth' => '5/19',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SASAKIHISATO',
                'last_name' => '佐々木',
                'first_name' => '寿人',
                'last_name_kana' => 'ささき',
                'first_name_kana' => 'ひさと',
                'gender' => Gender::MEN->name,
                'birthday' => '1977/1/12',
                'date_of_birth' => '1/12',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TAKAMIYAMARI',
                'last_name' => '高宮',
                'first_name' => 'まり',
                'last_name_kana' => 'たかみや',
                'first_name_kana' => 'まり',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1988/11/8',
                'date_of_birth' => '11/8',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'DATEARISA',
                'last_name' => '伊達',
                'first_name' => '朱里紗',
                'last_name_kana' => 'だて',
                'first_name_kana' => 'ありさ',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1991/5/10',
                'date_of_birth' => '5/10',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TAKIZAWAKAZUNORI',
                'last_name' => '滝沢',
                'first_name' => '和典',
                'last_name_kana' => 'たきざわ',
                'first_name_kana' => 'かずのり',
                'gender' => Gender::MEN->name,
                'birthday' => '1979/12/6',
                'date_of_birth' => '12/6',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'OOITAKAHARU',
                'last_name' => '多井隆',
                'first_name' => '隆晴',
                'last_name_kana' => 'おおい',
                'first_name_kana' => 'たかはる',
                'gender' => Gender::MEN->name,
                'birthday' => '1972/3/17',
                'date_of_birth' => '3/17',
                'organization' => Organization::RMU->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SHIRATORISHO',
                'last_name' => '白鳥',
                'first_name' => '翔',
                'last_name_kana' => 'しらとり',
                'first_name_kana' => 'しょう',
                'gender' => Gender::MEN->name,
                'birthday' => '1986/8/27',
                'date_of_birth' => '8/27',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MATUMOTOYOSIHIRO',
                'last_name' => '松本',
                'first_name' => '松本吉弘',
                'last_name_kana' => 'まつもと',
                'first_name_kana' => 'よしひろ',
                'gender' => Gender::MEN->name,
                'birthday' => '1992/5/3',
                'date_of_birth' => '5/3',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HINATAAIKO',
                'last_name' => '日向',
                'first_name' => '藍子',
                'last_name_kana' => 'ひなた',
                'first_name_kana' => 'あいこ',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1988/9/24',
                'date_of_birth' => '9/24',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'UOTANIYUMI',
                'last_name' => '魚谷',
                'first_name' => '侑未',
                'last_name_kana' => 'うおたに',
                'first_name_kana' => 'ゆうみ',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1985/11/2',
                'date_of_birth' => '11/2',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KONDOSEIICHI',
                'last_name' => '近藤',
                'first_name' => '誠一',
                'last_name_kana' => 'こんどう',
                'first_name_kana' => 'せいいち',
                'gender' => Gender::MEN->name,
                'birthday' => '1963/8/1',
                'date_of_birth' => '8/1',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KAYAMORISAYAKA',
                'last_name' => '茅森',
                'first_name' => '早香',
                'last_name_kana' => 'かやもり',
                'first_name_kana' => 'さやか',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1982/5/4',
                'date_of_birth' => '5/4',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'TOJORIO',
                'last_name' => '東城',
                'first_name' => 'りお',
                'last_name_kana' => 'とうじょう',
                'first_name_kana' => 'りお',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1990/9/18',
                'date_of_birth' => '9/18',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HAGIWARAMASATO',
                'last_name' => '萩原聖',
                'first_name' => '聖人',
                'last_name_kana' => 'はぎわら',
                'first_name_kana' => 'まさと',
                'gender' => Gender::MEN->name,
                'birthday' => '1971/8/21',
                'date_of_birth' => '8/21',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SETOKUMANAOKI',
                'last_name' => '瀬戸熊',
                'first_name' => '直樹',
                'last_name_kana' => 'せとくま',
                'first_name_kana' => 'なおき',
                'gender' => Gender::MEN->name,
                'birthday' => '1970/8/27',
                'date_of_birth' => '8/27',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KUROSAWASAKI',
                'last_name' => '黒沢',
                'first_name' => '咲',
                'last_name_kana' => 'くろさわ',
                'first_name_kana' => 'さき',
                'gender' => Gender::WOMEN->name,
                'birthday' => null,
                'date_of_birth' => '10/6',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'HONDATOMOHIRO',
                'last_name' => '本田',
                'first_name' => '朋広',
                'last_name_kana' => 'ほんだ',
                'first_name_kana' => 'ともひろ',
                'gender' => Gender::MEN->name,
                'birthday' => '1983/10/3',
                'date_of_birth' => '10/3',
                'organization' => Organization::JPML->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'KOBAYASIGO',
                'last_name' => '小林剛',
                'first_name' => '剛',
                'last_name_kana' => 'こばやし',
                'first_name_kana' => 'ごう',
                'gender' => Gender::MEN->name,
                'birthday' => '1976/2/12',
                'date_of_birth' => '2/12',
                'organization' => Organization::MJU->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'MIZUHARAAKINA',
                'last_name' => '瑞原',
                'first_name' => '明奈',
                'last_name_kana' => 'みずはら',
                'first_name_kana' => 'あきな',
                'gender' => Gender::WOMEN->name,
                'birthday' => '1986/11/19',
                'date_of_birth' => '11/19',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'SUZUKIYU',
                'last_name' => '鈴木',
                'first_name' => '優',
                'last_name_kana' => 'すずき',
                'first_name_kana' => 'ゆう',
                'gender' => Gender::MEN->name,
                'birthday' => '1981/9/13',
                'date_of_birth' => '9/13',
                'organization' => Organization::SAIKOUISEN->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player_code' => 'NAKABAYASIKEI',
                'last_name' => '仲林',
                'first_name' => '圭',
                'last_name_kana' => 'なかばやし',
                'first_name_kana' => 'けい',
                'gender' => Gender::MEN->name,
                'birthday' => '1985/9/17',
                'date_of_birth' => '9/17',
                'organization' => Organization::NPM->name,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
