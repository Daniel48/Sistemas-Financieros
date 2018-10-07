<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Permission::create([
          'name'       => 'Navegar Usuarios',
          'slug'       =>  'users.index',
          'description'=>  'Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Ver detalle del Usuario',
          'slug'       =>  'users.show',
          'description'=>  'Ver en detalle en una Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Edicion de  Usuarios',
          'slug'       =>  'users.edit',
          'description'=>  ' Editar cualquier dato de la Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Eliminar  Usuarios',
          'slug'       =>  'users.destroy',
          'description'=>  'Elimina cualquier Usuario',

         ]);


         //roles

         Permission::create([
          'name'       => 'Navegar roles',
          'slug'       =>  'roles.index',
          'description'=>  'Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Ver detalle del roles',
          'slug'       =>  'roles.show',
          'description'=>  'Ver en detalle en una Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Creacion de  roles',
          'slug'       =>  'roles.create',
          'description'=>  ' Editar cualquier dato de la Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Edicion de  roles',
          'slug'       =>  'roles.edit',
          'description'=>  ' Editar cualquier dato de la Lista y Navega todos los Usuarios del Sistema',

         ]);

         Permission::create([
          'name'       => 'Eliminar  roles',
          'slug'       =>  'roles.destroy',
          'description'=>  'Elimina cualquier Usuario',

         ]);

         //Productos
         Permission::create([
          'name'       => 'Navegar productos',
          'slug'       =>  'products.index',
          'description'=>  'Lista y Navega todos los productos del Sistema',

         ]);

         Permission::create([
          'name'       => 'Ver detalle del productos',
          'slug'       =>  'products.show',
          'description'=>  'Ver en detalle en una Lista y Navega todos los productos del Sistema',

         ]);

         Permission::create([
          'name'       => 'Creacion de  productos',
          'slug'       =>  'products.create',
          'description'=>  ' Editar cualquier dato de la Lista y Navega todos los productos del Sistema',

         ]);

         Permission::create([
          'name'       => 'Edicion de  productos',
          'slug'       =>  'products.edit',
          'description'=>  ' Editar cualquier dato de la Lista y Navega todos los productos del Sistema',

         ]);

         Permission::create([
          'name'       => 'Eliminar  productos',
          'slug'       =>  'products.destroy',
          'description'=>  'Elimina cualquier productos',

         ]);






    }
}
