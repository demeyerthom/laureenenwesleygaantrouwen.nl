<?php

use Illuminate\Database\Seeder;

class InviteesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entity\Invitee::create([
            'hash' => 'foobar',
            'first_name' => 'Thomas',
            'last_name' => 'De Meyer',
            'invited_reception' => true,
            'invited_dinner' => true,
            'invited_party' => true
        ])->save();
    }
}
