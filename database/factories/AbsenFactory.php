<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Users,Absen};
use Faker\Generator as Faker;

$factory->define(Absen::class, function (Faker $faker) {
    return [
        'fk_id_users'	=> 1,
        'nama_user' 	=> $faker->name,
        'izin' 			=> 1,
        'keterangan'  	=> 'Izin',
        'tanggal_izin'  => "[\"2021-09-12\",\"2021-09-11\",\"2021-09-13\"]",
        'deleted_at'    => 0,
        'created_at'    => date('Y-m-d H:s:i')
    ];
});
