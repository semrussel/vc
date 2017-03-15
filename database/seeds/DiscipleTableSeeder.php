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
        $disciple->spiStatus = 'ON-FIRE';
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
        $disciple->spiStatus = 'ON-FIRE';
        $disciple->save();


    }
}
