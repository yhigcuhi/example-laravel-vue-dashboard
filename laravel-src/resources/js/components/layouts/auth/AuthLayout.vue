<script setup lang="ts">
/* import inertia */
import { Head } from '@inertiajs/vue3';
/* import 部品 */
import Navbar from './AuthLayoutNavbar.vue';
import Footer from './AuthLayoutFooter.vue';

// 画面表示引数
withDefaults(defineProps<{title?: string}>(), {
    title: 'サンプル Dashboard'
});
</script>
<template>
    <!-- タイトル -->
    <Head :title="title"></Head>
    <!-- メインコンテンツ -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- ヘッダー ナビゲーション -->
        <div class="container top-0 position-sticky z-index-sticky">
            <div class="row">
                <div class="col-12">
                    <Navbar />
                </div>
            </div>
        </div>
        <!-- メインコンテンツ -->
        <main class="main-content mt-0">
            <!-- 認証画面系 ヘッダー -->
            <slot name="header"></slot>
            <!-- 認証画面系 画面メイン -->
            <slot name="default"></slot>
        </main>
        <!-- フッター -->
        <Footer></Footer>
    </main>
</template>
