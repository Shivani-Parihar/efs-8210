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
        $this->call(CustomerDataSeeder::class);
        $this->call(StockDataSeeder::class);
        $this->call(InvestmentDataSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MutualFundsDataSeeder::class);
    }
}
