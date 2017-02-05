<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\Stock;
use App\Investment;
use App\MutualFunds;

class CustomerDataSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->delete();
        Customer::create([ 'cust_number' => '12056', 'name' => 'Katherine McClusky', 'email' => 'katherinemc@gmail.com',
            'address' => '6782 Miles Street', 'city' => 'Ames', 'state' => 'IA', 'zipcode' => '69129', 'home_phone' => '515-554-1024',
            'cell_phone' => '515-554-3499', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Customer::create([ 'cust_number' => '50712', 'name' => 'Garry Bennet', 'email' => 'geryb@yahoo.com',
            'address' => '3478 North 10th Street', 'city' => 'Omaha', 'state' => 'NE', 'zipcode' => '68124', 'home_phone' => '402-399-0956',
            'cell_phone' => '402-399-0956', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Customer::create([ 'cust_number' => '35109', 'name' => 'Joseph Patil', 'email' => 'jpatil@outlook.com',
            'address' => '7559 North 121st Street', 'city' => 'Omaha', 'state' => 'NE', 'zipcode' => '68167', 'home_phone' => '402-991-8915',
            'cell_phone' => '402-739-1110', 'created_at' => date_create(), 'updated_at' => date_create()]);

    }
}

class StockDataSeeder extends Seeder {

    public function run()
    {
        DB::table('stocks')->delete();
        Stock::create([ 'symbol' => 'msft', 'name' => 'Microsoft', 'shares' => 410, 'purchase_price' => 31.78, 'purchased' => date('2005-02-03'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'goog', 'name' => 'Google', 'shares' => 200, 'purchase_price' => 210, 'purchased' => date('2004-03-03'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'sbux', 'name' => 'Starbucks', 'shares' => 100, 'purchase_price' => 40.08, 'purchased' => date('2013-05-18'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'T', 'name' => 'AT&T', 'shares' => 250, 'purchase_price' => 42.78, 'purchased' => date('2004-01-15'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'vz', 'name' => 'Verizon', 'shares' => 200, 'purchase_price' => 52, 'purchased' => date('2012-01-07'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'csco', 'name' => 'Cisco', 'shares' => 100, 'purchase_price' => 28, 'purchased' => date('2016-07-06'),
            'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'ibm', 'name' => 'IBM Corp', 'shares' => 550, 'purchase_price' => 72.87, 'purchased' => date('2002-05-18'),
            'customer_id' => 2, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'aapl', 'name' => 'Apple', 'shares' => 1360, 'purchase_price' => 91, 'purchased' => date('2011-06-06'),
            'customer_id' => 2, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'yhoo', 'name' => 'Yahoo', 'shares' => 800, 'purchase_price' => 31.05, 'purchased' => date('2004-04-22'),
            'customer_id' => 3, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Stock::create([ 'symbol' => 'GM', 'name' => 'General Motors', 'shares' => 450, 'purchase_price' => 56.92, 'purchased' => date('2004-04-02'),
            'customer_id' => 3, 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class InvestmentDataSeeder extends Seeder {

    public function run()
    {
        DB::table('investments')->delete();
        Investment::create([ 'category' => '401K', 'description' => '401K with Iowa State University', 'acquired_value' => 0,
            'acquired_date' => date('1997-08-23'), 'recent_value' => 609000, 'recent_date' => date('2016-05-05'), 'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => 'fund', 'description' => 'Oppenheimer Growth Mutual Fund', 'acquired_value' => 15000,
            'acquired_date' => date('2006-09-01'), 'recent_value' => 28500, 'recent_date' => date('2016-05-15'), 'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => 'property', 'description' => 'Home with no Mortgage', 'acquired_value' => 110000,
            'acquired_date' => date('1993-02-01'), 'recent_value' => 180000, 'recent_date' => date('2016-05-05'), 'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => '401K', 'description' => '401K with Mutual of Omaha', 'acquired_value' => 0,
            'acquired_date' => date('1997-07-08'), 'recent_value' => 520000, 'recent_date' => date('2016-05-01'), 'customer_id' => 2, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => 'property', 'description' => 'Condominium', 'acquired_value' => 80000,
            'acquired_date' => date('2001-03-03'), 'recent_value' => 134000, 'recent_date' => date('2016-05-01'), 'customer_id' => 2, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => 'fund', 'description' => 'Janus Venture Fund', 'acquired_value' => 140000,
            'acquired_date' => date('2005-01-15'), 'recent_value' => 192000, 'recent_date' => date('2016-03-15'), 'customer_id' => 3, 'created_at' => date_create(), 'updated_at' => date_create()]);
        Investment::create([ 'category' => '401K', 'description' => '401K with OPPD', 'acquired_value' => 0,
            'acquired_date' => date('1993-07-09'), 'recent_value' => 134000, 'recent_date' => date('2016-05-05'), 'customer_id' => 3, 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class MutualFundsDataSeeder extends Seeder {

    public function run()
    {
        DB::table('mutual_funds')->delete();
        MutualFunds::create(['scheme' => 'Fixed income funds', 'nominee' => 'Priya Sharma', 'relationship_with_nominee' => 'sister',
        'balance_amount' => '2000', 'acquired_date' => date('2008-03-05'), 'investment_amount' => '35000', 'current_value' => '50000',
        'customer_id' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}
