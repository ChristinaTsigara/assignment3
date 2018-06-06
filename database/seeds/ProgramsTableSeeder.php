<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('programs')->insert([
          [
              "name" => "Informationsarkitekt",
              "year" => 2015,
          ],
          [
            "name" => "Informationsarkitekt",
            "year" => 2016,
          ],
          [
            "name" => "Informationsarkitekt",
            "year" => 2017,
          ],
          [
            "name" => "Informationsarkitekt",
            "year" => 2018,
          ],
          [
            "name" => "Systemutveckling",
            "year" => 2015,
          ],
          [
            "name" => "Systemutveckling",
            "year" => 2016,
          ],
          [
            "name" => "Spelutveckling",
            "year" => 2016,
          ],
          [
            "name" => "Spelutveckling",
            "year" => 2017,
          ],
          [
            "name" => "Spelutveckling",
            "year" => 2018,
          ],
          [
            "name" => "Datateknik",
            "year" => 2016,
          ],
          [
            "name" => "Apputveckling",
            "year" => 2017,
          ],
      ]);
    }
}
