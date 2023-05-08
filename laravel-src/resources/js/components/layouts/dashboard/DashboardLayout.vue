<script setup lang="ts">
/* import inertia */
import { Head } from '@inertiajs/vue3';
/* import 部品 */
import SideNavbar from './DashboardSideNavbar.vue';
import Navbar from './DashboardNavbar.vue';
import Footer from './DashboardFooter.vue';

// 画面表示引数
withDefaults(defineProps<{title?: string}>(), {
    title: 'サンプル Dashboard'
});
</script>
<template>
    <!-- タイトル -->
    <Head :title="title"></Head>
    <!-- サイドナビゲーションバー -->
    <SideNavbar />
    <!-- メインコンテンツ -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- ヘッダー ナビゲーション -->
        <Navbar />
        <!-- コンテンツ -->
        <div class="py-4 container-fluid">
            <!-- コンテンツ ヘッダー -->
            <slot name="header"></slot>
            <!-- コンテンツ メイン -->
            <slot name="default"></slot>
        </div>
        <!-- フッター -->
        <Footer></Footer>
    </main>
</template>
