<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\skynostrum\User::class, 5)->create();
        factory(\skynostrum\Noticias::class, 20)->create();
        factory(\skynostrum\Productos::class, 75)->create();
        factory(\skynostrum\Clientes::class, 50)->create();
        factory(\skynostrum\Ventas::class, 1)->create();
    }
}
