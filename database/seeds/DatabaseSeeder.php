<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRolesTableSeeder::class);
        $this->command->info('User role seeding complete');

        $this->call(UserTableSeeder::class);
        $this->command->info('User seeding complete');

        $this->call(AddressTypesTableSeeder::class);
        $this->command->info('Address type seeding complete');

        $this->call(ItemUnitsSeeder::class);
        $this->command->info('Item unit seeding complete');

        $this->call(PurchaseStatusesSeeder::class);
        $this->command->info('Purchase status seeding complete');

        $this->call(FinancialTransactionCodesTableSeeder::class);
        $this->command->info('Financial transaction code seeding complete');
    }
}
