<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert($this->data());
    }

    private function data()
    {
        return [
            [
                "city_id"    => 0,
                "area_name"  => "Khilkhet",
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "city_id"=> 0,
                "area_name" => "Karwan Bazar",
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "city_id"=> 0,
                "area_name" => "Farmgate",
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
            [
                "city_id"=> 0,
                "area_name" => "Banani",
                "created_at" => Carbon::now()->toDateTimeString(),
                "updated_at" => Carbon::now()->toDateTimeString()
            ],
        ];
    }
}
