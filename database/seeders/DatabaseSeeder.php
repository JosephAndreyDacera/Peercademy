<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $now = Carbon::now();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // ====================================================================================================
        // User Seeders
        // ====================================================================================================
        DB::table('users')->insert(
            [
                'student_id' => '12-3-45678',
                'name' => 'Arvin Arar',
                'email' => 'arvin@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '34-5-98765',
                'name' => 'Carl Michael Codog',
                'email' => 'carl@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '56-7-12345',
                'name' => 'Krisha Mae Giva',
                'email' => 'krisha@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '78-9-54321',
                'name' => 'Gee Celine Thea Cagape',
                'email' => 'thea@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '90-1-87654',
                'name' => 'Diocel Mae Berdin',
                'email' => 'diocel@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '23-4-32109',
                'name' => 'Aljon Lerios',
                'email' => 'aljon@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '45-6-65432',
                'name' => 'Ciann Renel Cazar',
                'email' => 'ciann@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '67-8-09876',
                'name' => 'Jimwill Capino',
                'email' => 'jimwill@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '89-0-43210',
                'name' => 'Daniel Biron',
                'email' => 'daniel@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'student_id' => '10-2-76543',
                'name' => 'Edgar Alkuino Rodriguez',
                'email' => 'edgar@example.com',
                'password' => Hash::make('password'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        );


        
        
        // ====================================================================================================
        // Courses
        // ====================================================================================================
        DB::table('courses')->insert(
            [
                'course' => 'Bachelor of Science in Computer Science',
                'crs_acro' => 'BSCS',
                'dept_id' => 1,
            ],
            [
                'course' => 'Bachelor of Science in Civil Engineering',
                'crs_acro' => 'BSCE',
                'dept_id' => 2,
            ],
            [
                'course' => 'Bachelor of Science in Agricultural and Biosystems Engineering',
                'crs_acro' => 'BSABE',
                'dept_id' => 3,
            ],
        );

        
        
        // ====================================================================================================
        // Courses
        // ====================================================================================================
        DB::table('departments')->insert(
            [
                'department' => 'Department of Computer Science and Technology',
                'dept_acro' => 'DCST',
            ],
            [
                'department' => 'Department of Civil Engineering',
                'dept_acro' => 'DCE',
            ],
            [
                'department' => 'Department of Agricultural and Biosystems Engineering',
                'dept_acro' => 'DABE',
            ],
        );


        // ====================================================================================================
        // User Info
        // ====================================================================================================
        DB::table('user_info')->insert(
            [
                'user_id' => 1,
                'address' => '123 Maple Street, Springfield, CA 12345',
                'mobile' => '+639123456789',
                'image' => 'default.png',
                'birthdate' => '10/03/1992',
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'ararcor.pdf',
                'bio' => 'A passionate photographer capturing moments and emotions through the lens. Lover of nature and explorer of new places.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'address' => '456 Oak Avenue, Pleasantville, NY 67890',
                'mobile' => '+639987654321',
                'image' => 'default.png',
                'birthdate' => '24/07/1985',
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'codogcor.pdf',
                'bio' => 'An aspiring writer with a knack for storytelling. Crafting words to inspire and provoke imagination is my passion.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'address' => '789 Elm Lane, Sunnydale, TX 54321',
                'mobile' => '+639876543210',
                'image' => 'default.png',
                'birthdate' => '05/11/1998',
                'crs_id' => 2,
                'dept_id' => 2,
                'cor' => 'givacor.pdf',
                'bio' => 'Fitness enthusiast and certified personal trainer. Helping individuals achieve their health and wellness goals is my mission.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 4,
                'address' => '321 Pine Road, Oceanview, FL 98765',
                'mobile' => '+639345678912',
                'image' => 'default.png',
                'birthdate' => '18/09/1976',
                'crs_id' => 2,
                'dept_id' => 2,
                'cor' => 'cagapecor.pdf',
                'bio' => 'A dedicated educator shaping young minds. Creating a nurturing environment for learning and growth is my utmost priority.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 5,
                'address' => '654 Cedar Court, Hillside, AZ 23456',
                'mobile' => '+639789012345',
                'image' => 'default.png',
                'birthdate' => 29/02/2000,
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'berdincor.pdf',
                'bio' => 'Entrepreneur and tech enthusiast. Building innovative solutions to simplify everyday life and enhance productivity.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 6,
                'address' => '987 Birch Avenue, Riverside, OH 56789',
                'mobile' => '+639234567890',
                'image' => 'default.png',
                'birthdate' => 12/06/1991,
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'lerioscor.pdf',
                'bio' => 'Travel blogger with a heart for adventure. Exploring the world one destination at a time and sharing captivating experiences.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 7,
                'address' => '345 Willow Street, Lakeside, IL 87654',
                'mobile' => '+639678901234',
                'image' => 'default.png',
                'birthdate' => 07/12/1983,
                'crs_id' =>3,
                'dept_id' => 3,
                'cor' => 'cazarcor.pdf',
                'bio' => 'Musician and composer. Expressing emotions through melodies and harmonies, creating a soundtrack for life.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 8,
                'address' => '678 Ash Lane, Mountainview, GA 34567',
                'mobile' => '+639567890123',
                'image' => 'default.png',
                'birthdate' => '23/01/1987',
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'capinocor.pdf',
                'bio' => 'Social media marketer with a passion for digital communication. Helping brands build a strong online presence and engage their audience.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 9,
                'address' => '901 Juniper Road, Lakeshore, PA 65432',
                'mobile' => '+639890123456',
                'image' => 'default.png',
                'birthdate' => '30/04/1995',
                'crs_id' => 1,
                'dept_id' => 1,
                'cor' => 'bironcor.pdf',
                'bio' => 'Environmental activist committed to sustainable living. Advocating for a greener future and spreading awareness about climate change.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 10,
                'address' => '234 Magnolia Drive, Woodland, MI 76543',
                'mobile' => '+639456789012',
                'image' => 'default.png',
                'birthdate' => '14/08/1979',
                'crs_id' => 3,
                'dept_id' => 3,
                'cor' => 'rodriguezcor.pdf',
                'bio' => 'Animal rights advocate and volunteer at local shelters. Devoted to the well-being and protection of our furry friends.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        );

    }
}
