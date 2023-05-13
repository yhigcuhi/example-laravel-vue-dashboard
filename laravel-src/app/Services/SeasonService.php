<?php

namespace App\Services;

use App\Models\Season;
use App\Repositories\SeasonRepository;
use Illuminate\Support\Collection;

/**
 * シーズン サービス
 */
class SeasonService
{
    /* 利用リポジトリ */
    private SeasonRepository $repository;

    /**
     * コンストラクタ
     * @param SeasonRepository $repository
     */
    public function __construct(SeasonRepository $repository)
    {
        // injection
        $this->repository = $repository;
    }


    /**
     * シーズン一覧取得
     * @return Collection<Season> 結果
     */
    public function getAll(): Collection
    {
        return $this->repository->getAll();
    }
}
