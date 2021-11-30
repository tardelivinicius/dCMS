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
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 1,
                'reward_xp' => 5,
                'text' => 'Free',
            ),
            1 => 
            array (
                'command_id' => 1,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 1,
                'reward_xp' => 5,
                'text' => 'Sit',
            ),
            2 => 
            array (
                'command_id' => 2,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 2,
                'reward_xp' => 10,
                'text' => 'Down',
            ),
            3 => 
            array (
                'command_id' => 3,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 2,
                'reward_xp' => 10,
                'text' => 'Here',
            ),
            4 => 
            array (
                'command_id' => 4,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 2,
                'reward_xp' => 10,
                'text' => 'Beg',
            ),
            5 => 
            array (
                'command_id' => 5,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 3,
                'reward_xp' => 15,
                'text' => 'Play Dead',
            ),
            6 => 
            array (
                'command_id' => 6,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 4,
                'reward_xp' => 10,
                'text' => 'Stay',
            ),
            7 => 
            array (
                'command_id' => 7,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 5,
                'reward_xp' => 15,
                'text' => 'Follow',
            ),
            8 => 
            array (
                'command_id' => 8,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 6,
                'reward_xp' => 15,
                'text' => 'Stand',
            ),
            9 => 
            array (
                'command_id' => 9,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 6,
                'reward_xp' => 15,
                'text' => 'Jump',
            ),
            10 => 
            array (
                'command_id' => 10,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 7,
                'reward_xp' => 10,
                'text' => 'Speak',
            ),
            11 => 
            array (
                'command_id' => 11,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 8,
                'reward_xp' => 5,
                'text' => 'Play',
            ),
            12 => 
            array (
                'command_id' => 12,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 8,
                'reward_xp' => 5,
                'text' => 'Silent',
            ),
            13 => 
            array (
                'command_id' => 13,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 5,
                'reward_xp' => 5,
                'text' => 'Nest',
            ),
            14 => 
            array (
                'command_id' => 14,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 4,
                'reward_xp' => 5,
                'text' => 'Drink',
            ),
            15 => 
            array (
                'command_id' => 15,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 15,
                'reward_xp' => 15,
                'text' => 'Follow left',
            ),
            16 => 
            array (
                'command_id' => 16,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 15,
                'reward_xp' => 15,
                'text' => 'Follow right',
            ),
            17 => 
            array (
                'command_id' => 17,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 10,
                'reward_xp' => 5,
                'text' => 'Play football',
            ),
            18 => 
            array (
                'command_id' => 18,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 9,
                'reward_xp' => 5,
                'text' => 'Come here',
            ),
            19 => 
            array (
                'command_id' => 19,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 9,
                'reward_xp' => 5,
                'text' => 'Bounce',
            ),
            20 => 
            array (
                'command_id' => 20,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 11,
                'reward_xp' => 5,
                'text' => 'Flat',
            ),
            21 => 
            array (
                'command_id' => 21,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 12,
                'reward_xp' => 5,
                'text' => 'Dance',
            ),
            22 => 
            array (
                'command_id' => 22,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 10,
                'reward_xp' => 5,
                'text' => 'Spin',
            ),
            23 => 
            array (
                'command_id' => 23,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 12,
                'reward_xp' => 5,
                'text' => 'Switch TV',
            ),
            24 => 
            array (
                'command_id' => 24,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 17,
                'reward_xp' => 5,
                'text' => 'Move forward',
            ),
            25 => 
            array (
                'command_id' => 25,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 18,
                'reward_xp' => 5,
                'text' => 'Turn left',
            ),
            26 => 
            array (
                'command_id' => 26,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 18,
                'reward_xp' => 5,
                'text' => 'Turn right',
            ),
            27 => 
            array (
                'command_id' => 27,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 13,
                'reward_xp' => 5,
                'text' => 'Relax',
            ),
            28 => 
            array (
                'command_id' => 28,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 14,
                'reward_xp' => 5,
                'text' => 'Croak',
            ),
            29 => 
            array (
                'command_id' => 29,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 14,
                'reward_xp' => 5,
                'text' => 'Dip',
            ),
            30 => 
            array (
                'command_id' => 30,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 5,
                'reward_xp' => 5,
                'text' => 'Wave',
            ),
            31 => 
            array (
                'command_id' => 31,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 18,
                'reward_xp' => 5,
                'text' => 'Mambo!',
            ),
            32 => 
            array (
                'command_id' => 32,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 18,
                'reward_xp' => 5,
                'text' => 'High jump',
            ),
            33 => 
            array (
                'command_id' => 33,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 7,
                'reward_xp' => 5,
                'text' => 'Chicken dance',
            ),
            34 => 
            array (
                'command_id' => 34,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 9,
                'reward_xp' => 5,
                'text' => 'Triple jump',
            ),
            35 => 
            array (
                'command_id' => 35,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 8,
                'reward_xp' => 5,
                'text' => 'Spread wings',
            ),
            36 => 
            array (
                'command_id' => 36,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 10,
                'reward_xp' => 5,
                'text' => 'Breathe fire',
            ),
            37 => 
            array (
                'command_id' => 37,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 12,
                'reward_xp' => 5,
                'text' => 'Hang',
            ),
            38 => 
            array (
                'command_id' => 38,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 6,
                'reward_xp' => 5,
                'text' => 'Torch',
            ),
            39 => 
            array (
                'command_id' => 40,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 13,
                'reward_xp' => 5,
                'text' => 'Swing',
            ),
            40 => 
            array (
                'command_id' => 41,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 10,
                'reward_xp' => 5,
                'text' => 'Roll',
            ),
            41 => 
            array (
                'command_id' => 42,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 20,
                'reward_xp' => 5,
                'text' => 'Ring of fire',
            ),
            42 => 
            array (
                'command_id' => 43,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 4,
                'reward_xp' => 5,
                'text' => 'Eat',
            ),
            43 => 
            array (
                'command_id' => 44,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 4,
                'reward_xp' => 5,
                'text' => 'Wag Tail',
            ),
            44 => 
            array (
                'command_id' => 45,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 6,
                'reward_xp' => 5,
                'text' => 'Count',
            ),
            45 => 
            array (
                'command_id' => 46,
                'cost_energy' => 0,
                'cost_happyness' => 0,
                'required_level' => 20,
                'reward_xp' => 5,
                'text' => 'Breed',
            ),
        ));
        
        
    }
}