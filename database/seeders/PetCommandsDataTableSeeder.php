<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetCommandsDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_commands_data')->delete();
        
        \DB::table('pet_commands_data')->insert(array (
            0 => 
            array (
                'command_id' => 0,
                'text' => 'Free',
                'required_level' => 1,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            1 => 
            array (
                'command_id' => 1,
                'text' => 'Sit',
                'required_level' => 1,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            2 => 
            array (
                'command_id' => 2,
                'text' => 'Down',
                'required_level' => 2,
                'reward_xp' => 10,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            3 => 
            array (
                'command_id' => 3,
                'text' => 'Here',
                'required_level' => 2,
                'reward_xp' => 10,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            4 => 
            array (
                'command_id' => 4,
                'text' => 'Beg',
                'required_level' => 2,
                'reward_xp' => 10,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            5 => 
            array (
                'command_id' => 5,
                'text' => 'Play Dead',
                'required_level' => 3,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            6 => 
            array (
                'command_id' => 6,
                'text' => 'Stay',
                'required_level' => 4,
                'reward_xp' => 10,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            7 => 
            array (
                'command_id' => 7,
                'text' => 'Follow',
                'required_level' => 5,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            8 => 
            array (
                'command_id' => 8,
                'text' => 'Stand',
                'required_level' => 6,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            9 => 
            array (
                'command_id' => 9,
                'text' => 'Jump',
                'required_level' => 6,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            10 => 
            array (
                'command_id' => 10,
                'text' => 'Speak',
                'required_level' => 7,
                'reward_xp' => 10,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            11 => 
            array (
                'command_id' => 11,
                'text' => 'Play',
                'required_level' => 8,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            12 => 
            array (
                'command_id' => 12,
                'text' => 'Silent',
                'required_level' => 8,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            13 => 
            array (
                'command_id' => 13,
                'text' => 'Nest',
                'required_level' => 5,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            14 => 
            array (
                'command_id' => 14,
                'text' => 'Drink',
                'required_level' => 4,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            15 => 
            array (
                'command_id' => 15,
                'text' => 'Follow left',
                'required_level' => 15,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            16 => 
            array (
                'command_id' => 16,
                'text' => 'Follow right',
                'required_level' => 15,
                'reward_xp' => 15,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            17 => 
            array (
                'command_id' => 17,
                'text' => 'Play football',
                'required_level' => 10,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            18 => 
            array (
                'command_id' => 18,
                'text' => 'Come here',
                'required_level' => 9,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            19 => 
            array (
                'command_id' => 19,
                'text' => 'Bounce',
                'required_level' => 9,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            20 => 
            array (
                'command_id' => 20,
                'text' => 'Flat',
                'required_level' => 11,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            21 => 
            array (
                'command_id' => 21,
                'text' => 'Dance',
                'required_level' => 12,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            22 => 
            array (
                'command_id' => 22,
                'text' => 'Spin',
                'required_level' => 10,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            23 => 
            array (
                'command_id' => 23,
                'text' => 'Switch TV',
                'required_level' => 12,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            24 => 
            array (
                'command_id' => 24,
                'text' => 'Move forward',
                'required_level' => 17,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            25 => 
            array (
                'command_id' => 25,
                'text' => 'Turn left',
                'required_level' => 18,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            26 => 
            array (
                'command_id' => 26,
                'text' => 'Turn right',
                'required_level' => 18,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            27 => 
            array (
                'command_id' => 27,
                'text' => 'Relax',
                'required_level' => 13,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            28 => 
            array (
                'command_id' => 28,
                'text' => 'Croak',
                'required_level' => 14,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            29 => 
            array (
                'command_id' => 29,
                'text' => 'Dip',
                'required_level' => 14,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            30 => 
            array (
                'command_id' => 30,
                'text' => 'Wave',
                'required_level' => 5,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            31 => 
            array (
                'command_id' => 31,
                'text' => 'Mambo!',
                'required_level' => 18,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            32 => 
            array (
                'command_id' => 32,
                'text' => 'High jump',
                'required_level' => 18,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            33 => 
            array (
                'command_id' => 33,
                'text' => 'Chicken dance',
                'required_level' => 7,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            34 => 
            array (
                'command_id' => 34,
                'text' => 'Triple jump',
                'required_level' => 9,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            35 => 
            array (
                'command_id' => 35,
                'text' => 'Spread wings',
                'required_level' => 8,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            36 => 
            array (
                'command_id' => 36,
                'text' => 'Breathe fire',
                'required_level' => 10,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            37 => 
            array (
                'command_id' => 37,
                'text' => 'Hang',
                'required_level' => 12,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            38 => 
            array (
                'command_id' => 38,
                'text' => 'Torch',
                'required_level' => 6,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            39 => 
            array (
                'command_id' => 40,
                'text' => 'Swing',
                'required_level' => 13,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            40 => 
            array (
                'command_id' => 41,
                'text' => 'Roll',
                'required_level' => 10,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            41 => 
            array (
                'command_id' => 42,
                'text' => 'Ring of fire',
                'required_level' => 20,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            42 => 
            array (
                'command_id' => 43,
                'text' => 'Eat',
                'required_level' => 4,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            43 => 
            array (
                'command_id' => 44,
                'text' => 'Wag Tail',
                'required_level' => 4,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            44 => 
            array (
                'command_id' => 45,
                'text' => 'Count',
                'required_level' => 6,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
            45 => 
            array (
                'command_id' => 46,
                'text' => 'Breed',
                'required_level' => 20,
                'reward_xp' => 5,
                'cost_happyness' => 0,
                'cost_energy' => 0,
            ),
        ));
        
        
    }
}