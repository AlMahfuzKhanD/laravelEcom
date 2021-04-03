<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('products')->insert([
            [
                'name' => 'lg',
                'price' => '200',
                'category' => 'mobile',
                'description' => 'mobile device',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md07517838/gallery/LMG910EMW-Aurora-Silver-DZ-03.jpg'

            ],
            [
                'name' => 'walton',
                'price' => '300',
                'category' => 'mobile',
                'description' => 'mobile device',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md07517838/gallery/LMG910EMW-Aurora-Silver-DZ-03.jpg'

            ],
            [
                'name' => 'xiomi',
                'price' => '400',
                'category' => 'mobile',
                'description' => 'mobile device',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md07517838/gallery/LMG910EMW-Aurora-Silver-DZ-03.jpg'

            ]
        ]);

    }
}
