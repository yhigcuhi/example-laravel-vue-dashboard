<?php

namespace App\Repositories;
use App\Models\Season;
use Illuminate\Database\Eloquent\Collection;

/**
 * Season関連 リポジトリ
 */
class SeasonRepository
{
    /**
     * 一覧 取得
     * @return Collection<Season> 一覧
     */
    public function getAll(): Collection
    {
        // 一覧取得
        return Season::get();
    }
}
