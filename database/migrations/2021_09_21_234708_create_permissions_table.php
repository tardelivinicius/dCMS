<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('rank_name', 25);
            $table->string('badge', 12)->default('');
            $table->integer('level')->default(1);
            $table->integer('room_effect')->default(0);
            $table->enum('log_commands', ['0', '1'])->default('0');
            $table->string('prefix', 5);
            $table->string('prefix_color', 7);
            $table->enum('cmd_about', ['0', '1'])->default('1');
            $table->enum('cmd_alert', ['0', '1'])->default('0');
            $table->enum('cmd_allow_trading', ['0', '1'])->default('0');
            $table->enum('cmd_badge', ['0', '1'])->default('0');
            $table->enum('cmd_ban', ['0', '1'])->default('0');
            $table->enum('cmd_blockalert', ['0', '1'])->default('0');
            $table->enum('cmd_bots', ['0', '1', '2'])->default('1');
            $table->enum('cmd_bundle', ['0', '1'])->default('0');
            $table->enum('cmd_calendar', ['0', '1'])->default('0');
            $table->enum('cmd_changename', ['0', '1'])->default('0');
            $table->enum('cmd_chatcolor', ['0', '1'])->default('0');
            $table->enum('cmd_commands', ['0', '1'])->default('1');
            $table->enum('cmd_connect_camera', ['0', '1'])->default('0');
            $table->enum('cmd_control', ['0', '1', '2'])->default('0');
            $table->enum('cmd_coords', ['0', '1', '2'])->default('2');
            $table->enum('cmd_credits', ['0', '1'])->default('0');
            $table->enum('cmd_subscription', ['0', '1'])->nullable()->default('0');
            $table->enum('cmd_danceall', ['0', '1', '2'])->default('0');
            $table->enum('cmd_diagonal', ['0', '1', '2'])->default('1');
            $table->enum('cmd_disconnect', ['0', '1'])->default('0');
            $table->enum('cmd_duckets', ['0', '1'])->default('0');
            $table->enum('cmd_ejectall', ['0', '1', '2'])->default('2');
            $table->enum('cmd_empty', ['0', '1'])->default('1');
            $table->enum('cmd_empty_bots', ['0', '1'])->default('1');
            $table->enum('cmd_empty_pets', ['0', '1'])->default('1');
            $table->enum('cmd_enable', ['0', '1', '2'])->default('1');
            $table->enum('cmd_event', ['0', '1'])->default('0');
            $table->enum('cmd_faceless', ['0', '1'])->default('0');
            $table->enum('cmd_fastwalk', ['0', '1', '2'])->default('0');
            $table->enum('cmd_filterword', ['0', '1'])->default('0');
            $table->enum('cmd_freeze', ['0', '1'])->default('0');
            $table->enum('cmd_freeze_bots', ['0', '1', '2'])->default('1');
            $table->enum('cmd_gift', ['0', '1'])->default('0');
            $table->enum('cmd_give_rank', ['0', '1'])->default('0');
            $table->enum('cmd_ha', ['0', '1'])->default('0');
            $table->enum('acc_can_stalk', ['0', '1'])->default('0');
            $table->enum('cmd_hal', ['0', '1'])->default('0');
            $table->enum('cmd_invisible', ['0', '1', '2'])->default('0');
            $table->enum('cmd_ip_ban', ['0', '1'])->default('0');
            $table->enum('cmd_machine_ban', ['0', '1'])->default('0');
            $table->enum('cmd_hand_item', ['0', '1', '2'])->default('1');
            $table->enum('cmd_happyhour', ['0', '1'])->default('0');
            $table->enum('cmd_hidewired', ['0', '1', '2'])->default('2');
            $table->enum('cmd_kickall', ['0', '1', '2'])->default('2');
            $table->enum('cmd_softkick', ['0', '1'])->default('0');
            $table->enum('cmd_massbadge', ['0', '1'])->default('0');
            $table->enum('cmd_roombadge', ['0', '1'])->default('0');
            $table->enum('cmd_masscredits', ['0', '1'])->default('0');
            $table->enum('cmd_massduckets', ['0', '1'])->default('0');
            $table->enum('cmd_massgift', ['0', '1'])->default('0');
            $table->enum('cmd_masspoints', ['0', '1'])->default('0');
            $table->enum('cmd_moonwalk', ['0', '1', '2'])->default('0');
            $table->enum('cmd_mimic', ['0', '1'])->default('0');
            $table->enum('cmd_multi', ['0', '1', '2'])->default('0');
            $table->enum('cmd_mute', ['0', '1'])->default('0');
            $table->enum('cmd_pet_info', ['0', '1', '2'])->default('2');
            $table->enum('cmd_pickall', ['0', '1'])->default('1');
            $table->enum('cmd_plugins', ['0', '1'])->default('1');
            $table->enum('cmd_points', ['0', '1'])->default('0');
            $table->enum('cmd_promote_offer', ['0', '1'])->default('0');
            $table->enum('cmd_pull', ['0', '1', '2'])->default('0');
            $table->enum('cmd_push', ['0', '1', '2'])->default('0');
            $table->enum('cmd_redeem', ['0', '1'])->default('0');
            $table->enum('cmd_reload_room', ['0', '1', '2'])->default('2');
            $table->enum('cmd_roomalert', ['0', '1', '2'])->default('0');
            $table->enum('cmd_roomcredits', ['0', '1'])->default('0');
            $table->enum('cmd_roomeffect', ['0', '1', '2'])->default('0');
            $table->enum('cmd_roomgift', ['0', '1'])->default('0');
            $table->enum('cmd_roomitem', ['0', '1', '2'])->default('0');
            $table->enum('cmd_roommute', ['0', '1'])->default('0');
            $table->enum('cmd_roompixels', ['0', '1'])->default('0');
            $table->enum('cmd_roompoints', ['0', '1'])->default('0');
            $table->enum('cmd_say', ['0', '1', '2'])->default('0');
            $table->enum('cmd_say_all', ['0', '1', '2'])->default('0');
            $table->enum('cmd_setmax', ['0', '1', '2'])->default('0');
            $table->enum('cmd_set_poll', ['0', '1'])->default('0');
            $table->enum('cmd_setpublic', ['0', '1'])->default('0');
            $table->enum('cmd_setspeed', ['0', '1', '2'])->default('1');
            $table->enum('cmd_shout', ['0', '1', '2'])->default('0');
            $table->enum('cmd_shout_all', ['0', '1', '2'])->default('0');
            $table->enum('cmd_shutdown', ['0', '1'])->default('0');
            $table->enum('cmd_sitdown', ['0', '1', '2'])->default('0');
            $table->enum('cmd_staffalert', ['0', '1'])->default('0');
            $table->enum('cmd_staffonline', ['0', '1'])->default('0');
            $table->enum('cmd_summon', ['0', '1'])->default('0');
            $table->enum('cmd_summonrank', ['0', '1'])->default('0');
            $table->enum('cmd_super_ban', ['0', '1'])->default('0');
            $table->enum('cmd_stalk', ['0', '1'])->default('0');
            $table->enum('cmd_superpull', ['0', '1', '2'])->default('0');
            $table->enum('cmd_take_badge', ['0', '1'])->default('0');
            $table->enum('cmd_talk', ['0', '1'])->default('0');
            $table->enum('cmd_teleport', ['0', '1', '2'])->default('0');
            $table->enum('cmd_trash', ['0', '1'])->default('0');
            $table->enum('cmd_transform', ['0', '1', '2'])->default('0');
            $table->enum('cmd_unban', ['0', '1'])->default('0');
            $table->enum('cmd_unload', ['0', '1', '2'])->default('0');
            $table->enum('cmd_unmute', ['0', '1'])->default('0');
            $table->enum('cmd_update_achievements', ['0', '1'])->default('0');
            $table->enum('cmd_update_bots', ['0', '1'])->default('0');
            $table->enum('cmd_update_catalogue', ['0', '1'])->default('0');
            $table->enum('cmd_update_config', ['0', '1'])->default('0');
            $table->enum('cmd_update_guildparts', ['0', '1'])->default('0');
            $table->enum('cmd_update_hotel_view', ['0', '1'])->default('0');
            $table->enum('cmd_update_items', ['0', '1'])->default('0');
            $table->enum('cmd_update_navigator', ['0', '1'])->default('0');
            $table->enum('cmd_update_permissions', ['0', '1'])->default('0');
            $table->enum('cmd_update_pet_data', ['0', '1'])->default('0');
            $table->enum('cmd_update_plugins', ['0', '1'])->default('0');
            $table->enum('cmd_update_polls', ['0', '1'])->default('0');
            $table->enum('cmd_update_texts', ['0', '1'])->default('0');
            $table->enum('cmd_update_wordfilter', ['0', '1'])->default('0');
            $table->enum('cmd_userinfo', ['0', '1'])->default('0');
            $table->enum('cmd_word_quiz', ['0', '1', '2'])->default('0');
            $table->enum('cmd_warp', ['0', '1'])->default('0');
            $table->enum('acc_anychatcolor', ['0', '1'])->default('0');
            $table->enum('acc_anyroomowner', ['0', '1'])->default('0');
            $table->enum('acc_empty_others', ['0', '1'])->default('0');
            $table->enum('acc_enable_others', ['0', '1'])->default('0');
            $table->enum('acc_see_whispers', ['0', '1'])->default('0');
            $table->enum('acc_see_tentchat', ['0', '1'])->default('0');
            $table->enum('acc_superwired', ['0', '1'])->default('0');
            $table->enum('acc_supporttool', ['0', '1'])->default('0');
            $table->enum('acc_unkickable', ['0', '1'])->default('0');
            $table->enum('acc_guildgate', ['0', '1'])->default('0');
            $table->enum('acc_moverotate', ['0', '1'])->default('0');
            $table->enum('acc_placefurni', ['0', '1'])->default('0');
            $table->enum('acc_unlimited_bots', ['0', '1', '2'])->default('0')->comment('Overrides the bot restriction to the inventory and room.');
            $table->enum('acc_unlimited_pets', ['0', '1', '2'])->default('0')->comment('Overrides the pet restriction to the inventory and room.');
            $table->enum('acc_hide_ip', ['0', '1'])->default('0');
            $table->enum('acc_hide_mail', ['0', '1'])->default('0');
            $table->enum('acc_not_mimiced', ['0', '1'])->default('0');
            $table->enum('acc_chat_no_flood', ['0', '1'])->default('0');
            $table->enum('acc_staff_chat', ['0', '1'])->default('0');
            $table->enum('acc_staff_pick', ['0', '1'])->default('0');
            $table->enum('acc_enteranyroom', ['0', '1'])->default('0');
            $table->enum('acc_fullrooms', ['0', '1'])->default('0');
            $table->enum('acc_infinite_credits', ['0', '1'])->default('0');
            $table->enum('acc_infinite_pixels', ['0', '1'])->default('0');
            $table->enum('acc_infinite_points', ['0', '1'])->default('0');
            $table->enum('acc_ambassador', ['0', '1'])->default('0');
            $table->enum('acc_debug', ['0', '1'])->default('0');
            $table->enum('acc_chat_no_limit', ['0', '1'])->default('0')->comment('People with this permission node are always heard and can see all chat in the room regarding of maximum hearing distance in the room settings (In game)');
            $table->enum('acc_chat_no_filter', ['0', '1'])->default('0');
            $table->enum('acc_nomute', ['0', '1'])->default('0');
            $table->enum('acc_guild_admin', ['0', '1'])->default('0');
            $table->enum('acc_catalog_ids', ['0', '1'])->default('0');
            $table->enum('acc_modtool_ticket_q', ['0', '1'])->default('0');
            $table->enum('acc_modtool_user_logs', ['0', '1'])->default('0');
            $table->enum('acc_modtool_user_alert', ['0', '1'])->default('0');
            $table->enum('acc_modtool_user_kick', ['0', '1'])->default('0');
            $table->enum('acc_modtool_user_ban', ['0', '1'])->default('0');
            $table->enum('acc_modtool_room_info', ['0', '1'])->default('0');
            $table->enum('acc_modtool_room_logs', ['0', '1'])->default('0');
            $table->enum('acc_trade_anywhere', ['0', '1'])->default('0');
            $table->enum('acc_update_notifications', ['0', '1'])->default('0');
            $table->enum('acc_helper_use_guide_tool', ['0', '1'])->default('0');
            $table->enum('acc_helper_give_guide_tours', ['0', '1'])->default('0');
            $table->enum('acc_helper_judge_chat_reviews', ['0', '1'])->default('0');
            $table->enum('acc_floorplan_editor', ['0', '1'])->default('0');
            $table->enum('acc_camera', ['0', '1'])->default('0');
            $table->enum('acc_ads_background', ['0', '1'])->default('0');
            $table->enum('cmd_wordquiz', ['0', '1', '2'])->default('0');
            $table->enum('acc_room_staff_tags', ['0', '1'])->default('0');
            $table->enum('acc_infinite_friends', ['0', '1'])->default('0');
            $table->enum('acc_mimic_unredeemed', ['0', '1'])->default('0');
            $table->enum('cmd_update_youtube_playlists', ['0', '1'])->default('0');
            $table->enum('cmd_add_youtube_playlist', ['0', '1'])->default('0');
            $table->integer('auto_credits_amount')->nullable()->default(0);
            $table->integer('auto_pixels_amount')->nullable()->default(0);
            $table->integer('auto_gotw_amount')->nullable()->default(0);
            $table->integer('auto_points_amount')->nullable()->default(0);
            $table->enum('acc_mention', ['0', '1', '2'])->default('0');
            $table->enum('cmd_setstate', ['0', '1', '2'])->default('1');
            $table->enum('cmd_buildheight', ['0', '1', '2'])->default('1');
            $table->enum('cmd_setrotation', ['0', '1', '2'])->default('1');
            $table->enum('cmd_sellroom', ['0', '1', '2'])->default('1');
            $table->enum('cmd_buyroom', ['0', '1', '2'])->default('1');
            $table->enum('cmd_pay', ['0', '1', '2'])->default('1');
            $table->enum('cmd_kill', ['0', '1', '2'])->default('1');
            $table->enum('cmd_hoverboard', ['0', '1', '2'])->default('1');
            $table->enum('cmd_kiss', ['0', '1', '2'])->default('1');
            $table->enum('cmd_hug', ['0', '1', '2'])->default('1');
            $table->enum('cmd_welcome', ['0', '1', '2'])->default('0');
            $table->enum('cmd_disable_effects', ['0', '1', '2'])->default('2');
            $table->enum('cmd_brb', ['0', '1', '2'])->default('1');
            $table->enum('cmd_nuke', ['0', '1', '2'])->default('1');
            $table->enum('cmd_slime', ['0', '1', '2'])->default('1');
            $table->enum('cmd_explain', ['0', '1', '2'])->default('1');
            $table->enum('cmd_closedice', ['0', '1', '2'])->default('1');
            $table->enum('acc_closedice_room', ['0', '1', '2'])->default('2');
            $table->enum('cmd_set', ['0', '1', '2'])->default('1');
            $table->enum('cmd_furnidata', ['0', '1'])->default('0');
            $table->enum('kiss_cmd', ['0', '1', '2'])->default('0');
            $table->enum('cmd_afk', ['0', '1', '2'])->default('1');
            $table->enum('cmd_tptome', ['0', '1', '2'])->default('0');
            $table->enum('cmd_superpush', ['0', '1', '2'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
