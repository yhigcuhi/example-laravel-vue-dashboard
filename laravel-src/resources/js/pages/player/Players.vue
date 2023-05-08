<script setup lang="ts">
/* import 部品 */
import {DashboardLayout} from '@/components/layouts';
import {Card} from '@/components/elements';
</script>
<template>
    <DashboardLayout title="選手一覧">
        <!-- 選手一覧 -->
        <div class="row my-4">
            <!-- 選手一覧: 検索フォーム -->
            <div class="col-12">
                <Card title="選手検索">
                    選手検索フォーム
                    <template #footer>
                        <button class="btn btn-primary me-3">検索</button>
                        <button class="btn btn-light">クリア</button>
                    </template>
                </Card>
            </div>
            <!-- 選手一覧: 表 -->
            <div class="col-12 my-4">
                <Card>
                    一覧 表
                </Card>
            </div>
        </div>
    </DashboardLayout>
</template>
