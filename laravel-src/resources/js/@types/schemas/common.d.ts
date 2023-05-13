/* 共通値オブジェクト 定義 */
// ID型
export type ID = number
// 日時
export type DateTime = string
// 日(yyyy-MM-dd)
export type Day = string
// 名前
export type Name = string

/* 共通Entityオブジェクト 定義 */
export type Entity = {
    id?: Readonly<ID>|null // ID(指定なし or 空:新規など)
    createdAt?: Readonly<DateTime> // 登録日時
    updatedAt?: Readonly<DateTime> // 更新日時
}