<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavigatorFilterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navigator_filter')->delete();
        
        \DB::table('navigator_filter')->insert(array (
            0 => 
            array (
                'key' => 'owner',
                'field' => 'getOwnerName',
                'compare' => 'equals_ignore_case',
                'database_query' => 'SELECT * FROM rooms WHERE owner_name LIKE ?',
            ),
            1 => 
            array (
                'key' => 'anything',
                'field' => 'filterAnything',
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.*, CONCAT_WS(rooms.owner_name, rooms.name, rooms.description, rooms.tags, guilds.name, guilds.description) as whole FROM rooms LEFT JOIN guilds ON rooms.guild_id = guilds.id HAVING whole LIKE ? ',
            ),
            2 => 
            array (
                'key' => 'roomname',
                'field' => 'getName',
                'compare' => 'contains',
                'database_query' => 'SELECT * FROM rooms WHERE name COLLATE UTF8_GENERAL_CI LIKE ? ',
            ),
            3 => 
            array (
                'key' => 'tag',
                'field' => 'getTags',
                'compare' => 'equals',
            'database_query' => 'SELECT * FROM rooms WHERE tags LIKE CONCAT(?, ";%") ',
            ),
            4 => 
            array (
                'key' => 'group',
                'field' => 'getGuildName',
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.* FROM guilds INNER JOIN rooms ON guilds.room_id = rooms.id WHERE CONCAT(guilds.name, guilds.description) LIKE ?',
            ),
            5 => 
            array (
                'key' => 'desc',
                'field' => 'getDescription',
                'compare' => 'contains',
                'database_query' => 'SELECT * FROM rooms WHERE description LIKE ?',
            ),
            6 => 
            array (
                'key' => 'promo',
                'field' => 'getPromotionDesc',
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.* FROM rooms INNER JOIN room_promotions ON rooms.id = room_promotions.id WHERE room_promotions.end_timestamp >= UNIX_TIMESTAMP() AND CONCAT (room_promotions.title, room_promotions.description) LIKE ?',
            ),
        ));
        
        
    }
}