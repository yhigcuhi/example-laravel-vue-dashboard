<script setup lang="ts">
/* import 部品 */
import {DashboardLayout} from '@/components/layouts';
import {Card} from '@/components/elements';
/* import 定数 */
import MENUS from '@/constants/RouteMenu';

</script>
<template>
    <DashboardLayout title="Home">
        <!-- ダッシュボード: Home -->
        <div class="row my-4">
            <div class="col-12">
                <!-- ダッシュボード: メニュー section -->
                <div class="row">
                    <!-- 各メニュー -->
                    <div class="col-3" v-for="(menu, index) in MENUS" :key="index">
                        <a :href="route(menu.routeName)">
                            <Card class="btn" body-classes="p-1">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <i class="fs-3" :class="menu.iconClass"></i>
                                        <h5 class="font-weight-bolder">{{ menu.text }}</h5>
                                    </div>
                                </div>
                            </Card>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </DashboardLayout>
</template>
