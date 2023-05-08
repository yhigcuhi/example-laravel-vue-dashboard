<script setup lang="ts">
/* import 部品 */
import { LogoutLink } from '@/components/elements';
</script>
<template>
    <!-- Header Navbar -->
    <nav id="navbarBlur" data-scroll="true" class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl px-0 mx-4">
        <div class="px-3 py-3 w-100 d-flex align-items-center">
            <div class="d-flex align-items-center">
                <!-- 表示画面名 -->
                <h6 class="mb-0 font-weight-bolder text-white">
                    Home
                </h6>
                <!-- 表示画面名 -->
                <div class="mx-4">
                    <!-- セレクトボックス -->
                    <select class="form-control border-input">
                        <!-- 各 オプション -->
                        <option>
                            TODO:シーズンセレクトボックス
                        </option>
                    </select>
                </div>
            </div>
            <!-- 右メニュー -->
            <div class="mt-2 mt-sm-0 ms-auto me-md-0 me-sm-4 text-white">
                <LogoutLink class="text-white">ログアウト</LogoutLink>
            </div>
        </div>
    </nav>
<!-- End Navbar -->
</template>
  