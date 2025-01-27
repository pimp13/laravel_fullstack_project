<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;

interface IMenuRepository
{
    public function getLatestAll(): Collection;

    public function getAllParent(): Collection;

    public function findById(int $pk): ?Menu;

    public function create(array $data): ?Menu;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}