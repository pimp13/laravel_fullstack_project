<?php

declare(strict_types=1);

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Repositories\IMenuRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(
        private readonly IMenuRepository $repository
    )
    {
    }

    public function index(): View
    {
        $menus = $this->repository->getLatestAll();
        return view('cp.menus.index', compact('menus'));
    }

    public function create(): View
    {
        $menu_types = Menu::$menuTypes;
        $parent_menus = $this->repository->getAllParent();
        return view('cp.menus.create', compact('menu_types', 'parent_menus'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['is_active'] = isset($request->is_active);
        $menu = $this->repository->create($inputs);
        return back();
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
