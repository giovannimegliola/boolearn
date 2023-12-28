<?php

namespace Database\Seeders;
use App\Models\Account;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = file_get_contents(__DIR__.'/users.json');
        $accounts = json_decode($accounts, true);
        foreach($accounts as $account){
            $newaccount = new Account();
            $newaccount-> name = $account['name'];
            $newaccount->surname = $account['surname'];
            $newaccount->email = $account['email'];
            $newaccount->password = $account['password'];
            $newaccount->save();
        }
    }
}
