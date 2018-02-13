<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logs;

class Settings extends Controller
{
    public function index()
    {
        return view('admin.settings');
    }

    public function store(Request $request)
    {
        $user = Auth()->user();

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        if ($request->has('password')) {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        Logs::create(['description' => 'Updated credentials.']);
        $user->save();
    }
}
