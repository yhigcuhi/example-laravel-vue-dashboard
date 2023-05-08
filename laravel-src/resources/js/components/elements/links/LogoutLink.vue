<script setup lang="ts">
/* import 定数 */
import ROUTES from '@/constants/RouteName';
</script>
<template>
    <a :href="route(ROUTES.LOGOUT)">
        <slot></slot>
    </a>
</template>