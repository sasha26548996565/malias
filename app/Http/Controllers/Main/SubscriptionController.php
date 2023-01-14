<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $user->is_subscribe = true;
        $user->save();

        return to_route('index');
    }
}
