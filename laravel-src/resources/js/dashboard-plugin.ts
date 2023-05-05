/* デザイン取り込み */
import '@assets/js/nav-pills.js'; // 利用デザイン argonの提供
// import 'bootstrap/scss/bootstrap.scss'; // bootstrap利用
import '@assets/scss/argon-dashboard.scss'; // 利用デザイン


// 独自のDashboard pluginとして集約
export default {
    // 現状 特になし デザイン取り込みのimport用
    install() { // install(Vue)のインターフェイスの実装
        // GlobalComponentsやNotificationsなどを Vue.use(Notifications);っとしたりすると app.ts を肥大化しなくて済む
    },
}