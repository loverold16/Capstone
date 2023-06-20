<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    public function becomeClient()
    {
        $auth_user = auth()->user();
        $clientRole = Role::where('name', 'client')->first();
        $user = User::find($auth_user->id);

        if ($user && $clientRole) {
            $user->syncRoles($clientRole);
        }

        if ($user->hasRole('client') == 1) {
            return redirect()->back()->with('message', 'You are already a client!');
        } else {
            return redirect()->back()->with('message', 'You are now a client!');
        }

        info($user->hasRole('client'));
    }


}
