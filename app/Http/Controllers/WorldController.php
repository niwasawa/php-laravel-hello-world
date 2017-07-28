<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorldController extends Controller
{
    public function show(Request $request, $message = null)
    {
        // ?comment=foobar
        $comment = $request->input('comment');

        $msg = 'Example: /world/Hello?comment=goodbye';

        if ($message != null) {
            $msg = $message;
            if ($comment != null) {
                $msg .= '(' . $comment . ')';
            } else {
                $msg .= '(Your comment does not exist.)';
            }
        }

        // resources/views/world.blade.php
        return view('world', ['message' => $msg]);
    }
}
