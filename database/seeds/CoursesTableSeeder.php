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
          ],
          [
             "name" => "Programmering med C#",
             "short_name" => "da244",
          ],
          [
             "name" => "Spelprogrammering",
             "short_name" => "da999",
          ],
          [
             "name" => "Webbutveckling",
             "short_name" => "da3336",
          ],
          [
             "name" => "Webbtjänster",
             "short_name" => "da7889",
          ],
          [
             "name" => "Systemutveckling",
             "short_name" => "da7000",
          ],
          [
             "name" => "Projekt 2",
             "short_name" => "da4444",
          ],
          [
             "name" => "Etik och IT",
             "short_name" => "da0876",
          ],
          [
             "name" => "Informationssäkerhet",
             "short_name" => "da76540",
          ],
          [
             "name" => "Webbapplikationer",
             "short_name" => "da6842",
          ],
          [
             "name" => "Databasteknik",
             "short_name" => "da3332",
          ],
      ]);
    }
}
