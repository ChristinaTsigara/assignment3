<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('courses')->insert([
          [
              "name" => "Programmering",
              "short_name" => "da123",
              "program_id" => 1,
          ],
          [
             "name" => "Programmering med C#",
             "short_name" => "da244",
             "program_id" => 2,
          ],
          [
             "name" => "Spelprogrammering",
             "short_name" => "da999",
             "program_id" => 3,
          ],
          [
             "name" => "Webbutveckling",
             "short_name" => "da3336",
             "program_id" => 4,
          ],
          [
             "name" => "Webbtjänster",
             "short_name" => "da7889",
             "program_id" => 5,
          ],
          [
             "name" => "Systemutveckling",
             "short_name" => "da7000",
             "program_id" => 7,
          ],
          [
             "name" => "Projekt 2",
             "short_name" => "da4444",
             "program_id" => 8,
          ],
          [
             "name" => "Etik och IT",
             "short_name" => "da0876",
             "program_id" => 7,
          ],
          [
             "name" => "Informationssäkerhet",
             "short_name" => "da76540",
             "program_id" => 9,
          ],
          [
             "name" => "Webbapplikationer",
             "short_name" => "da6842",
             "program_id" => 13,
          ],
          [
             "name" => "Databasteknik",
             "short_name" => "da3332",
             "program_id" => 14,
          ],
      ]);
    }
}
