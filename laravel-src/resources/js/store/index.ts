// store の エントリーポイント
/* import pinia*/
import {createPinia} from 'pinia';
/* import 共通ストア モジュール*/
import {useSeason} from './modules/season';

// 利用する pinia
const store = createPinia();
// export
export default store;
// export 共通ストア
export {
    useSeason, // Mリーグ シーズン定義マスタ
}

