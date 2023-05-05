<script setup lang="ts">
/* import 画像 */
import backgroundImage from '@assets/img/signup-cover.jpg';
</script>
<template>
    <!-- ログイン画面ヘッダー -->
    <div
        class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-position: top;"
        :style="{'background-image': `url(${backgroundImage})`}"
    >
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome</h1>
                    <p class="text-lead text-white">
                        Google ログインできるのは<br/>Usersに登録されている アドレスだけになります m(_ _)m
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
