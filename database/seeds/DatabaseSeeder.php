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
        $this->call(MenusTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConfigurationsTableSeeder::class);
        $this->call(SidenavsTableSeeder::class);
        $this->call(BusinessUnitsTableSeeder::class);
        //test
        // $this->call(SidenavsV3TableSeeder::class);
    }
}
