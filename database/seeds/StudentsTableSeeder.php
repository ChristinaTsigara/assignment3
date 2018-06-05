<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('students')->insert([
          [
              "first_name" => "Thomas",
              "last_name" => "Eriksson",
              "email" => "thomas.eriksson@gmail.com",
          ],
          [
            "first_name" => "Tom",
            "last_name" => "Svensson",
            "email" => "tom.svensson@gmail.com",
          ],
          [
            "first_name" => "Lara",
            "last_name" => "Thomson",
            "email" => "lara.thomson@gmail.com",
          ],
          [
            "first_name" => "Johan",
            "last_name" => "Ohlsson",
            "email" => "johan.ohlsson@gmail.com",
          ],
          [
            "first_name" => "Maria",
            "last_name" => "Håkansson",
            "email" => "maria.håkansson@gmail.com",
          ],
          [
            "first_name" => "Emily",
            "last_name" => "Johansson",
            "email" => "emily.johansson@gmail.com",
          ],
      ]);
    }
}
