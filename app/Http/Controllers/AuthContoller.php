<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthContoller extends Controller
{
    // регистрация
    public function register(RegisterRequest $request){
        // получение id роли "пользователь"
        $role_id = Role::where('code','user')->first()->id;
        //создание нового пользователя
        User::create([
            'surname' => $request->surname,
            'name' => $request->name,
            'patronymic' => $request->patronymic,
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'login' => $request->login,
            'email' => $request->email,
            'password' => $request->password,
            'api_token' => null,
            'role_id' => $role_id,
        ]);

        // создание токена
        $user->api_token = Hash::make(Str::random(60));
        $user->save();

        return response()->json(['token' => $user->api_token])->setStatusCode(201, 'Created');
    }
    // аутентификация пользователя
    public function login(Request $request){
        return 'вход';
    }
    // выход
    public function logout(Request $request){
        return 'выход';
    }
}
