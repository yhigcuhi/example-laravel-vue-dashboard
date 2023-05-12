/* Mリーグ シーズン定義 */
/* import 共通定義 */
import {Entity, Name, Day, DateTime} from './common';

/* 値オブジェクト 定義 */
// シーズンコード
export type SeasonCode = string

/* Entity 定義 */
export type Season = Readonly<Entity & {
    season_code: SeasonCode // シーズンコード
    title: Name // 画面表示名
    regular_start_day: Day // レギュラーシーズン開始日
    regular_end_day: Day // レギュラーシーズン終了日
    semifinal_start_day?: Day| null // セミファイナル 開始日
    semifinal_end_day?: Day| null // セミファイナル 終了日
    final_start_day?: Day| null // ファイナル 開始日
    final_end_day?: Day| null // ァイナル 終了日
}>