<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Companies::insert([
            'name'=>'MyCompany',
            'address'=>'Dhanmondi, Dhaka, 1211',
            'company_bio' => 'Complement your flawless beauty',
            'company_profile_one' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'company_profile_two' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.',
                                    
            'trade_license'=>'trade_license.jpg',
            'logo'=>'logo.jpg',

            'phone'=>'01700 123456',
            'email'=>'mycompany@yahoo.com',
 
            'photo'=>'photo.jpg',
            'machine_post_limits'=>'10',	
            'work_post_limits'=>'10',	
            'status'=>'active',
         
            ]);
    }
}
