<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogPagesBcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_pages_bc', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_id')->default(-1);
            $table->string('caption', 128);
            $table->enum('page_layout', ['default_3x3', 'club_buy', 'club_gift', 'frontpage', 'spaces', 'recycler', 'recycler_info', 'recycler_prizes', 'trophies', 'plasto', 'marketplace', 'marketplace_own_items', 'spaces_new', 'soundmachine', 'guilds', 'guild_furni', 'info_duckets', 'info_rentables', 'info_pets', 'roomads', 'single_bundle', 'sold_ltd_items', 'badge_display', 'bots', 'pets', 'pets2', 'pets3', 'productpage1', 'room_bundle', 'recent_purchases', 'default_3x3_color_grouping', 'guild_forum', 'vip_buy', 'info_loyalty', 'loyalty_vip_buy', 'collectibles', 'petcustomization', 'frontpage_featured'])->default('default_3x3');
            $table->integer('icon_color')->default(1);
            $table->integer('icon_image')->default(1);
            $table->integer('order_num')->default(1);
            $table->enum('visible', ['0', '1'])->default('1');
            $table->enum('enabled', ['0', '1'])->default('1');
            $table->string('page_headline', 1024)->default('');
            $table->string('page_teaser', 64)->default('');
            $table->string('page_special', 2048)->nullable()->default('')->comment('Gold Bubble: catalog_special_txtbg1 // Speech Bubble: catalog_special_txtbg2 // Place normal text in page_text_teaser');
            $table->text('page_text1')->nullable();
            $table->text('page_text2')->nullable();
            $table->text('page_text_details')->nullable();
            $table->text('page_text_teaser')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_pages_bc');
    }
}
