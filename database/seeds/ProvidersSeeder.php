<?php

use App\Provider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->delete();

        for($i = 0; $i < 5; $i++){
            Provider::create([
                'name' => 'Test ' . $i,
                'copyright_email' => $i.'tehaoishdfoihas@seoihoasdf.com'
            ]);
        }

    }
}
