<?php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuarios
        Permission::create(['name' => 'usuarios.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'usuarios.destroy', 'guard_name' => 'web']);

        //Clientes
        Permission::create(['name' => 'clientes.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'clientes.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'clientes.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'clientes.destroy', 'guard_name' => 'web']);

        //Productos
        Permission::create(['name' => 'productos.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'productos.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'productos.update', 'guard_name' => 'web']);
        Permission::create(['name' => 'productos.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'productos.destroy', 'guard_name' => 'web']);

        //Cierre
        Permission::create(['name' => 'cierre.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'cierre.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'cierre.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'cierre.destroy', 'guard_name' => 'web']);

          //Clientes-productos
          Permission::create(['name' => 'clientes-productos.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'clientes-productos.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'clientes-productos.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'clientes-productos.destroy', 'guard_name' => 'web']);

//Backup
          Permission::create(['name' => 'backup.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'backup.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'backup.restore', 'guard_name' => 'web']);
          Permission::create(['name' => 'backup.delete', 'guard_name' => 'web']);
          Permission::create(['name' => 'backup.download', 'guard_name' => 'web']);

               //Gastos
               Permission::create(['name' => 'gastos.index', 'guard_name' => 'web']);
               Permission::create(['name' => 'gastos.edit', 'guard_name' => 'web']);
               Permission::create(['name' => 'gastos.create', 'guard_name' => 'web']);
               Permission::create(['name' => 'gastos.destroy', 'guard_name' => 'web']);
               
               Permission::create(['name' => 'roles.index', 'guard_name' => 'web']);


        

        //Admin
        $admin = Role::create(['name' => 'Admin']);
        $vendedor = Role::create(['name' => 'Vendedor']);
        $auditor = Role::create(['name' => 'Auditor']);

        $admin->givePermissionTo([
            'usuarios.index',
            'usuarios.edit',
            'usuarios.create',
            'usuarios.destroy',
            
            'clientes.index',
            'clientes.edit',
            'clientes.create',
            'clientes.destroy',

            'gastos.index',
            'gastos.edit',
            'gastos.create',
            'gastos.destroy',

            'productos.index',
            'productos.edit',
            'productos.create',
            'productos.destroy',

            
            'roles.index',

            'cierre.index',
            'cierre.edit',
            'cierre.create',
            'cierre.destroy',

            'clientes-productos.index',
            'clientes-productos.edit',
            'clientes-productos.create',
            'clientes-productos.destroy',

            'backup.index',
            'backup.create',
            'backup.restore',
            'backup.delete',
            'backup.download', 
        ]);

        
        $vendedor->givePermissionTo([
            
            'clientes.index',
            'clientes.create',

            'productos.index',
            'productos.update',
            'productos.create',

            'cierre.index',
            'cierre.create',

            'clientes-productos.index',
            'clientes-productos.create',

        ]);

        $auditor->givePermissionTo([
            'usuarios.index',
            
            'clientes.index',

            'productos.index',

            'cierre.index',
            'roles.index',

            'clientes-productos.index',

        ]);


        $user = User::find(1); 
        $user->assignRole('Admin');
        
        $user2 = User::find(2); 
        $user2->assignRole('Admin');

        $user3 = User::find(3); 
        $user3->assignRole('Admin');
        
        $user4 = User::find(4); 
        $user4->assignRole('Vendedor');

        $user5 = User::find(5); 
        $user5->assignRole('Auditor');


    }
}
