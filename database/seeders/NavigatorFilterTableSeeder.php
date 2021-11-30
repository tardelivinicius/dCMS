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
                'compare' => 'equals_ignore_case',
                'database_query' => 'SELECT * FROM rooms WHERE owner_name LIKE ?',
                'field' => 'getOwnerName',
                'key' => 'owner',
            ),
            1 => 
            array (
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.*, CONCAT_WS(rooms.owner_name, rooms.name, rooms.description, rooms.tags, guilds.name, guilds.description) as whole FROM rooms LEFT JOIN guilds ON rooms.guild_id = guilds.id HAVING whole LIKE ? ',
                'field' => 'filterAnything',
                'key' => 'anything',
            ),
            2 => 
            array (
                'compare' => 'contains',
                'database_query' => 'SELECT * FROM rooms WHERE name COLLATE UTF8_GENERAL_CI LIKE ? ',
                'field' => 'getName',
                'key' => 'roomname',
            ),
            3 => 
            array (
                'compare' => 'equals',
            'database_query' => 'SELECT * FROM rooms WHERE tags LIKE CONCAT(?, ";%") ',
                'field' => 'getTags',
                'key' => 'tag',
            ),
            4 => 
            array (
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.* FROM guilds INNER JOIN rooms ON guilds.room_id = rooms.id WHERE CONCAT(guilds.name, guilds.description) LIKE ?',
                'field' => 'getGuildName',
                'key' => 'group',
            ),
            5 => 
            array (
                'compare' => 'contains',
                'database_query' => 'SELECT * FROM rooms WHERE description LIKE ?',
                'field' => 'getDescription',
                'key' => 'desc',
            ),
            6 => 
            array (
                'compare' => 'contains',
            'database_query' => 'SELECT rooms.* FROM rooms INNER JOIN room_promotions ON rooms.id = room_promotions.id WHERE room_promotions.end_timestamp >= UNIX_TIMESTAMP() AND CONCAT (room_promotions.title, room_promotions.description) LIKE ?',
                'field' => 'getPromotionDesc',
                'key' => 'promo',
            ),
        ));
        
        
    }
}