<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->command->info('Users table seeded!');
	}

}

class UsersTableSeeder extends Seeder {
	/* Seeder me permite agregar datos a la tabla cuando se crea, en dado caso de ya haber sido creada
	borrará la tabla y la creará de nuevo pero agregando datos. Es recomendable hacer esto cuando no hay
	datos importantes o la base de datos es reciente */

	/* para usarlo, el comando es php artisan db:seed --force */

    public function run()
    {
        DB::table('users')->delete();

        Users::create(array('name' => 'Ana', 'lastname' => 'Sandoval', 
        	'rfc' 		=> 'SAPA901123',
        	'address' 	=> 'Trigueros #23', 
        	'city' 		=> 'Uruapan', 
        	'email' 	=> 'skylaine_117@outlook.com', 
        	'password'	=> 'root'));
    }

}