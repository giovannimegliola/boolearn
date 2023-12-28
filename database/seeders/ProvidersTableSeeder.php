<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;


class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providers = file_get_contents(__DIR__ . '/providers.json');
        $providers = json_decode($providers, true);
        foreach ($providers as $provider){
            $newProvider = new Provider();

            $newProvider->name = $provider['name'];
            $newProvider->logo = $provider['logo'];
            $newProvider->address = $provider['address'];
            $newProvider->country = $provider['country'];
            $newProvider->description = $provider['description'];

            $newProvider->save();

        }
    }
}
