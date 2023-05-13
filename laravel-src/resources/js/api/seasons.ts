/* Mリーグ シーズン一覧 API */
/* import client */
import axios from '@/api/MyAxios';
/* for type */
import {AxiosResponse} from 'axios';
import {Season} from '@/@types';

/***********************************
 * export REST API 定義
 ***********************************/
// ベースURL
const BASE_URL = '/seasons'

/**
 * @return {Response} シーズン一覧取得
 */
type Response = Promise<AxiosResponse<Season[]>>;
export const getSeasons = (): Response => axios.get(BASE_URL);
