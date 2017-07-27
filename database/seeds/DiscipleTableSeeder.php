<?php

use Illuminate\Database\Seeder;
use App\Disciple;

class DiscipleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciple = new Disciple();
        $disciple->firstName = 'Ephraim';
        $disciple->lastName = 'Pascual';
        $disciple->nickName = 'Ptr Eph';
        $disciple->gender = 'MALE';
        $disciple->address = 'Mandaluyong City';
        $disciple->school = 'BBSI';
        $disciple->company = 'MBC';
        $disciple->phyBirth = date('1969-08-10');
        $disciple->contactNo = '09273429422';
        $disciple->cStatus = 'MARRIED';
        $disciple->picture = 'images/profile/Eph.jpg';
        $disciple->spiBirth = date('1969-08-10');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'NO';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();

        $disciple = new Disciple();
        $disciple->firstName = 'Linaliam';
        $disciple->lastName = 'Pascual';
        $disciple->nickName = 'Ptra Liam';
        $disciple->gender = 'FEMALE';
        $disciple->address = 'Mandaluyong City';
        $disciple->school = 'BBSI';
        $disciple->company = 'MBC';
        $disciple->phyBirth = date('1969-12-17');
        $disciple->contactNo = '09273429422';
        $disciple->cStatus = 'MARRIED';
        $disciple->picture = 'images/profile/Liam.jpg';
        $disciple->spiBirth = date('1969-12-17');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'NO';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();

        $disciple = new Disciple();
        $disciple->firstName = 'Russel John';
        $disciple->lastName = 'Villanueva';
        $disciple->nickName = 'Russel';
        $disciple->gender = 'MALE';
        $disciple->address = 'Morong, Rizal';
        $disciple->school = 'FEU';
        $disciple->company = 'Yondu Inc.';
        $disciple->phyBirth = date('1992-09-08');
        $disciple->contactNo = '09364582490';
        $disciple->cStatus = 'SINGLE';
        $disciple->picture = 'images/profile/Russel.jpg';
        $disciple->spiBirth = date('2010-12-25');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'NO';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();

        $disciple = new Disciple();
        $disciple->firstName = 'Martha Deniece';
        $disciple->lastName = 'Geronimo';
        $disciple->nickName = 'Madi';
        $disciple->gender = 'FEMALE';
        $disciple->address = 'Morong, Rizal';
        $disciple->school = 'UP';
        $disciple->company = 'BreakRoad';
        $disciple->phyBirth = date('1992-08-12');
        $disciple->contactNo = '09968748863';
        $disciple->cStatus = 'SINGLE';
        $disciple->picture = 'images/profile/Madi.jpg';
        $disciple->spiBirth = date('2010-12-25');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'NO';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();

        $disciple = new Disciple();
        $disciple->firstName = 'Ma. Jovelyn';
        $disciple->lastName = 'Canenet';
        $disciple->nickName = 'Jove';
        $disciple->gender = 'FEMALE';
        $disciple->address = 'Morong, Rizal';
        $disciple->school = 'URS';
        $disciple->company = "Child's Place";
        $disciple->phyBirth = date('1992-07-21');
        $disciple->contactNo = '09268748717';
        $disciple->cStatus = 'SINGLE';
        $disciple->picture = 'images/profile/Jove.jpg';
        $disciple->spiBirth = date('2010-12-25');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'YES';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();

        $disciple = new Disciple();
        $disciple->firstName = 'Michelle Faye';
        $disciple->lastName = 'San Antonio';
        $disciple->nickName = 'Mia';
        $disciple->gender = 'FEMALE';
        $disciple->address = 'Morong, Rizal';
        $disciple->school = 'URS';
        $disciple->company = "Quenn Mary School";
        $disciple->phyBirth = date('1992-03-05');
        $disciple->contactNo = '09753731362';
        $disciple->cStatus = 'SINGLE';
        $disciple->picture = 'images/profile/Mia.jpg';
        $disciple->spiBirth = date('2010-12-25');
        $disciple->process = 'POST ENCOUNTER';
        $disciple->bapt = 'YES';
        $disciple->isFirstGen = 'YES';
        $disciple->spiStatus = 'ON FIRE';
        $disciple->save();


    }
}
