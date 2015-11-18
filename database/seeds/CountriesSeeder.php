<?php

use Illuminate\Database\Seeder;
use AngelKurten\Countries\Models\Countries;

class CountriesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        //Empty the countries table
        DB::table(\Config::get('countries.table_name'))->delete();

        //Get all of the countries
        $countries = Countries::getCountries();
        foreach ($countries as $country){
            DB::table(\Config::get('countries.table_name'))->insert(array(
                'id'    => $country['id'],
                'iso2'  => $country['iso2'],
                'short_name'  => $country['short_name'],
                'long_name'  => $country['long_name'],
                'iso3'  => $country['iso3'],
                'numcode'  => $country['numcode'],
                'un_member'  => $country['un_member'],
                'calling_code'  => $country['calling_code'],
                'cctld'  => $country['cctld'],
                'spanish_name'  => $country['spanish_name'],
            ));
        }
    }
}
