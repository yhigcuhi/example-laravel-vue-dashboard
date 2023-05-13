// store の エントリーポイント
/* import pinia*/
import {createPinia} from 'pinia';
import {createPersistedState} from 'pinia-plugin-persistedstate';
/* import 共通ストア モジュール*/
import {useSeason} from './modules/season';

// 利用する pinia
const store = createPinia();
// 永続化適用の設定
store.use(createPersistedState({
    storage: sessionStorage, // 永続データの 保存先
    key: (storeKey: string) => `my-dashboard-app@${storeKey}`, // 保存しておく際のキー名 接頭辞ふよ
}));

// export
export default store;
// export 共通ストア
export {
    useSeason, // Mリーグ シーズン定義マスタ
}

