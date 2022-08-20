<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '+88001234567891',
            'designation' => 'Admin',
            'photo' => 'admin.webp',
            'is_admin' => 'admin',
            'password' => Hash::make('admin12345'),
            'created_at' =>date('Y-m-d h:i:s'),
            'updated_at' =>date('Y-m-d h:i:s'),
            ],

            [
                'name' => 'Arif',
                'email' => 'arif@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'Manager',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('arif12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                ],

            [
               'name' => 'Jahid',
               'email' => 'jahid@gmail.com',
               'phone' => '+88001234567891',
               'designation' => 'CEO',
               'photo' => 'admin.webp',
               'is_admin' => 'user',
               'password' => Hash::make('jahid12345'),
               'created_at' =>date('Y-m-d h:i:s'),
               'updated_at' =>date('Y-m-d h:i:s'),
                ],
            [
                'name' => 'Sumaiya',
                'email' => 'sumaiya@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'Assistant Manager',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('sumaiya12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                     ],
            [
               'name' => 'Inun-nahar',
               'email' => 'inun@gmail.com',
               'phone' => '+88001234567891',
               'designation' => 'Chief',
               'photo' => 'admin.webp',
               'is_admin' => 'user',
               'password' => Hash::make('inun12345'),
               'created_at' =>date('Y-m-d h:i:s'),
               'updated_at' =>date('Y-m-d h:i:s'),
                    ],
            [
                'name' => 'Ismail',
                'email' => 'ismail@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'PS',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('ismail12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                     ],  
            [
               'name' => 'Ashiq',
               'email' => 'ashiq@gmail.com',
               'phone' => '+88001234567891',
               'designation' => 'Assistant Cashier',
               'photo' => 'admin.webp',
               'is_admin' => 'user',
               'password' => Hash::make('ashiq12345'),
               'created_at' =>date('Y-m-d h:i:s'),
               'updated_at' =>date('Y-m-d h:i:s'),
                    ],

            [
                'name' => 'Ashiq',
                'email' => 'ashiq@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'Junior Manager',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('ashiq12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                     ],
             [
                'name' => 'Ali',
                'email' => 'ali@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'Cashier',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('ashiq12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                     ],
                             
             [
                'name' => 'Rakib',
                'email' => 'rakib@gmail.com',
                'phone' => '+88001234567891',
                'designation' => 'Senior Accountant',
                'photo' => 'admin.webp',
                'is_admin' => 'user',
                'password' => Hash::make('rakib12345'),
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s'),
                     ],
              [
                 'name' => 'Sabina',
                 'email' => 'sabina@gmail.com',
                 'phone' => '+88001234567891',
                 'designation' => 'Secretary',
                 'photo' => 'admin.webp',
                 'is_admin' => 'user',
                 'password' => Hash::make('sabina12345'),
                 'created_at' =>date('Y-m-d h:i:s'),
                 'updated_at' =>date('Y-m-d h:i:s'),
                      ],

            [
              'name' => 'Maria',
              'email' => 'maria@gmail.com',
              'phone' => '+88001234567891',
              'designation' => 'Chief',
              'photo' => 'admin.webp',
              'is_admin' => 'user',
              'password' => Hash::make('maria12345'),
              'created_at' =>date('Y-m-d h:i:s'),
              'updated_at' =>date('Y-m-d h:i:s'),
                   ],
    );
    }
}
