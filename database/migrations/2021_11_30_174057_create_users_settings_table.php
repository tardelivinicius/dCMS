<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0)->unique('user_id')->comment('WARNING: DONT HAVE YOUR CMS INSERT ANYTHING IN HERE. THE EMULATOR DOES THIS FOR YOU!');
            $table->integer('credits')->default(0);
            $table->integer('achievement_score')->default(0)->index('achievement_score');
            $table->integer('daily_respect_points')->default(3);
            $table->integer('daily_pet_respect_points')->default(3);
            $table->integer('respects_given')->default(0);
            $table->integer('respects_received')->default(0);
            $table->integer('guild_id')->default(0)->index('guild_id');
            $table->enum('can_change_name', ['0', '1'])->default('0');
            $table->enum('can_trade', ['0', '1'])->default('1')->index('can_trade');
            $table->enum('is_citizen', ['0', '1'])->default('0');
            $table->integer('citizen_level')->default(0);
            $table->integer('helper_level')->default(0);
            $table->integer('tradelock_amount')->default(0);
            $table->integer('cfh_send')->default(0)->comment('Amount of CFHs been send. Not include abusive.');
            $table->integer('cfh_abusive')->default(0)->comment('Amount of abusive CFHs have been send.');
            $table->integer('cfh_warnings')->default(0)->comment('Amount of warnings a user has received.');
            $table->integer('cfh_bans')->default(0)->comment('Amount of bans a user has received.');
            $table->enum('block_following', ['0', '1'])->default('0');
            $table->enum('block_friendrequests', ['0', '1'])->default('0');
            $table->enum('block_roominvites', ['0', '1'])->default('0');
            $table->integer('volume_system')->default(100);
            $table->integer('volume_furni')->default(100);
            $table->integer('volume_trax')->default(100);
            $table->enum('old_chat', ['0', '1'])->default('0');
            $table->enum('block_camera_follow', ['0', '1'])->default('0');
            $table->integer('chat_color')->default(0);
            $table->integer('home_room')->default(0);
            $table->integer('online_time')->default(0)->index('online_time')->comment('Total online time in seconds.');
            $table->string('tags')->default('Arcturus Emulator;');
            $table->integer('club_expire_timestamp')->default(0);
            $table->integer('login_streak')->default(0);
            $table->integer('rent_space_id')->default(0);
            $table->integer('rent_space_endtime')->default(0);
            $table->integer('hof_points')->default(0);
            $table->enum('block_alerts', ['0', '1'])->default('0');
            $table->integer('talent_track_citizenship_level')->default(-1);
            $table->integer('talent_track_helpers_level')->default(-1);
            $table->enum('ignore_bots', ['0', '1'])->default('0');
            $table->enum('ignore_pets', ['0', '1'])->default('0');
            $table->enum('nux', ['0', '1'])->default('0');
            $table->integer('mute_end_timestamp')->default(0);
            $table->enum('allow_name_change', ['0', '1'])->default('0');
            $table->enum('perk_trade', ['0', '1'])->default('0')->comment('Defines if a player has obtained the perk TRADE. When hotel.trading.requires.perk is set to 1, this perk is required in order to trade. Perk is obtained from the talen track.');
            $table->integer('forums_post_count')->nullable()->default(0);
            $table->integer('ui_flags')->default(1);
            $table->boolean('has_gotten_default_saved_searches')->default(false);
            $table->integer('hc_gifts_claimed')->nullable()->default(0);
            $table->integer('last_hc_payday')->nullable()->default(0);
            $table->integer('max_rooms')->nullable()->default(50);
            $table->integer('max_friends')->nullable()->default(300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_settings');
    }
}
