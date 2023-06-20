<?php

namespace App\View\Components;

use Closure;
use App\Models\MenuItem;
use Illuminate\View\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class Menu extends Component
{
    public $menuItems;

    public function __construct()
    {
        $user = Auth::user();
        $roles = Role::find($user->id);

        $this->menuItems = MenuItem::with('children')
            ->where(function ($query) use ($roles) {
                $query->whereNull('parent_id') // Include menu items with no specific role requirement
                    ->orWhere('parent_id', $roles->id); // Include menu items with a specific role requirement matching the user's role
            })
            ->whereNull('parent_id')
            ->get();
    }

    public function render()
    {

        $user = Auth::user();
        $roles = Role::find($user->id);
        return view('components.menu', compact('roles'));
    }
}
