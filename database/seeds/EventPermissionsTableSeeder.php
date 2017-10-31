<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => true,
            'dinner' => true,
            'party' => true,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => true,
            'dinner' => true,
            'party' => false,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => true,
            'dinner' => false,
            'party' => true,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => true,
            'dinner' => true,
            'party' => false,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => true,
            'dinner' => false,
            'party' => false,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => false,
            'dinner' => true,
            'party' => false,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('event_permissions')->insert([
            'token' => substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6),
            'reception' => false,
            'dinner' => false,
            'party' => true,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
