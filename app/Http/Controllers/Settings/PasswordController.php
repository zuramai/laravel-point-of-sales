<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        try {
            $request->user()->update([
                'password' => bcrypt($request->password),
            ]);
        } catch (\Exception $e) {
            dd("Error: data tidak dapat diperoleh. {$e->getMessage()}");
        }
    }
}
