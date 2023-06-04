<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

/**
 *  TODO - ROTA DE LOGIN ARRUMAR DEPOIS
 ** ROTA ALTERNATIVA MELHORAR DEPOIS
 */
Route::post('login', function (Request $request) {

    if (Auth::attempt($request->only('email', 'password'))) {

        $user = (object)Auth::user();
        $token = $user->createToken('app')->plainTextToken;

        return response()->json($token, 200);
    }

    return response()->json([
        'message' => 'Invalid login details'
    ], 401);

});
