<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory()
            ->count(10)
            ->create();

        $roles = ['dps', 'tank','healer'];

        foreach ($roles as $role) {
            Role::create(['name' => $role ]);
        }

        foreach(User::all() as $user) {
            foreach (Role::all() as $role) {
                $user->roles()->attach($role->id);
            }
        }
    }
}
