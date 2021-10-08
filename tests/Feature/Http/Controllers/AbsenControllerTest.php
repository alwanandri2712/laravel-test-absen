<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Absen;
// use Illuminate\Foundation\Testing\WithFaker;

class AbsenControllerTest extends TestCase
{
    use WithFaker;

    /**
     * @test
     */
    public function it_stores_data()
    {
        $absen = Absen::factory(50);
        print_r($absen); die;
        $response = $this->actingAs($absen)
            ->post('/permits', [
                'id_absen' => Str::uuid(),
                'fk_id_users' => '36acd0d4-886e-4e84-80d1-5de0f1455a1c',
                'nama_user' => $faker->name,
                'masuk' => 0,
                'telat' => 0,
                'izin' => 0,
                'keterangan' => 'izin masuk',
                'tanggal_izin' => ['2021-09-01'],
            ]);

        $response->assertStatus(200);
    }
}
