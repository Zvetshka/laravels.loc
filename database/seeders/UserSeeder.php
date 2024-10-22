<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('code', 'admin')->first();
        $role_user = Role::where('code', 'user')->first();

        User::create([
            'surname' => 'Криницын',
            'name' => 'Владимир',
            'patronymic' => 'Олегович',
            'sex' => '1',
            'birthday' => '2006-07-02',
            'login' => 'Zvetshka',
            'email' => 'wladimir.krinitsyn@yandex.ru',
            'password' => 'Zvetshka',
            'api_token' => null,
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Лоренцев',
            'name' => 'Юрий',
            'patronymic' => 'Александрович',
            'sex' => '1',
            'birthday' => '2005-07-02',
            'login' => 'Zvetshkaz',
            'email' => 'kolorano.gotors@gmail.com',
            'password' => 'zxcbass',
            'api_token' => null,
            'role_id' => $role_user->id,
        ]);
        User::create([
            'surname' => 'Поновицын',
            'name' => 'Олег',
            'patronymic' => 'Андреевич',
            'sex' => '1',
            'birthday' => '2003-07-02',
            'login' => 'Zvetshkazz',
            'email' => 'blokokakrinitsyn@mail.ru',
            'password' => 'qwasok',
            'api_token' => null,
            'role_id' => $role_user->id,
        ]);
    }
}
