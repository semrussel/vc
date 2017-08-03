<?php

use Illuminate\Database\Seeder;
use App\Models\Connection;

class ConnectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connection = new Connection();
        $connection->discipler_id = 1;
        $connection->disciple_id = 3;
        $connection->save();

        $connection = new Connection();
        $connection->discipler_id = 2;
        $connection->disciple_id = 4;
        $connection->save();

        $connection = new Connection();
        $connection->discipler_id = 2;
        $connection->disciple_id = 5;
        $connection->save();


        $connection = new Connection();
        $connection->discipler_id = 2;
        $connection->disciple_id = 6;
        $connection->save();

    }
}
