<script setup lang="ts">
/* import 部品 */
import {AuthLayout} from '@/components/layouts'; // 認証用のレイアウト
import LoginHeader from './LoginHeader.vue'; // ログイン画面ヘッダー
import {Card, OutlineButton, GoogleSVG} from '@/components/elements';

</script>
<template>
    <!-- Layout -->
    <AuthLayout title="Login">
        <!-- ログイン用のヘッダー -->
        <template #header>
            <LoginHeader></LoginHeader>
        </template>
        <!-- それ以外 -->
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <!-- ログインフォーム -->
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <!-- ログインフォーム: カード -->
                    <Card class="z-index-0" header-classes="text-center pt-4">
                        <template #header>
                            <h5>Sign in</h5>
                        </template>
                        <div class="row px-xl-5 px-sm-4 px-3">
                            <OutlineButton
                                class="w-100 d-flex justify-content-around align-items-center"
                                :href="route('google.index')"
                                outline="dark"
                            >
                                <!-- Google ログインのボタン -->
                                <GoogleSVG />
                                <span class="w-100 text-secondary">Sign in with Google</span>
                            </OutlineButton>
                        </div>
                    </Card>
                </div>
            </div>
        </div>
    </AuthLayout>
</template>
