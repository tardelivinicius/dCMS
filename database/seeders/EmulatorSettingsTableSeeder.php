<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmulatorSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('emulator_settings')->delete();
        
        \DB::table('emulator_settings')->insert(array (
            0 => 
            array (
                'key' => 'hotel.home.room',
                'value' => '0',
            ),
            1 => 
            array (
                'key' => 'hotel.welcome.alert.enabled',
                'value' => '0',
            ),
            2 => 
            array (
                'key' => 'hotel.welcome.alert.message',
                'value' => 'Welcome to Habbo Hotel %user%!',
            ),
            3 => 
            array (
                'key' => 'hotel.max.duckets',
                'value' => '9000000',
            ),
            4 => 
            array (
                'key' => 'hotel.bots.max.room',
                'value' => '10',
            ),
            5 => 
            array (
                'key' => 'hotel.bots.max.inventory',
                'value' => '25',
            ),
            6 => 
            array (
                'key' => 'hotel.navigator.owner',
                'value' => 'HabboHotel',
            ),
            7 => 
            array (
                'key' => 'hotel.shop.discount.modifier',
                'value' => '6',
            ),
            8 => 
            array (
                'key' => 'hotel.log.room.enter',
                'value' => '1',
            ),
            9 => 
            array (
                'key' => 'hotel.log.chat',
                'value' => '1',
            ),
            10 => 
            array (
                'key' => 'hotel.teleport.locked.allowed',
                'value' => '1',
            ),
            11 => 
            array (
                'key' => 'runtime.threads',
                'value' => '8',
            ),
            12 => 
            array (
                'key' => 'io.bossgroup.threads',
                'value' => '1',
            ),
            13 => 
            array (
                'key' => 'io.workergroup.threads',
                'value' => '5',
            ),
            14 => 
            array (
                'key' => 'hotel.log.chat.private',
                'value' => '1',
            ),
            15 => 
            array (
                'key' => 'hotel.marketplace.enabled',
                'value' => '1',
            ),
            16 => 
            array (
                'key' => 'hotel.ecotron.enabled',
                'value' => '1',
            ),
            17 => 
            array (
                'key' => 'hotel.ecotron.rarity.chance.5',
                'value' => '2000',
            ),
            18 => 
            array (
                'key' => 'hotel.ecotron.rarity.chance.4',
                'value' => '200',
            ),
            19 => 
            array (
                'key' => 'hotel.ecotron.rarity.chance.3',
                'value' => '40',
            ),
            20 => 
            array (
                'key' => 'hotel.ecotron.rarity.chance.2',
                'value' => '4',
            ),
            21 => 
            array (
                'key' => 'hotel.ecotron.rarity.chance.1',
                'value' => '1',
            ),
            22 => 
            array (
                'key' => 'hotel.pets.name.length.min',
                'value' => '3',
            ),
            23 => 
            array (
                'key' => 'hotel.pets.name.length.max',
                'value' => '15',
            ),
            24 => 
            array (
                'key' => 'hotel.pets.max.room',
                'value' => '10',
            ),
            25 => 
            array (
                'key' => 'hotel.pets.max.inventory',
                'value' => '25',
            ),
            26 => 
            array (
                'key' => 'hotel.freeze.points.freeze',
                'value' => '10',
            ),
            27 => 
            array (
                'key' => 'hotel.freeze.points.block',
                'value' => '1',
            ),
            28 => 
            array (
                'key' => 'hotel.freeze.points.effect',
                'value' => '3',
            ),
            29 => 
            array (
                'key' => 'hotel.freeze.powerup.chance',
                'value' => '33',
            ),
            30 => 
            array (
                'key' => 'hotel.freeze.powerup.max.snowballs',
                'value' => '5',
            ),
            31 => 
            array (
                'key' => 'hotel.freeze.powerup.max.lives',
                'value' => '3',
            ),
            32 => 
            array (
                'key' => 'hotel.freeze.onfreeze.loose.snowballs',
                'value' => '5',
            ),
            33 => 
            array (
                'key' => 'hotel.freeze.onfreeze.loose.explosionboost',
                'value' => '3',
            ),
            34 => 
            array (
                'key' => 'hotel.freeze.onfreeze.time.frozen',
                'value' => '5',
            ),
            35 => 
            array (
                'key' => 'hotel.freeze.powerup.protection.time',
                'value' => '10',
            ),
            36 => 
            array (
                'key' => 'hotel.gifts.special.price',
                'value' => '10',
            ),
            37 => 
            array (
                'key' => 'hotel.freeze.powerup.protection.stack',
                'value' => '1',
            ),
            38 => 
            array (
                'key' => 'callback.post.errors',
                'value' => '1',
            ),
            39 => 
            array (
                'key' => 'callback.post.statistics',
                'value' => '1',
            ),
            40 => 
            array (
                'key' => 'callback.get.version',
                'value' => '1',
            ),
            41 => 
            array (
                'key' => 'hotel.banzai.points.tile.steal',
                'value' => '0',
            ),
            42 => 
            array (
                'key' => 'hotel.banzai.points.tile.fill',
                'value' => '0',
            ),
            43 => 
            array (
                'key' => 'hotel.banzai.points.tile.lock',
                'value' => '1',
            ),
            44 => 
            array (
                'key' => 'hotel.friendcategory',
                'value' => '0',
            ),
            45 => 
            array (
                'key' => 'hotel.roomuser.idle.cycles',
                'value' => '300',
            ),
            46 => 
            array (
                'key' => 'hotel.wordfilter.enabled',
                'value' => '1',
            ),
            47 => 
            array (
                'key' => 'hotel.wordfilter.rooms',
                'value' => '1',
            ),
            48 => 
            array (
                'key' => 'hotel.wordfilter.messenger',
                'value' => '1',
            ),
            49 => 
            array (
                'key' => 'notify.staff.chat.auto.report',
                'value' => '1',
            ),
            50 => 
            array (
                'key' => 'hotel.wordfilter.normalise',
                'value' => '1',
            ),
            51 => 
            array (
                'key' => 'hotel.roomuser.idle.not_dancing.ignore.wired_idle',
                'value' => '0',
            ),
            52 => 
            array (
                'key' => 'pyramids.max.delay',
                'value' => '18',
            ),
            53 => 
            array (
                'key' => 'guardians.minimum.votes',
                'value' => '5',
            ),
            54 => 
            array (
                'key' => 'guardians.accept.timer',
                'value' => '90',
            ),
            55 => 
            array (
                'key' => 'guardians.maximum.resends',
                'value' => '2',
            ),
            56 => 
            array (
                'key' => 'guardians.maximum.guardians.total',
                'value' => '10',
            ),
            57 => 
            array (
                'key' => 'guardians.reporting.cooldown',
                'value' => '900',
            ),
            58 => 
            array (
                'key' => 'wildwest_stocks.message.count',
                'value' => '18',
            ),
            59 => 
            array (
                'key' => 'furniture.talking.range',
                'value' => '2',
            ),
            60 => 
            array (
                'key' => 'commands.cmd_chatcolor.banned_numbers',
                'value' => '23;33;34',
            ),
            61 => 
            array (
                'key' => 'seasonal.primary.type',
                'value' => '5',
            ),
            62 => 
            array (
                'key' => 'seasonal.types',
                'value' => '0;1;2;3;4;5;101;102;103;104;105',
            ),
            63 => 
            array (
                'key' => 'catalog.ltd.page.soldout',
                'value' => '761',
            ),
            64 => 
            array (
                'key' => 'bots.visitor.dateformat',
                'value' => 'yyyy-mm-dd HH:mm',
            ),
            65 => 
            array (
                'key' => 'wired.highscores.displaycount',
                'value' => '25',
            ),
            66 => 
            array (
                'key' => 'hotelview.promotional.points.type',
                'value' => '5',
            ),
            67 => 
            array (
                'key' => 'hotelview.promotional.reward.name',
                'value' => 'bonusbag20_2',
            ),
            68 => 
            array (
                'key' => 'hotelview.promotional.reward.id',
                'value' => '11043',
            ),
            69 => 
            array (
                'key' => 'hotelview.promotional.points',
                'value' => '100',
            ),
            70 => 
            array (
                'key' => 'commands.cmd_staffonline.min_rank',
                'value' => '2',
            ),
            71 => 
            array (
                'key' => 'bundle.bots.enabled',
                'value' => '1',
            ),
            72 => 
            array (
                'key' => 'bundle.pets.enabled',
                'value' => '1',
            ),
            73 => 
            array (
                'key' => 'hotel.trading.enabled',
                'value' => '1',
            ),
            74 => 
            array (
                'key' => 'wired.effect.teleport.delay',
                'value' => '100',
            ),
            75 => 
            array (
                'key' => 'hotel.roomuser.idle.cycles.kick',
                'value' => '900',
            ),
            76 => 
            array (
                'key' => 'imager.location.badgeparts',
                'value' => '/var/www/testhotel/Cosmic/public/usercontent/badgeparts',
            ),
            77 => 
            array (
                'key' => 'imager.location.output.badges',
                'value' => '/var/www/testhotel/Cosmic/public/usercontent/badgeparts/generated/',
            ),
            78 => 
            array (
                'key' => 'imager.internal.enabled',
                'value' => '1',
            ),
            79 => 
            array (
                'key' => 'db.min.partition.size',
                'value' => '1',
            ),
            80 => 
            array (
                'key' => 'db.max.partition.size',
                'value' => '2',
            ),
            81 => 
            array (
                'key' => 'hotel.auto.pixels.enabled',
                'value' => '1',
            ),
            82 => 
            array (
                'key' => 'hotel.auto.pixels.amount',
                'value' => '100',
            ),
            83 => 
            array (
                'key' => 'hotel.auto.pixels.interval',
                'value' => '600',
            ),
            84 => 
            array (
                'key' => 'hotel.auto.pixels.ignore.idled',
                'value' => '1',
            ),
            85 => 
            array (
                'key' => 'hotel.auto.pixels.ignore.hotelview',
                'value' => '1',
            ),
            86 => 
            array (
                'key' => 'hotel.auto.points.enabled',
                'value' => '1',
            ),
            87 => 
            array (
                'key' => 'hotel.auto.points.amount',
                'value' => '5',
            ),
            88 => 
            array (
                'key' => 'hotel.auto.points.interval',
                'value' => '600',
            ),
            89 => 
            array (
                'key' => 'hotel.auto.points.ignore.idled',
                'value' => '0',
            ),
            90 => 
            array (
                'key' => 'hotel.auto.points.ignore.hotelview',
                'value' => '0',
            ),
            91 => 
            array (
                'key' => 'hotel.auto.credits.enabled',
                'value' => '1',
            ),
            92 => 
            array (
                'key' => 'hotel.auto.credits.amount',
                'value' => '100',
            ),
            93 => 
            array (
                'key' => 'hotel.auto.credits.interval',
                'value' => '600',
            ),
            94 => 
            array (
                'key' => 'hotel.auto.credits.ignore.idled',
                'value' => '0',
            ),
            95 => 
            array (
                'key' => 'hotel.auto.credits.ignore.hotelview',
                'value' => '1',
            ),
            96 => 
            array (
                'key' => 'hotel.max.bots.room',
                'value' => '10',
            ),
            97 => 
            array (
                'key' => 'hotel.messenger.offline.messaging.enabled',
                'value' => '1',
            ),
            98 => 
            array (
                'key' => 'hotel.catalog.discounts.amount',
                'value' => '6',
            ),
            99 => 
            array (
                'key' => 'hotel.rooms.auto.idle',
                'value' => '1',
            ),
            100 => 
            array (
                'key' => 'hotel.room.enter.logs',
                'value' => '1',
            ),
            101 => 
            array (
                'key' => 'debug.mode',
                'value' => '1',
            ),
            102 => 
            array (
                'key' => 'debug.show.packets',
                'value' => '0',
            ),
            103 => 
            array (
                'key' => 'debug.show.packets.undefined',
                'value' => '0',
            ),
            104 => 
            array (
                'key' => 'debug.show.sql.exception',
                'value' => '1',
            ),
            105 => 
            array (
                'key' => 'logging.packets',
                'value' => '0',
            ),
            106 => 
            array (
                'key' => 'logging.packets.undefined',
                'value' => '0',
            ),
            107 => 
            array (
                'key' => 'logging.errors.packets',
                'value' => '0',
            ),
            108 => 
            array (
                'key' => 'logging.errors.sql',
                'value' => '1',
            ),
            109 => 
            array (
                'key' => 'logging.errors.runtime',
                'value' => '1',
            ),
            110 => 
            array (
                'key' => 'logging.debug',
                'value' => '0',
            ),
            111 => 
            array (
                'key' => 'save.room.chats',
                'value' => '1',
            ),
            112 => 
            array (
                'key' => 'save.private.chats',
                'value' => '1',
            ),
            113 => 
            array (
                'key' => 'marketplace.enabled',
                'value' => '1',
            ),
            114 => 
            array (
                'key' => 'hotel.navigator.camera',
                'value' => '1',
            ),
            115 => 
            array (
                'key' => 'camera.enabled',
                'value' => '1',
            ),
            116 => 
            array (
                'key' => 'camera.price.credits',
                'value' => '2',
            ),
            117 => 
            array (
                'key' => 'camera.price.points',
                'value' => '0',
            ),
            118 => 
            array (
                'key' => 'camera.price.points.publish',
                'value' => '10',
            ),
            119 => 
            array (
                'key' => 'camera.item_id',
                'value' => '45970',
            ),
            120 => 
            array (
                'key' => 'camera.extradata',
                'value' => '{"t":%timestamp%, "u":"%id%", "s":%room_id%, "w":"%url%"}',
            ),
            121 => 
            array (
                'key' => 'hotel.navigator.search.maxresults',
                'value' => '35',
            ),
            122 => 
            array (
                'key' => 'hotel.rooms.max.favorite',
                'value' => '30',
            ),
            123 => 
            array (
                'key' => 'catalog.guild.price',
                'value' => '10',
            ),
            124 => 
            array (
                'key' => 'hotel.catalog.recycler.enabled',
                'value' => '1',
            ),
            125 => 
            array (
                'key' => 'debug.show.errors',
                'value' => '1',
            ),
            126 => 
            array (
                'key' => 'hotel.wired.furni.selection.count',
                'value' => '5',
            ),
            127 => 
            array (
                'key' => 'pathfinder.step.maximum.height',
                'value' => '1.1',
            ),
            128 => 
            array (
                'key' => 'pathfinder.step.allow.falling',
                'value' => '1',
            ),
            129 => 
            array (
                'key' => 'hotel.rooms.handitem.time',
                'value' => '100',
            ),
            130 => 
            array (
                'key' => 'imager.url.youtube',
                'value' => 'imager.php?url=http://img.youtube.com/vi/%video%/default.jpg',
            ),
            131 => 
            array (
                'key' => 'hotel.navigator.popular.amount',
                'value' => '35',
            ),
            132 => 
            array (
                'key' => 'hotel.navigator.popular.listtype',
                'value' => '1',
            ),
            133 => 
            array (
                'key' => 'hotel.inventory.max.items',
                'value' => '7500',
            ),
            134 => 
            array (
                'key' => 'hotel.bot.chat.minimum.interval',
                'value' => '5',
            ),
            135 => 
            array (
                'key' => 'hotel.daily.respect',
                'value' => '3',
            ),
            136 => 
            array (
                'key' => 'hotel.daily.respect.pets',
                'value' => '3',
            ),
            137 => 
            array (
                'key' => 'hotel.refill.daily',
                'value' => '86400',
            ),
            138 => 
            array (
                'key' => 'monsterplant.seed.item_id',
                'value' => '4582',
            ),
            139 => 
            array (
                'key' => 'monsterplant.seed_rare.item_id',
                'value' => '4604',
            ),
            140 => 
            array (
                'key' => 'hotel.room.public.doortile.kick',
                'value' => '0',
            ),
            141 => 
            array (
                'key' => 'info.shown',
                'value' => '1',
            ),
            142 => 
            array (
                'key' => 'camera.publish.delay',
                'value' => '180',
            ),
            143 => 
            array (
                'key' => 'hotel.log.trades',
                'value' => '1',
            ),
            144 => 
            array (
                'key' => 'hotel.bot.butler.servedistance',
                'value' => '5',
            ),
            145 => 
            array (
                'key' => 'hotelview.halloffame.query',
                'value' => 'SELECT users.look, users.username, users.id, users_settings.hof_points FROM users_settings INNER JOIN users ON users_settings.user_id = users.id WHERE hof_points > 0 ORDER BY hof_points DESC, users.id ASC LIMIT 10',
            ),
            146 => 
            array (
                'key' => 'hotel.name',
                'value' => 'Habbo Hotel',
            ),
            147 => 
            array (
                'key' => 'hotel.player.name',
                'value' => 'Habbo',
            ),
            148 => 
            array (
                'key' => 'catalog.page.vipgifts',
                'value' => '72',
            ),
            149 => 
            array (
                'key' => 'hotel.rollers.speed.maximum',
                'value' => '100',
            ),
            150 => 
            array (
                'key' => 'seasonal.currency.ducket',
                'value' => '0',
            ),
            151 => 
            array (
                'key' => 'seasonal.currency.pixel',
                'value' => '0',
            ),
            152 => 
            array (
                'key' => 'seasonal.currency.diamond',
                'value' => '5',
            ),
            153 => 
            array (
                'key' => 'seasonal.currency.shell',
                'value' => '4',
            ),
            154 => 
            array (
                'key' => 'seasonal.currency.names',
                'value' => 'ducket;pixel;shell;diamond',
            ),
            155 => 
            array (
                'key' => 'hotel.room.tags.staff',
                'value' => 'staff;official;habbo',
            ),
            156 => 
            array (
                'key' => 'hotel.navigator.popular.category.maxresults',
                'value' => '10',
            ),
            157 => 
            array (
                'key' => 'debug.show.users',
                'value' => '1',
            ),
            158 => 
            array (
                'key' => 'room.chat.delay',
                'value' => '0',
            ),
            159 => 
            array (
                'key' => 'room.chat.prefix.format',
                'value' => '[<font color="%color%">%prefix%</font>] ',
            ),
            160 => 
            array (
                'key' => 'camera.use.https',
                'value' => '1',
            ),
            161 => 
            array (
                'key' => 'basejump.url',
                'value' => 'http://localhost/game/BaseJump.swf',
            ),
            162 => 
            array (
                'key' => 'basejump.assets.url',
                'value' => 'http://localhost/gamecenter/gamecenter_basejump/BasicAssets.swf',
            ),
            163 => 
            array (
                'key' => 'hotel.marketplace.currency',
                'value' => '0',
            ),
            164 => 
            array (
                'key' => 'networking.tcp.proxy',
                'value' => '0',
            ),
            165 => 
            array (
                'key' => 'hotel.calendar.enabled',
                'value' => '0',
            ),
            166 => 
            array (
                'key' => 'images.gamecenter.snowwar',
                'value' => 'c_images/gamecenter_snowwar/',
            ),
            167 => 
            array (
                'key' => 'images.gamecenter.basejump',
                'value' => 'c_images/gamecenter_basejump/',
            ),
            168 => 
            array (
                'key' => 'hotel.purchase.ltd.limit.daily.total',
                'value' => '10',
            ),
            169 => 
            array (
                'key' => 'hotel.purchase.ltd.limit.daily.item',
                'value' => '3',
            ),
            170 => 
            array (
                'key' => 'hotel.catalog.ltd.limit.enabled',
                'value' => '1',
            ),
            171 => 
            array (
                'key' => 'hotel.welcome.alert.oldstyle',
                'value' => '0',
            ),
            172 => 
            array (
                'key' => 'hotel.welcome.alert.delay',
                'value' => '10000',
            ),
            173 => 
            array (
                'key' => 'hotel.calendar.starttimestamp',
                'value' => '1593561600',
            ),
            174 => 
            array (
                'key' => 'hotel.room.nooblobby',
                'value' => '3',
            ),
            175 => 
            array (
                'key' => 'hotel.floorplan.max.widthlength',
                'value' => '64',
            ),
            176 => 
            array (
                'key' => 'hotel.floorplan.max.totalarea',
                'value' => '4096',
            ),
            177 => 
            array (
                'key' => 'hotel.bot.max.chatlength',
                'value' => '120',
            ),
            178 => 
            array (
                'key' => 'hotel.bot.max.namelength',
                'value' => '15',
            ),
            179 => 
            array (
                'key' => 'hotel.bot.max.chatdelay',
                'value' => '604800',
            ),
            180 => 
            array (
                'key' => 'hotel.chat.max.length',
                'value' => '100',
            ),
            181 => 
            array (
                'key' => 'hotel.view.ltdcountdown.enabled',
                'value' => '1',
            ),
            182 => 
            array (
                'key' => 'hotel.view.ltdcountdown.timestamp',
                'value' => '1519496132',
            ),
            183 => 
            array (
                'key' => 'hotel.view.ltdcountdown.itemid',
                'value' => '10388',
            ),
            184 => 
            array (
                'key' => 'hotel.view.ltdcountdown.pageid',
                'value' => '13',
            ),
            185 => 
            array (
                'key' => 'hotel.view.ltdcountdown.itemname',
                'value' => 'trophy_netsafety_0',
            ),
            186 => 
            array (
                'key' => 'io.client.multithreaded.handler',
                'value' => '1',
            ),
            187 => 
            array (
                'key' => 'hotel.room.stickypole.prefix',
                'value' => '%timestamp%, %username%:\\r',
            ),
            188 => 
            array (
                'key' => 'hotel.trading.requires.perk',
                'value' => '0',
            ),
            189 => 
            array (
                'key' => 'hotel.targetoffer.id',
                'value' => '1',
            ),
            190 => 
            array (
                'key' => 'hotel.wordfilter.replacement',
                'value' => 'bobba',
            ),
            191 => 
            array (
                'key' => 'debug.show.headers',
                'value' => '0',
            ),
            192 => 
            array (
                'key' => 'hotel.catalog.purchase.cooldown',
                'value' => '1',
            ),
            193 => 
            array (
                'key' => 'hotel.catalog.items.display.ordernum',
                'value' => '1',
            ),
            194 => 
            array (
                'key' => 'hotel.talenttrack.enabled',
                'value' => '1',
            ),
            195 => 
            array (
                'key' => 'hotel.navigator.sort.ordernum',
                'value' => '1',
            ),
            196 => 
            array (
                'key' => 'hotel.wordfilter.automute',
                'value' => '1',
            ),
            197 => 
            array (
                'key' => 'hotel.furni.gym.achievement.olympics_c16_trampoline',
                'value' => 'Trampolinist',
            ),
            198 => 
            array (
                'key' => 'hotel.furni.gym.achievement.olympics_c16_crosstrainer',
                'value' => 'CrossTrainer',
            ),
            199 => 
            array (
                'key' => 'hotel.furni.gym.achievement.olympics_c16_treadmill',
                'value' => 'Jogger',
            ),
            200 => 
            array (
                'key' => 'hotel.furni.gym.forcerot.olympics_c16_trampoline',
                'value' => '0',
            ),
            201 => 
            array (
                'key' => 'hotel.furni.gym.forcerot.olympics_c16_crosstrainer',
                'value' => '1',
            ),
            202 => 
            array (
                'key' => 'hotel.furni.gym.forcerot.olympics_c16_treadmill',
                'value' => '1',
            ),
            203 => 
            array (
                'key' => 'hotel.messenger.search.maxresults',
                'value' => '50',
            ),
            204 => 
            array (
                'key' => 'hotel.alert.oldstyle',
                'value' => '0',
            ),
            205 => 
            array (
                'key' => 'hotel.navigator.staffpicks.categoryid',
                'value' => '1',
            ),
            206 => 
            array (
                'key' => 'hotel.room.rollers.norules',
                'value' => '0',
            ),
            207 => 
            array (
                'key' => 'postit.charlimit',
                'value' => '366',
            ),
            208 => 
            array (
                'key' => 'hotel.rooms.deco_hosting',
                'value' => '1',
            ),
            209 => 
            array (
                'key' => 'hotel.navigator.populartab.publics',
                'value' => '0',
            ),
            210 => 
            array (
                'key' => 'hotel.bot.butler.commanddistance',
                'value' => '5',
            ),
            211 => 
            array (
                'key' => 'catalog.guild.hc_required',
                'value' => '1',
            ),
            212 => 
            array (
                'key' => 'catalog.ltd.random',
                'value' => '1',
            ),
            213 => 
            array (
                'key' => 'commands.plugins.oldstyle',
                'value' => '0',
            ),
            214 => 
            array (
                'key' => 'scripter.modtool.tickets',
                'value' => '1',
            ),
            215 => 
            array (
                'key' => 'invisible.prevent.chat',
                'value' => '0',
            ),
            216 => 
            array (
                'key' => 'discount.max.allowed.items',
                'value' => '100',
            ),
            217 => 
            array (
                'key' => 'discount.batch.size',
                'value' => '6',
            ),
            218 => 
            array (
                'key' => 'discount.batch.free.items',
                'value' => '1',
            ),
            219 => 
            array (
                'key' => 'discount.bonus.min.discounts',
                'value' => '1',
            ),
            220 => 
            array (
                'key' => 'discount.additional.thresholds',
                'value' => '40;99',
            ),
            221 => 
            array (
                'key' => 'team.wired.update.rc-1',
                'value' => 'DO NOT REMOVE THIS SETTING!',
            ),
            222 => 
            array (
                'key' => 'hotel.room.floorplan.check.enabled',
                'value' => '1',
            ),
            223 => 
            array (
                'key' => 'hotel.auto.gotwpoints.enabled',
                'value' => '0',
            ),
            224 => 
            array (
                'key' => 'hotel.auto.gotwpoints.interval',
                'value' => '600',
            ),
            225 => 
            array (
                'key' => 'hotel.auto.gotwpoints.ignore.idled',
                'value' => '1',
            ),
            226 => 
            array (
                'key' => 'hotel.auto.gotwpoints.ignore.hotelview',
                'value' => '1',
            ),
            227 => 
            array (
                'key' => 'hotel.auto.gotwpoints.type',
                'value' => '4',
            ),
            228 => 
            array (
                'key' => 'hotel.auto.gotwpoints.name',
                'value' => 'shell',
            ),
            229 => 
            array (
                'key' => 'camera.url',
                'value' => 'http://localhost/usercontent/camera/',
            ),
            230 => 
            array (
                'key' => 'imager.location.output.camera',
                'value' => '/var/www/testhotel/Cosmic/public/usercontent/camera/',
            ),
            231 => 
            array (
                'key' => 'imager.location.output.thumbnail',
                'value' => '/var/www/testhotel/Cosmic/public/usercontent/camera/thumbnail/',
            ),
            232 => 
            array (
                'key' => 'path.furniture.icons',
                'value' => '${image.library.url}/icons/',
            ),
            233 => 
            array (
                'key' => 'bubblealerts.notif_purchase.limited',
                'value' => '0',
            ),
            234 => 
            array (
                'key' => 'bubblealerts.notif_marketplace.enabled',
                'value' => '1',
            ),
            235 => 
            array (
                'key' => 'hotel.room.furni.max',
                'value' => '2500',
            ),
            236 => 
            array (
                'key' => 'hotel.sanctions.enabled',
                'value' => '1',
            ),
            237 => 
            array (
                'key' => 'navigator.eventcategories',
                'value' => '1,Hottest Events,false;2,Parties & Music,true;3,Role Play,true;4,Help Desk,true;5,Trading,true;6,Games,true;7,Debates & Discussions,true;8,Grand Openings,true;9,Friending,true;10,Jobs,true;11,Group Events,true',
            ),
            238 => 
            array (
                'key' => 'room.promotion.badge',
                'value' => 'RADZZ',
            ),
            239 => 
            array (
                'key' => 'camera.price.points.publish.type',
                'value' => '0',
            ),
            240 => 
            array (
                'key' => 'camera.price.points.type',
                'value' => '0',
            ),
            241 => 
            array (
                'key' => 'hotel.bot.placement.messages',
                'value' => 'Yo!;Hello I\'m a real party animal!;Hello!',
            ),
            242 => 
            array (
                'key' => 'rosie.bubble.image.url',
                'value' => '${image.library.url}notifications/generic.png',
            ),
            243 => 
            array (
                'key' => 'rosie.buyroom.currency.type',
                'value' => '5',
            ),
            244 => 
            array (
                'key' => 'allowed.username.characters',
                'value' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-=!?@:,.',
            ),
            245 => 
            array (
                'key' => 'essentials.cmd_kill.effect.victim',
                'value' => '93;89',
            ),
            246 => 
            array (
                'key' => 'essentials.cmd_kill.effect.killer',
                'value' => '164;182',
            ),
            247 => 
            array (
                'key' => 'bubblealerts.notif_friendonline.image',
                'value' => '${image.library.url}notifications/figure?p=%figure%',
            ),
            248 => 
            array (
                'key' => 'bubblealerts.notif_friendonline.useimage',
                'value' => '1',
            ),
            249 => 
            array (
                'key' => 'bubblealerts.notif_friendonline.enabled',
                'value' => '1',
            ),
            250 => 
            array (
                'key' => 'gamecenter.snowwar.enabled',
                'value' => 'true',
            ),
            251 => 
            array (
                'key' => 'gamecenter.snowwar.game.background.color',
                'value' => '93d4f3',
            ),
            252 => 
            array (
                'key' => 'gamecenter.snowwar.game.text.color',
                'value' => '000000',
            ),
            253 => 
            array (
                'key' => 'gamecenter.snowwar.game.start.time',
                'value' => '15',
            ),
            254 => 
            array (
                'key' => 'gamecenter.snowwar.players.min',
                'value' => '2',
            ),
            255 => 
            array (
                'key' => 'gamecenter.snowwar.room.id',
                'value' => '0',
            ),
            256 => 
            array (
                'key' => 'gamecenter.snowwar.assets',
                'value' => 'http://localhost/swf/c_images/gamecenter_snowwar/',
            ),
            257 => 
            array (
                'key' => 'gamecenter.snowwar.artic.bg',
                'value' => 'http://localhost/swf/c_images/gamecenter_snowwar/snst_bg_1_a_big.png',
            ),
            258 => 
            array (
                'key' => 'gamecenter.snowwar.dragoncave.bg',
                'value' => 'http://localhost/swf/c_images/gamecenter_snowwar/snst_bg_2_big.png',
            ),
            259 => 
            array (
                'key' => 'gamecenter.snowwar.fightnight.bg',
                'value' => 'http://localhost/swf/c_images/gamecenter_snowwar/snst_bg_3_noscale.png',
            ),
            260 => 
            array (
                'key' => 'gamecenter.fastfood.enabled',
                'value' => 'true',
            ),
            261 => 
            array (
                'key' => 'gamecenter.fastfood.background.color',
                'value' => '68bbd2',
            ),
            262 => 
            array (
                'key' => 'gamecenter.fastfood.text.color',
                'value' => 'ffffff',
            ),
            263 => 
            array (
                'key' => 'gamecenter.fastfood.assets',
                'value' => 'http://localhost/swf/c_images/gamecenter_basejump/',
            ),
            264 => 
            array (
                'key' => 'gamecenter.fastfood.apiKey',
                'value' => '',
            ),
            265 => 
            array (
                'key' => 'gamecenter.fastfood.theme',
                'value' => 'default',
            ),
            266 => 
            array (
                'key' => 'hotel.room.stickies.max',
                'value' => '200',
            ),
            267 => 
            array (
                'key' => 'retro.style.homeroom',
                'value' => '1',
            ),
            268 => 
            array (
                'key' => 'enc.enabled',
                'value' => '1',
            ),
            269 => 
            array (
                'key' => 'enc.e',
                'value' => '',
            ),
            270 => 
            array (
                'key' => 'enc.n',
                'value' => '',
            ),
            271 => 
            array (
                'key' => 'enc.d',
                'value' => '',
            ),
            272 => 
            array (
                'key' => 'db.pool.maxsize',
                'value' => '12',
            ),
            273 => 
            array (
                'key' => 'db.pool.minsize',
                'value' => '8',
            ),
            274 => 
            array (
                'key' => 'hotel.item.trap.pirate_sandtrap',
                'value' => '3000',
            ),
            275 => 
            array (
                'key' => 'hotel.item.trap.hween14_rare2',
                'value' => '3000',
            ),
            276 => 
            array (
                'key' => 'hotel.item.trap.hween_c17_handstrap',
                'value' => '3000',
            ),
            277 => 
            array (
                'key' => 'hotel.item.trap.hween_c17_spiketrap',
                'value' => '3000',
            ),
            278 => 
            array (
                'key' => 'flood.with.rights',
                'value' => '0',
            ),
            279 => 
            array (
                'key' => 'hotel.allow.ignore.staffs',
                'value' => '1',
            ),
            280 => 
            array (
                'key' => 'hotel.gifts.box_types',
                'value' => '0,1,2,3,4,5,6,8',
            ),
            281 => 
            array (
                'key' => 'hotel.gifts.ribbon_types',
                'value' => '0,1,2,3,4,5,6,7,8,9,10',
            ),
            282 => 
            array (
                'key' => 'hotel.flood.mute.time',
                'value' => '30',
            ),
            283 => 
            array (
                'key' => 'hotel.jukebox.limit.large',
                'value' => '20',
            ),
            284 => 
            array (
                'key' => 'hotel.jukebox.limit.normal',
                'value' => '10',
            ),
            285 => 
            array (
                'key' => 'apollyon.cooldown.amount',
                'value' => '250',
            ),
            286 => 
            array (
                'key' => 'ftp.enabled',
                'value' => '0',
            ),
            287 => 
            array (
                'key' => 'ftp.user',
                'value' => 'root',
            ),
            288 => 
            array (
                'key' => 'ftp.password',
                'value' => 'password123',
            ),
            289 => 
            array (
                'key' => 'ftp.host',
                'value' => 'example.com',
            ),
            290 => 
            array (
                'key' => 'hotel.room.rollers.roll_avatars.max',
                'value' => '1',
            ),
            291 => 
            array (
                'key' => 'hotel.nux.gifts.enabled',
                'value' => '0',
            ),
            292 => 
            array (
                'key' => 'subscriptions.hc.payday.enabled',
                'value' => '1',
            ),
            293 => 
            array (
                'key' => 'subscriptions.hc.payday.next_date',
                'value' => '2021-09-15 00:00:00',
            ),
            294 => 
            array (
                'key' => 'subscriptions.hc.payday.interval',
                'value' => '1 month',
            ),
            295 => 
            array (
                'key' => 'subscriptions.hc.payday.query',
            'value' => 'SELECT SUM(cost_credits) AS `amount_spent` FROM `logs_shop_purchases` WHERE `user_id` = @user_id AND `timestamp` > @timestamp_start AND `timestamp` <= @timestamp_end AND `catalog_name` NOT LIKE \'CF_%\' AND `catalog_name` NOT LIKE \'CFC_%\';',
            ),
            296 => 
            array (
                'key' => 'subscriptions.hc.payday.streak',
                'value' => '7=5;30=10;60=15;90=20;180=25;365=30',
            ),
            297 => 
            array (
                'key' => 'subscriptions.hc.payday.currency',
                'value' => 'credits',
            ),
            298 => 
            array (
                'key' => 'subscriptions.hc.payday.percentage',
                'value' => '10',
            ),
            299 => 
            array (
                'key' => 'subscriptions.hc.payday.creditsspent_reset_on_expire',
                'value' => '1',
            ),
            300 => 
            array (
                'key' => 'subscriptions.hc.achievement',
                'value' => 'VipHC',
            ),
            301 => 
            array (
                'key' => 'subscriptions.hc.discount.enabled',
                'value' => '1',
            ),
            302 => 
            array (
                'key' => 'subscriptions.hc.discount.days_before_end',
                'value' => '7',
            ),
            303 => 
            array (
                'key' => 'subscriptions.scheduler.enabled',
                'value' => '1',
            ),
            304 => 
            array (
                'key' => 'subscriptions.scheduler.interval',
                'value' => '10',
            ),
            305 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onhcexpired',
                'value' => '0',
            ),
            306 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onlogin',
                'value' => '0',
            ),
            307 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onchangelooks',
                'value' => '0',
            ),
            308 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onmimic',
                'value' => '0',
            ),
            309 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onmannequin',
                'value' => '0',
            ),
            310 => 
            array (
                'key' => 'hotel.users.clothingvalidation.onfballgate',
                'value' => '0',
            ),
            311 => 
            array (
                'key' => 'gamedata.figuredata.url',
                'value' => 'https://habbo.com/gamedata/figuredata/0',
            ),
            312 => 
            array (
                'key' => 'hotel.users.max.friends',
                'value' => '300',
            ),
            313 => 
            array (
                'key' => 'hotel.users.max.friends.hc',
                'value' => '1100',
            ),
            314 => 
            array (
                'key' => 'hotel.users.max.rooms',
                'value' => '50',
            ),
            315 => 
            array (
                'key' => 'hotel.users.max.rooms.hc',
                'value' => '75',
            ),
            316 => 
            array (
                'key' => 'hotel.auto.pixels.hc_modifier',
                'value' => '1',
            ),
            317 => 
            array (
                'key' => 'hotel.auto.points.hc_modifier',
                'value' => '1',
            ),
            318 => 
            array (
                'key' => 'hotel.auto.credits.hc_modifier',
                'value' => '1',
            ),
            319 => 
            array (
                'key' => 'hotel.auto.gotwpoints.hc_modifier',
                'value' => '1',
            ),
            320 => 
            array (
                'key' => 'room.chat.mutearea.allow_whisper',
                'value' => '1',
            ),
            321 => 
            array (
                'key' => 'easter_eggs.enabled',
                'value' => '1',
            ),
            322 => 
            array (
                'key' => 'bubblealerts.enabled',
                'value' => '1',
            ),
            323 => 
            array (
                'key' => 'websockets.whitelist',
                'value' => '*',
            ),
            324 => 
            array (
                'key' => 'ws.nitro.host',
                'value' => '0.0.0.0',
            ),
            325 => 
            array (
                'key' => 'ws.nitro.port',
                'value' => '2096',
            ),
            326 => 
            array (
                'key' => 'ws.nitro.ip.header',
                'value' => '',
            ),
            327 => 
            array (
                'key' => 'wildwest_stocks.message.bubble',
                'value' => '32',
            ),
            328 => 
            array (
                'key' => 'hween12_fortune.message.count',
                'value' => '11',
            ),
            329 => 
            array (
                'key' => 'hween12_fortune.message.bubble',
                'value' => '8',
            ),
            330 => 
            array (
                'key' => 'xmas14_santateller.message.count',
                'value' => '11',
            ),
            331 => 
            array (
                'key' => 'xmas14_santateller.message.bubble',
                'value' => '36',
            ),
            332 => 
            array (
                'key' => 'pirate_parrot.message.count',
                'value' => '15',
            ),
            333 => 
            array (
                'key' => 'pirate_parrot.message.bubble',
                'value' => '28',
            ),
            334 => 
            array (
                'key' => 'hotel.item.trap.cland_c15_goofloor',
                'value' => '3000',
            ),
            335 => 
            array (
                'key' => 'hotel.item.trap.hween13_gutsfloor',
                'value' => '3000',
            ),
            336 => 
            array (
                'key' => 'hotel.item.trap.jungle_c16_watertrap',
                'value' => '3000',
            ),
            337 => 
            array (
                'key' => 'hotel.item.trap.hween_c20_floortrap',
                'value' => '3000',
            ),
            338 => 
            array (
                'key' => 'fun.cmd_hug.enable',
                'value' => '9',
            ),
        ));
        
        
    }
}