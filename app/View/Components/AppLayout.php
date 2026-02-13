<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Auth;
use App\Models\User;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        //  dd(auth()->user()->role);

        // Check if user is authenticated before accessing role
        if (!auth()->check()) {
            return view('layouts.app');
        }


        if (auth()->user()->role === 'Admin'){
            return view ('layouts.Admin.app');
        }
        else if(auth()->user()->role === 'User'){
            return view ('layouts.User.app');
        }
        else{
            return view('layouts.app');
        }

    }
}
