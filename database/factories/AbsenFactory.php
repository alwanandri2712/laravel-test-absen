<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Absen;
use Faker\Generator as Faker;

$factory->define(Absen::class, function (Faker $faker) {
    return [
        'id_absen' => Str::uuid(),
        'fk_id_users' => '36acd0d4-886e-4e84-80d1-5de0f1455a1c',
		'nama_user' => $faker->name,
		'masuk' => 0,
		'telat' => 0,
		'izin' => 0,
		'keterangan' => 'izin masuk',
		'tanggal_izin' => ['2021-09-01'],
    ];
});
