<?php

namespace App\View\Components\Cp;

use App\Enums\MenuType;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $menus = Menu::query()
            ->where('parent_id', null)
            ->where('is_active', true)
            ->where('type', MenuType::CP->value)
            ->get();
        return view('components.cp.navbar', compact('menus'));
    }
}
