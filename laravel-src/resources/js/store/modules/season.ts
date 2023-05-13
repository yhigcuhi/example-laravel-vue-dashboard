/* Mリーグ シーズン定義マスタ グローバルストア */
/* import vue*/
import { ref } from 'vue';
/* import pinia*/
import { defineStore } from 'pinia';
/* import api*/
import { getSeasons } from '@/api/seasons';
/* import util*/
import { find } from 'lodash';
/* import @types*/
import { Season, SeasonCode } from '@/@types';

/* グローバルストア 定義 */
export const useSeason = defineStore(
    // ストアキー名
    'season',
    // ストア設定
    () => {
        // state
        // Mリーグ シーズン一覧
        const seasons = ref<Season[]>([]);
        // アクティブ シーズン定義
        const activeSeason = ref<Season|undefined>(void 0);

        // actions
        /**
         * Mリーグ シーズン一覧 最新化
         */
        const fetchSeasons = async () => setSeasons((await getSeasons()).data);
        /**
         * 指定 シーズンコード をアクティブにする
         * @param {SeasonCode} season_code アクティブにする シーズンコード
         * @returns {Season|undefined} アクティブになった Mリーグ シーズン
         */
        const updateActiveBySeasonCode = (season_code: SeasonCode|null): Season|undefined => {
            //　指定 シーズンコードの Mリーグ シーズンを検索し アクティブに設定
            const active = season_code ? findSeasonBySeasonCode(season_code) : void 0; // アクティブにする Mリーグ シーズンを検索
            setActiveSeason(active); // アクティブに設定
            // アクティブになった Mリーグ シーズン 返却
            return active;
        }
        /**
         * Mリーグ シーズン 検索 by シーズンコード
         * @param {SeasonCode} _season_code 検索値
         * @returns {Season|undefined} 検索結果
         */
        const findSeasonBySeasonCode = (_season_code: SeasonCode): Season|undefined => {
            // 前提条件
            if (!_season_code) return void 0;
            // Mリーグ シーズン 検索 by シーズンコード
            return find(seasons.value, ({season_code}) => season_code === _season_code);
        }

        // mutations (export しない)
        /**
         * Mリーグ シーズン一覧 設定
         * @param {Season[]} val 設定値
         */
        const setSeasons = (val: Season[]) => seasons.value = val;
        /**
         * アクティブ 設定
         * @param {Season|undefined} val 設定値
         */
        const setActiveSeason = (val: Season|undefined) => activeSeason.value = val;

        // export store
        return {
            // state/getters
            seasons,
            activeSeason,
            // actions
            fetchSeasons,
            updateActiveBySeasonCode,
            findSeasonBySeasonCode,
        }
    },
    // その他プラグインなどのオプション
    {
        // 永続化設定
        persist: {
            // 永続化するもの限定
            paths: ['activeSeason'], // アクティブ（選択しているもの）だけ永続化、マスタは常に最新できるようにする
        },
    }
);

