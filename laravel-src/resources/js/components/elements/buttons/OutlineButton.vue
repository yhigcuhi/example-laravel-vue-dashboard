<script setup lang="ts">
// 画面表示引数
type Props = {
    href?: string // リンク先
    outline?: '' | 'light' | 'dark' // 輪郭 (空または指定なし: 特に指定なし light:薄い dark:濃い)
};
defineProps<Props>();
</script>
<template>
    <!-- アウトライン ボタン -->
    <button v-if="!href" class="btn" :class="`btn-outline${outline ? `-${outline}` : ''}`">
        <!-- リンク以外の アウトラインボタン -->
        <slot><!-- ボタン内容 --></slot>
    </button>
    <a v-else :href="href" class="btn" :class="`btn-outline${outline ? `-${outline}` : ''}`">
        <!-- リンクの アウトラインボタン -->
        <slot><!-- ボタン内容 --></slot>
    </a>
</template>