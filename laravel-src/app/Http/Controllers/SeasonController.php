<?php

namespace App\Http\Controllers;

use App\Services\SeasonService;
use Illuminate\Http\JsonResponse;

/**
 * Mリーグ シーズン コントローラー
 */
class SeasonController extends Controller
{
    /* 利用サービス */
    private SeasonService $service;
    /**
     * コンストラクタ
     * @param SeasonService $service
     */
    public function __construct(SeasonService $service)
    {
        // injection
        $this->service = $service;
    }

    /**
     * 一覧 取得
     * @return JsonResponse 結果
     */
    public function list(): JsonResponse
    {
        // 選手一覧 取得
        return response()->json($this->service->getAll());
    }
}
