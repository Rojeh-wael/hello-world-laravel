<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        return 'Hello World from Laravel!';
    }

    public function helloJson()
    {
        return response()->json([
            'message' => 'Hello World from Laravel!',
            'status' => 'success'
        ]);
    }

    public function helloName($name)
    {
        return response()->json([
            'message' => "Hello {$name} from Laravel!",
            'status' => 'success'
        ]);
    }
}
