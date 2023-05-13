
<script setup lang="ts">
/* import lodash*/
import { map } from 'lodash';
/* import 部品*/
import { computed } from 'vue';
import SelectBox from './SelectBox.vue';
/* import store*/
import { useSeason } from '@/store';
/* import @type*/
import { SeasonCode } from '@/@types';

/* type 定義 */
// 画面引数型
type Props = {
    modelValue?: SeasonCode|null, // モデル値 (v-model)
}

/* 内部参照 可能定数 */
// デフォルト選択値
const DEFAULT_OPTION = 'シーズンを選択';

/* 内部参照 変数 */
// グローバルストア
const store = useSeason(); // Mリーグ シーズン一覧
// 画面引数
const props = withDefaults(defineProps<Props>(), {
        // 初期表示 モデル値 = 現在のアクティブ
        modelValue: null,
});
// input 内容変更 → モデルの値 通知 処理定義
const emit = defineEmits(['update:modelValue']);

// Mリーグ シーズン選択肢
const options = computed(() => map(store.seasons, ({title, season_code}) => ({text: title, value: season_code})));
// 選択 値
const selected = computed<SeasonCode|null>({
    // getter
    get() { return props.modelValue ? props.modelValue : (store.activeSeason?.season_code ?? null); },
    // setter
    set(val: SeasonCode|null) {
        // 現在のアクティブの シーズン切り替え
        store.updateActiveBySeasonCode(val)
        // 値変更通知
        emit('update:modelValue', val);
    },
});
// 選択肢 シーズン最新化
store.fetchSeasons();
</script>
<template>
    <!-- シーズン選択 セレクトボックス -->
    <SelectBox v-model="selected" :options="options" :default-option="DEFAULT_OPTION" class="w-select"/>
</template>
<style scoped>
.w-select {
    width: 150px;
}
</style>
