/* import 定数 */
import ROUTES from './RouteName';

// 画面遷移 メニュー用(サイドメニューとかよう)の定数
type RouteMenu = {
    routeName: string // ルート名
    prefixURL: string // URL 接頭辞
    iconClass: string // アイコンクラス （例：<i class="now-ui-icons design_app">など
    text: string // 画面 表示名
}
// 表示順でメニューの一覧定義
const menus: RouteMenu[] = [
    // ホーム画面
    {
        routeName: ROUTES.DASHBOARD,
        prefixURL: '/home',
        iconClass: 'ni ni-tv-2 text-primary',
        text: 'Home'
    },
];

// export
export default menus;

