<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Menu;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Database\Eloquent\Collection;

class MenuRepository implements IMenuRepository
{
    public function __construct(
        protected Cache $cache
    )
    {
    }

    public function getLatestAll(): Collection
    {
        return Menu::query()->latest()->get();
    }

    public function getAllParent(): Collection
    {
        return Menu::query()->where('parent_id', null)->get();
    }

    public function findById(int $id): ?Menu
    {
        return Menu::query()->findOrFail($id);
    }

    public function create(array $data): ?Menu
    {
        return Menu::query()->create($data);
    }

    public function update(int $id, array $data): bool
    {
        $menu = $this->findById($id);
        if (!$menu) return false;
        return $menu->update($data);
    }

    public function delete(int $id): bool
    {
        $menu = $this->findById($id);
        if (!$menu) return false;
        return $menu->delete();
    }
}