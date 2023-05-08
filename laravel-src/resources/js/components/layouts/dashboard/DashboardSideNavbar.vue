<script setup lang="ts">
/* import 部品*/
import { MLeagueLink, BrandLogo } from '@/components/elements';
/* import 定数*/
import MENUS from '@/constants/RouteMenu';
</script>
<template>
    <!-- 背景色 -->
    <div class="min-height-300 position-absolute w-100 bg-success"></div>
    <!-- サイドナビゲーション -->
    <aside
        id="sidenav-main"
        class="my-3 overflow-auto border-0 sidenav navbar navbar-vertical navbar-expand-xs border-radius-xl fixed-start ms-3 bg-white"
        data-color="primary"
    >
        <!-- サイドナビゲーション:ヘッダー -->
        <div class="sidenav-header">
            <MLeagueLink class="m-0 navbar-brand d-flex justify-content-around align-items-center">
                <BrandLogo class="navbar-brand-img h-100" />
                <span class="font-weight-bold">Mリーグ データベース</span>
            </MLeagueLink>
        </div>
        <!-- 区切り線 -->
        <hr class="mt-0 horizontal dark" />
        <!-- サイドバー メニュー一覧 -->
        <ul class="navbar-nav">
            <!-- 各 サイドバー メニュー -->
            <li v-for="(menu, index) in MENUS" :key="index" class="nav-item">
                <a :href="route(menu.routeName)" class="nav-link" :class="{active: $page.url.startsWith(menu.prefixURL)}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="text-sm opacity-10" :class="menu.iconClass"></i>
                    </div>
                    <span class="nav-link-text ms-2">{{ menu.text }}</span>
                </a>
            </li>
        </ul>
    </aside>
</template>
  