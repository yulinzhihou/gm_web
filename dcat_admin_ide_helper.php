<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection class
     * @property Grid\Column|Collection quality
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection index
     * @property Grid\Column|Collection rule
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection sale_price
     * @property Grid\Column|Collection hp_max_value
     * @property Grid\Column|Collection hp_max_percent
     * @property Grid\Column|Collection hp_back_value
     * @property Grid\Column|Collection mp_max_value
     * @property Grid\Column|Collection mp_max_percent
     * @property Grid\Column|Collection mp_back_value
     * @property Grid\Column|Collection cold_att
     * @property Grid\Column|Collection cold_def
     * @property Grid\Column|Collection cold_keep_time
     * @property Grid\Column|Collection fire_att
     * @property Grid\Column|Collection fire_def
     * @property Grid\Column|Collection fire_keep_time
     * @property Grid\Column|Collection light_att
     * @property Grid\Column|Collection light_def
     * @property Grid\Column|Collection light_keep_time
     * @property Grid\Column|Collection postion_att
     * @property Grid\Column|Collection postion_def
     * @property Grid\Column|Collection postion_keep_time
     * @property Grid\Column|Collection def_all_percent
     * @property Grid\Column|Collection phy_attack
     * @property Grid\Column|Collection phy_attack_percent
     * @property Grid\Column|Collection add_phy_attack_percent
     * @property Grid\Column|Collection phy_def
     * @property Grid\Column|Collection phy_def_percent
     * @property Grid\Column|Collection add_phy_def_percent
     * @property Grid\Column|Collection miss_phy_def_percent
     * @property Grid\Column|Collection mag_attack
     * @property Grid\Column|Collection mag_attack_percent
     * @property Grid\Column|Collection add_mag_attack_percent
     * @property Grid\Column|Collection mag_def
     * @property Grid\Column|Collection mag_def_percent
     * @property Grid\Column|Collection add_mag_def_percent
     * @property Grid\Column|Collection miss_mag_def_percent
     * @property Grid\Column|Collection attach_speed
     * @property Grid\Column|Collection mag_cold_time
     * @property Grid\Column|Collection hit
     * @property Grid\Column|Collection miss
     * @property Grid\Column|Collection critical_att
     * @property Grid\Column|Collection ignore_percent
     * @property Grid\Column|Collection move_percent
     * @property Grid\Column|Collection attack_back
     * @property Grid\Column|Collection attach_cost
     * @property Grid\Column|Collection str
     * @property Grid\Column|Collection spr
     * @property Grid\Column|Collection con
     * @property Grid\Column|Collection com
     * @property Grid\Column|Collection dex
     * @property Grid\Column|Collection critical_def
     * @property Grid\Column|Collection qian_neng
     * @property Grid\Column|Collection hp_sto
     * @property Grid\Column|Collection mp_sto
     * @property Grid\Column|Collection add_skill_lv
     * @property Grid\Column|Collection add_all_skill_lv
     * @property Grid\Column|Collection spe_skill_rate
     * @property Grid\Column|Collection Resist_cold_def
     * @property Grid\Column|Collection Resist_fire_def
     * @property Grid\Column|Collection Resist_light_def
     * @property Grid\Column|Collection Resist_postion_def
     * @property Grid\Column|Collection basic_phy_attack
     * @property Grid\Column|Collection basic_mag_attack
     * @property Grid\Column|Collection basic_phy_def
     * @property Grid\Column|Collection basic_mag_def
     * @property Grid\Column|Collection basic_hit
     * @property Grid\Column|Collection basic_miss
     * @property Grid\Column|Collection color
     * @property Grid\Column|Collection desc_type
     * @property Grid\Column|Collection special_id
     * @property Grid\Column|Collection color_code
     * @property Grid\Column|Collection is_boradcast
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection catch_level
     * @property Grid\Column|Collection group
     * @property Grid\Column|Collection is_varition
     * @property Grid\Column|Collection is_baby
     * @property Grid\Column|Collection food_type
     * @property Grid\Column|Collection skill_study
     * @property Grid\Column|Collection positive_skill_one
     * @property Grid\Column|Collection positive_skill_one_percent
     * @property Grid\Column|Collection positive_skill_two
     * @property Grid\Column|Collection positive_skill_two_percent
     * @property Grid\Column|Collection negative_skill_one
     * @property Grid\Column|Collection negative_skill_one_percent
     * @property Grid\Column|Collection negative_skill_two
     * @property Grid\Column|Collection negative_skill_two_percent
     * @property Grid\Column|Collection negative_skill_three
     * @property Grid\Column|Collection negative_skill_three_percent
     * @property Grid\Column|Collection negative_skill_four
     * @property Grid\Column|Collection negative_skill_four_percent
     * @property Grid\Column|Collection negative_skill_five
     * @property Grid\Column|Collection negative_skill_five_percent
     * @property Grid\Column|Collection negative_skill_six
     * @property Grid\Column|Collection negative_skill_six_percent
     * @property Grid\Column|Collection negative_skill_seven
     * @property Grid\Column|Collection negative_skill_seven_percent
     * @property Grid\Column|Collection negative_skill_eight
     * @property Grid\Column|Collection negative_skill_eight_percent
     * @property Grid\Column|Collection negative_skill_nine
     * @property Grid\Column|Collection negative_skill_nine_percent
     * @property Grid\Column|Collection negative_skill_ten
     * @property Grid\Column|Collection negative_skill_ten_percent
     * @property Grid\Column|Collection basic_hp
     * @property Grid\Column|Collection basic_str
     * @property Grid\Column|Collection basic_con
     * @property Grid\Column|Collection basic_spr
     * @property Grid\Column|Collection basic_dex
     * @property Grid\Column|Collection basic_com
     * @property Grid\Column|Collection grow_rate_one
     * @property Grid\Column|Collection grow_rate_two
     * @property Grid\Column|Collection grow_rate_three
     * @property Grid\Column|Collection grow_rate_four
     * @property Grid\Column|Collection grow_rate_five
     * @property Grid\Column|Collection timid
     * @property Grid\Column|Collection cautious
     * @property Grid\Column|Collection loyal
     * @property Grid\Column|Collection shrewd
     * @property Grid\Column|Collection bravery
     * @property Grid\Column|Collection breeding_time
     * @property Grid\Column|Collection same_type
     * @property Grid\Column|Collection extra_one
     * @property Grid\Column|Collection extra_two
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection host
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection port
     * @property Grid\Column|Collection dbname
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection medindex
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection script_id
     * @property Grid\Column|Collection skill_id
     * @property Grid\Column|Collection is_cost
     * @property Grid\Column|Collection need_skill
     * @property Grid\Column|Collection need_skill_level
     * @property Grid\Column|Collection own_num
     * @property Grid\Column|Collection obj_type
     * @property Grid\Column|Collection type_desc
     * @property Grid\Column|Collection quality_level
     * @property Grid\Column|Collection recipe_id
     * @property Grid\Column|Collection subclass
     * @property Grid\Column|Collection is_boardcast
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection equip_point
     * @property Grid\Column|Collection visual
     * @property Grid\Column|Collection suit_id
     * @property Grid\Column|Collection suit_value
     * @property Grid\Column|Collection lv
     * @property Grid\Column|Collection menpai
     * @property Grid\Column|Collection max_value
     * @property Grid\Column|Collection fix_fail_value
     * @property Grid\Column|Collection max_gem
     * @property Grid\Column|Collection piao_id
     * @property Grid\Column|Collection is_zz
     * @property Grid\Column|Collection is_pz
     * @property Grid\Column|Collection quality_rule
     * @property Grid\Column|Collection begin_attr
     * @property Grid\Column|Collection attr_min
     * @property Grid\Column|Collection attr_max
     * @property Grid\Column|Collection zz_min
     * @property Grid\Column|Collection zz_max
     * @property Grid\Column|Collection level_up_id
     * @property Grid\Column|Collection bag
     * @property Grid\Column|Collection box
     * @property Grid\Column|Collection float_space
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection class(string $label = null)
     * @method Grid\Column|Collection quality(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection index(string $label = null)
     * @method Grid\Column|Collection rule(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection sale_price(string $label = null)
     * @method Grid\Column|Collection hp_max_value(string $label = null)
     * @method Grid\Column|Collection hp_max_percent(string $label = null)
     * @method Grid\Column|Collection hp_back_value(string $label = null)
     * @method Grid\Column|Collection mp_max_value(string $label = null)
     * @method Grid\Column|Collection mp_max_percent(string $label = null)
     * @method Grid\Column|Collection mp_back_value(string $label = null)
     * @method Grid\Column|Collection cold_att(string $label = null)
     * @method Grid\Column|Collection cold_def(string $label = null)
     * @method Grid\Column|Collection cold_keep_time(string $label = null)
     * @method Grid\Column|Collection fire_att(string $label = null)
     * @method Grid\Column|Collection fire_def(string $label = null)
     * @method Grid\Column|Collection fire_keep_time(string $label = null)
     * @method Grid\Column|Collection light_att(string $label = null)
     * @method Grid\Column|Collection light_def(string $label = null)
     * @method Grid\Column|Collection light_keep_time(string $label = null)
     * @method Grid\Column|Collection postion_att(string $label = null)
     * @method Grid\Column|Collection postion_def(string $label = null)
     * @method Grid\Column|Collection postion_keep_time(string $label = null)
     * @method Grid\Column|Collection def_all_percent(string $label = null)
     * @method Grid\Column|Collection phy_attack(string $label = null)
     * @method Grid\Column|Collection phy_attack_percent(string $label = null)
     * @method Grid\Column|Collection add_phy_attack_percent(string $label = null)
     * @method Grid\Column|Collection phy_def(string $label = null)
     * @method Grid\Column|Collection phy_def_percent(string $label = null)
     * @method Grid\Column|Collection add_phy_def_percent(string $label = null)
     * @method Grid\Column|Collection miss_phy_def_percent(string $label = null)
     * @method Grid\Column|Collection mag_attack(string $label = null)
     * @method Grid\Column|Collection mag_attack_percent(string $label = null)
     * @method Grid\Column|Collection add_mag_attack_percent(string $label = null)
     * @method Grid\Column|Collection mag_def(string $label = null)
     * @method Grid\Column|Collection mag_def_percent(string $label = null)
     * @method Grid\Column|Collection add_mag_def_percent(string $label = null)
     * @method Grid\Column|Collection miss_mag_def_percent(string $label = null)
     * @method Grid\Column|Collection attach_speed(string $label = null)
     * @method Grid\Column|Collection mag_cold_time(string $label = null)
     * @method Grid\Column|Collection hit(string $label = null)
     * @method Grid\Column|Collection miss(string $label = null)
     * @method Grid\Column|Collection critical_att(string $label = null)
     * @method Grid\Column|Collection ignore_percent(string $label = null)
     * @method Grid\Column|Collection move_percent(string $label = null)
     * @method Grid\Column|Collection attack_back(string $label = null)
     * @method Grid\Column|Collection attach_cost(string $label = null)
     * @method Grid\Column|Collection str(string $label = null)
     * @method Grid\Column|Collection spr(string $label = null)
     * @method Grid\Column|Collection con(string $label = null)
     * @method Grid\Column|Collection com(string $label = null)
     * @method Grid\Column|Collection dex(string $label = null)
     * @method Grid\Column|Collection critical_def(string $label = null)
     * @method Grid\Column|Collection qian_neng(string $label = null)
     * @method Grid\Column|Collection hp_sto(string $label = null)
     * @method Grid\Column|Collection mp_sto(string $label = null)
     * @method Grid\Column|Collection add_skill_lv(string $label = null)
     * @method Grid\Column|Collection add_all_skill_lv(string $label = null)
     * @method Grid\Column|Collection spe_skill_rate(string $label = null)
     * @method Grid\Column|Collection Resist_cold_def(string $label = null)
     * @method Grid\Column|Collection Resist_fire_def(string $label = null)
     * @method Grid\Column|Collection Resist_light_def(string $label = null)
     * @method Grid\Column|Collection Resist_postion_def(string $label = null)
     * @method Grid\Column|Collection basic_phy_attack(string $label = null)
     * @method Grid\Column|Collection basic_mag_attack(string $label = null)
     * @method Grid\Column|Collection basic_phy_def(string $label = null)
     * @method Grid\Column|Collection basic_mag_def(string $label = null)
     * @method Grid\Column|Collection basic_hit(string $label = null)
     * @method Grid\Column|Collection basic_miss(string $label = null)
     * @method Grid\Column|Collection color(string $label = null)
     * @method Grid\Column|Collection desc_type(string $label = null)
     * @method Grid\Column|Collection special_id(string $label = null)
     * @method Grid\Column|Collection color_code(string $label = null)
     * @method Grid\Column|Collection is_boradcast(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection catch_level(string $label = null)
     * @method Grid\Column|Collection group(string $label = null)
     * @method Grid\Column|Collection is_varition(string $label = null)
     * @method Grid\Column|Collection is_baby(string $label = null)
     * @method Grid\Column|Collection food_type(string $label = null)
     * @method Grid\Column|Collection skill_study(string $label = null)
     * @method Grid\Column|Collection positive_skill_one(string $label = null)
     * @method Grid\Column|Collection positive_skill_one_percent(string $label = null)
     * @method Grid\Column|Collection positive_skill_two(string $label = null)
     * @method Grid\Column|Collection positive_skill_two_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_one(string $label = null)
     * @method Grid\Column|Collection negative_skill_one_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_two(string $label = null)
     * @method Grid\Column|Collection negative_skill_two_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_three(string $label = null)
     * @method Grid\Column|Collection negative_skill_three_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_four(string $label = null)
     * @method Grid\Column|Collection negative_skill_four_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_five(string $label = null)
     * @method Grid\Column|Collection negative_skill_five_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_six(string $label = null)
     * @method Grid\Column|Collection negative_skill_six_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_seven(string $label = null)
     * @method Grid\Column|Collection negative_skill_seven_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_eight(string $label = null)
     * @method Grid\Column|Collection negative_skill_eight_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_nine(string $label = null)
     * @method Grid\Column|Collection negative_skill_nine_percent(string $label = null)
     * @method Grid\Column|Collection negative_skill_ten(string $label = null)
     * @method Grid\Column|Collection negative_skill_ten_percent(string $label = null)
     * @method Grid\Column|Collection basic_hp(string $label = null)
     * @method Grid\Column|Collection basic_str(string $label = null)
     * @method Grid\Column|Collection basic_con(string $label = null)
     * @method Grid\Column|Collection basic_spr(string $label = null)
     * @method Grid\Column|Collection basic_dex(string $label = null)
     * @method Grid\Column|Collection basic_com(string $label = null)
     * @method Grid\Column|Collection grow_rate_one(string $label = null)
     * @method Grid\Column|Collection grow_rate_two(string $label = null)
     * @method Grid\Column|Collection grow_rate_three(string $label = null)
     * @method Grid\Column|Collection grow_rate_four(string $label = null)
     * @method Grid\Column|Collection grow_rate_five(string $label = null)
     * @method Grid\Column|Collection timid(string $label = null)
     * @method Grid\Column|Collection cautious(string $label = null)
     * @method Grid\Column|Collection loyal(string $label = null)
     * @method Grid\Column|Collection shrewd(string $label = null)
     * @method Grid\Column|Collection bravery(string $label = null)
     * @method Grid\Column|Collection breeding_time(string $label = null)
     * @method Grid\Column|Collection same_type(string $label = null)
     * @method Grid\Column|Collection extra_one(string $label = null)
     * @method Grid\Column|Collection extra_two(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection host(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection port(string $label = null)
     * @method Grid\Column|Collection dbname(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection medindex(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection script_id(string $label = null)
     * @method Grid\Column|Collection skill_id(string $label = null)
     * @method Grid\Column|Collection is_cost(string $label = null)
     * @method Grid\Column|Collection need_skill(string $label = null)
     * @method Grid\Column|Collection need_skill_level(string $label = null)
     * @method Grid\Column|Collection own_num(string $label = null)
     * @method Grid\Column|Collection obj_type(string $label = null)
     * @method Grid\Column|Collection type_desc(string $label = null)
     * @method Grid\Column|Collection quality_level(string $label = null)
     * @method Grid\Column|Collection recipe_id(string $label = null)
     * @method Grid\Column|Collection subclass(string $label = null)
     * @method Grid\Column|Collection is_boardcast(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection equip_point(string $label = null)
     * @method Grid\Column|Collection visual(string $label = null)
     * @method Grid\Column|Collection suit_id(string $label = null)
     * @method Grid\Column|Collection suit_value(string $label = null)
     * @method Grid\Column|Collection lv(string $label = null)
     * @method Grid\Column|Collection menpai(string $label = null)
     * @method Grid\Column|Collection max_value(string $label = null)
     * @method Grid\Column|Collection fix_fail_value(string $label = null)
     * @method Grid\Column|Collection max_gem(string $label = null)
     * @method Grid\Column|Collection piao_id(string $label = null)
     * @method Grid\Column|Collection is_zz(string $label = null)
     * @method Grid\Column|Collection is_pz(string $label = null)
     * @method Grid\Column|Collection quality_rule(string $label = null)
     * @method Grid\Column|Collection begin_attr(string $label = null)
     * @method Grid\Column|Collection attr_min(string $label = null)
     * @method Grid\Column|Collection attr_max(string $label = null)
     * @method Grid\Column|Collection zz_min(string $label = null)
     * @method Grid\Column|Collection zz_max(string $label = null)
     * @method Grid\Column|Collection level_up_id(string $label = null)
     * @method Grid\Column|Collection bag(string $label = null)
     * @method Grid\Column|Collection box(string $label = null)
     * @method Grid\Column|Collection float_space(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection class
     * @property Show\Field|Collection quality
     * @property Show\Field|Collection type
     * @property Show\Field|Collection index
     * @property Show\Field|Collection rule
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection price
     * @property Show\Field|Collection sale_price
     * @property Show\Field|Collection hp_max_value
     * @property Show\Field|Collection hp_max_percent
     * @property Show\Field|Collection hp_back_value
     * @property Show\Field|Collection mp_max_value
     * @property Show\Field|Collection mp_max_percent
     * @property Show\Field|Collection mp_back_value
     * @property Show\Field|Collection cold_att
     * @property Show\Field|Collection cold_def
     * @property Show\Field|Collection cold_keep_time
     * @property Show\Field|Collection fire_att
     * @property Show\Field|Collection fire_def
     * @property Show\Field|Collection fire_keep_time
     * @property Show\Field|Collection light_att
     * @property Show\Field|Collection light_def
     * @property Show\Field|Collection light_keep_time
     * @property Show\Field|Collection postion_att
     * @property Show\Field|Collection postion_def
     * @property Show\Field|Collection postion_keep_time
     * @property Show\Field|Collection def_all_percent
     * @property Show\Field|Collection phy_attack
     * @property Show\Field|Collection phy_attack_percent
     * @property Show\Field|Collection add_phy_attack_percent
     * @property Show\Field|Collection phy_def
     * @property Show\Field|Collection phy_def_percent
     * @property Show\Field|Collection add_phy_def_percent
     * @property Show\Field|Collection miss_phy_def_percent
     * @property Show\Field|Collection mag_attack
     * @property Show\Field|Collection mag_attack_percent
     * @property Show\Field|Collection add_mag_attack_percent
     * @property Show\Field|Collection mag_def
     * @property Show\Field|Collection mag_def_percent
     * @property Show\Field|Collection add_mag_def_percent
     * @property Show\Field|Collection miss_mag_def_percent
     * @property Show\Field|Collection attach_speed
     * @property Show\Field|Collection mag_cold_time
     * @property Show\Field|Collection hit
     * @property Show\Field|Collection miss
     * @property Show\Field|Collection critical_att
     * @property Show\Field|Collection ignore_percent
     * @property Show\Field|Collection move_percent
     * @property Show\Field|Collection attack_back
     * @property Show\Field|Collection attach_cost
     * @property Show\Field|Collection str
     * @property Show\Field|Collection spr
     * @property Show\Field|Collection con
     * @property Show\Field|Collection com
     * @property Show\Field|Collection dex
     * @property Show\Field|Collection critical_def
     * @property Show\Field|Collection qian_neng
     * @property Show\Field|Collection hp_sto
     * @property Show\Field|Collection mp_sto
     * @property Show\Field|Collection add_skill_lv
     * @property Show\Field|Collection add_all_skill_lv
     * @property Show\Field|Collection spe_skill_rate
     * @property Show\Field|Collection Resist_cold_def
     * @property Show\Field|Collection Resist_fire_def
     * @property Show\Field|Collection Resist_light_def
     * @property Show\Field|Collection Resist_postion_def
     * @property Show\Field|Collection basic_phy_attack
     * @property Show\Field|Collection basic_mag_attack
     * @property Show\Field|Collection basic_phy_def
     * @property Show\Field|Collection basic_mag_def
     * @property Show\Field|Collection basic_hit
     * @property Show\Field|Collection basic_miss
     * @property Show\Field|Collection color
     * @property Show\Field|Collection desc_type
     * @property Show\Field|Collection special_id
     * @property Show\Field|Collection color_code
     * @property Show\Field|Collection is_boradcast
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection catch_level
     * @property Show\Field|Collection group
     * @property Show\Field|Collection is_varition
     * @property Show\Field|Collection is_baby
     * @property Show\Field|Collection food_type
     * @property Show\Field|Collection skill_study
     * @property Show\Field|Collection positive_skill_one
     * @property Show\Field|Collection positive_skill_one_percent
     * @property Show\Field|Collection positive_skill_two
     * @property Show\Field|Collection positive_skill_two_percent
     * @property Show\Field|Collection negative_skill_one
     * @property Show\Field|Collection negative_skill_one_percent
     * @property Show\Field|Collection negative_skill_two
     * @property Show\Field|Collection negative_skill_two_percent
     * @property Show\Field|Collection negative_skill_three
     * @property Show\Field|Collection negative_skill_three_percent
     * @property Show\Field|Collection negative_skill_four
     * @property Show\Field|Collection negative_skill_four_percent
     * @property Show\Field|Collection negative_skill_five
     * @property Show\Field|Collection negative_skill_five_percent
     * @property Show\Field|Collection negative_skill_six
     * @property Show\Field|Collection negative_skill_six_percent
     * @property Show\Field|Collection negative_skill_seven
     * @property Show\Field|Collection negative_skill_seven_percent
     * @property Show\Field|Collection negative_skill_eight
     * @property Show\Field|Collection negative_skill_eight_percent
     * @property Show\Field|Collection negative_skill_nine
     * @property Show\Field|Collection negative_skill_nine_percent
     * @property Show\Field|Collection negative_skill_ten
     * @property Show\Field|Collection negative_skill_ten_percent
     * @property Show\Field|Collection basic_hp
     * @property Show\Field|Collection basic_str
     * @property Show\Field|Collection basic_con
     * @property Show\Field|Collection basic_spr
     * @property Show\Field|Collection basic_dex
     * @property Show\Field|Collection basic_com
     * @property Show\Field|Collection grow_rate_one
     * @property Show\Field|Collection grow_rate_two
     * @property Show\Field|Collection grow_rate_three
     * @property Show\Field|Collection grow_rate_four
     * @property Show\Field|Collection grow_rate_five
     * @property Show\Field|Collection timid
     * @property Show\Field|Collection cautious
     * @property Show\Field|Collection loyal
     * @property Show\Field|Collection shrewd
     * @property Show\Field|Collection bravery
     * @property Show\Field|Collection breeding_time
     * @property Show\Field|Collection same_type
     * @property Show\Field|Collection extra_one
     * @property Show\Field|Collection extra_two
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection host
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection port
     * @property Show\Field|Collection dbname
     * @property Show\Field|Collection status
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection medindex
     * @property Show\Field|Collection level
     * @property Show\Field|Collection num
     * @property Show\Field|Collection script_id
     * @property Show\Field|Collection skill_id
     * @property Show\Field|Collection is_cost
     * @property Show\Field|Collection need_skill
     * @property Show\Field|Collection need_skill_level
     * @property Show\Field|Collection own_num
     * @property Show\Field|Collection obj_type
     * @property Show\Field|Collection type_desc
     * @property Show\Field|Collection quality_level
     * @property Show\Field|Collection recipe_id
     * @property Show\Field|Collection subclass
     * @property Show\Field|Collection is_boardcast
     * @property Show\Field|Collection value
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection email
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection token
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection equip_point
     * @property Show\Field|Collection visual
     * @property Show\Field|Collection suit_id
     * @property Show\Field|Collection suit_value
     * @property Show\Field|Collection lv
     * @property Show\Field|Collection menpai
     * @property Show\Field|Collection max_value
     * @property Show\Field|Collection fix_fail_value
     * @property Show\Field|Collection max_gem
     * @property Show\Field|Collection piao_id
     * @property Show\Field|Collection is_zz
     * @property Show\Field|Collection is_pz
     * @property Show\Field|Collection quality_rule
     * @property Show\Field|Collection begin_attr
     * @property Show\Field|Collection attr_min
     * @property Show\Field|Collection attr_max
     * @property Show\Field|Collection zz_min
     * @property Show\Field|Collection zz_max
     * @property Show\Field|Collection level_up_id
     * @property Show\Field|Collection bag
     * @property Show\Field|Collection box
     * @property Show\Field|Collection float_space
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection class(string $label = null)
     * @method Show\Field|Collection quality(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection index(string $label = null)
     * @method Show\Field|Collection rule(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection sale_price(string $label = null)
     * @method Show\Field|Collection hp_max_value(string $label = null)
     * @method Show\Field|Collection hp_max_percent(string $label = null)
     * @method Show\Field|Collection hp_back_value(string $label = null)
     * @method Show\Field|Collection mp_max_value(string $label = null)
     * @method Show\Field|Collection mp_max_percent(string $label = null)
     * @method Show\Field|Collection mp_back_value(string $label = null)
     * @method Show\Field|Collection cold_att(string $label = null)
     * @method Show\Field|Collection cold_def(string $label = null)
     * @method Show\Field|Collection cold_keep_time(string $label = null)
     * @method Show\Field|Collection fire_att(string $label = null)
     * @method Show\Field|Collection fire_def(string $label = null)
     * @method Show\Field|Collection fire_keep_time(string $label = null)
     * @method Show\Field|Collection light_att(string $label = null)
     * @method Show\Field|Collection light_def(string $label = null)
     * @method Show\Field|Collection light_keep_time(string $label = null)
     * @method Show\Field|Collection postion_att(string $label = null)
     * @method Show\Field|Collection postion_def(string $label = null)
     * @method Show\Field|Collection postion_keep_time(string $label = null)
     * @method Show\Field|Collection def_all_percent(string $label = null)
     * @method Show\Field|Collection phy_attack(string $label = null)
     * @method Show\Field|Collection phy_attack_percent(string $label = null)
     * @method Show\Field|Collection add_phy_attack_percent(string $label = null)
     * @method Show\Field|Collection phy_def(string $label = null)
     * @method Show\Field|Collection phy_def_percent(string $label = null)
     * @method Show\Field|Collection add_phy_def_percent(string $label = null)
     * @method Show\Field|Collection miss_phy_def_percent(string $label = null)
     * @method Show\Field|Collection mag_attack(string $label = null)
     * @method Show\Field|Collection mag_attack_percent(string $label = null)
     * @method Show\Field|Collection add_mag_attack_percent(string $label = null)
     * @method Show\Field|Collection mag_def(string $label = null)
     * @method Show\Field|Collection mag_def_percent(string $label = null)
     * @method Show\Field|Collection add_mag_def_percent(string $label = null)
     * @method Show\Field|Collection miss_mag_def_percent(string $label = null)
     * @method Show\Field|Collection attach_speed(string $label = null)
     * @method Show\Field|Collection mag_cold_time(string $label = null)
     * @method Show\Field|Collection hit(string $label = null)
     * @method Show\Field|Collection miss(string $label = null)
     * @method Show\Field|Collection critical_att(string $label = null)
     * @method Show\Field|Collection ignore_percent(string $label = null)
     * @method Show\Field|Collection move_percent(string $label = null)
     * @method Show\Field|Collection attack_back(string $label = null)
     * @method Show\Field|Collection attach_cost(string $label = null)
     * @method Show\Field|Collection str(string $label = null)
     * @method Show\Field|Collection spr(string $label = null)
     * @method Show\Field|Collection con(string $label = null)
     * @method Show\Field|Collection com(string $label = null)
     * @method Show\Field|Collection dex(string $label = null)
     * @method Show\Field|Collection critical_def(string $label = null)
     * @method Show\Field|Collection qian_neng(string $label = null)
     * @method Show\Field|Collection hp_sto(string $label = null)
     * @method Show\Field|Collection mp_sto(string $label = null)
     * @method Show\Field|Collection add_skill_lv(string $label = null)
     * @method Show\Field|Collection add_all_skill_lv(string $label = null)
     * @method Show\Field|Collection spe_skill_rate(string $label = null)
     * @method Show\Field|Collection Resist_cold_def(string $label = null)
     * @method Show\Field|Collection Resist_fire_def(string $label = null)
     * @method Show\Field|Collection Resist_light_def(string $label = null)
     * @method Show\Field|Collection Resist_postion_def(string $label = null)
     * @method Show\Field|Collection basic_phy_attack(string $label = null)
     * @method Show\Field|Collection basic_mag_attack(string $label = null)
     * @method Show\Field|Collection basic_phy_def(string $label = null)
     * @method Show\Field|Collection basic_mag_def(string $label = null)
     * @method Show\Field|Collection basic_hit(string $label = null)
     * @method Show\Field|Collection basic_miss(string $label = null)
     * @method Show\Field|Collection color(string $label = null)
     * @method Show\Field|Collection desc_type(string $label = null)
     * @method Show\Field|Collection special_id(string $label = null)
     * @method Show\Field|Collection color_code(string $label = null)
     * @method Show\Field|Collection is_boradcast(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection catch_level(string $label = null)
     * @method Show\Field|Collection group(string $label = null)
     * @method Show\Field|Collection is_varition(string $label = null)
     * @method Show\Field|Collection is_baby(string $label = null)
     * @method Show\Field|Collection food_type(string $label = null)
     * @method Show\Field|Collection skill_study(string $label = null)
     * @method Show\Field|Collection positive_skill_one(string $label = null)
     * @method Show\Field|Collection positive_skill_one_percent(string $label = null)
     * @method Show\Field|Collection positive_skill_two(string $label = null)
     * @method Show\Field|Collection positive_skill_two_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_one(string $label = null)
     * @method Show\Field|Collection negative_skill_one_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_two(string $label = null)
     * @method Show\Field|Collection negative_skill_two_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_three(string $label = null)
     * @method Show\Field|Collection negative_skill_three_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_four(string $label = null)
     * @method Show\Field|Collection negative_skill_four_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_five(string $label = null)
     * @method Show\Field|Collection negative_skill_five_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_six(string $label = null)
     * @method Show\Field|Collection negative_skill_six_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_seven(string $label = null)
     * @method Show\Field|Collection negative_skill_seven_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_eight(string $label = null)
     * @method Show\Field|Collection negative_skill_eight_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_nine(string $label = null)
     * @method Show\Field|Collection negative_skill_nine_percent(string $label = null)
     * @method Show\Field|Collection negative_skill_ten(string $label = null)
     * @method Show\Field|Collection negative_skill_ten_percent(string $label = null)
     * @method Show\Field|Collection basic_hp(string $label = null)
     * @method Show\Field|Collection basic_str(string $label = null)
     * @method Show\Field|Collection basic_con(string $label = null)
     * @method Show\Field|Collection basic_spr(string $label = null)
     * @method Show\Field|Collection basic_dex(string $label = null)
     * @method Show\Field|Collection basic_com(string $label = null)
     * @method Show\Field|Collection grow_rate_one(string $label = null)
     * @method Show\Field|Collection grow_rate_two(string $label = null)
     * @method Show\Field|Collection grow_rate_three(string $label = null)
     * @method Show\Field|Collection grow_rate_four(string $label = null)
     * @method Show\Field|Collection grow_rate_five(string $label = null)
     * @method Show\Field|Collection timid(string $label = null)
     * @method Show\Field|Collection cautious(string $label = null)
     * @method Show\Field|Collection loyal(string $label = null)
     * @method Show\Field|Collection shrewd(string $label = null)
     * @method Show\Field|Collection bravery(string $label = null)
     * @method Show\Field|Collection breeding_time(string $label = null)
     * @method Show\Field|Collection same_type(string $label = null)
     * @method Show\Field|Collection extra_one(string $label = null)
     * @method Show\Field|Collection extra_two(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection host(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection port(string $label = null)
     * @method Show\Field|Collection dbname(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection medindex(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection script_id(string $label = null)
     * @method Show\Field|Collection skill_id(string $label = null)
     * @method Show\Field|Collection is_cost(string $label = null)
     * @method Show\Field|Collection need_skill(string $label = null)
     * @method Show\Field|Collection need_skill_level(string $label = null)
     * @method Show\Field|Collection own_num(string $label = null)
     * @method Show\Field|Collection obj_type(string $label = null)
     * @method Show\Field|Collection type_desc(string $label = null)
     * @method Show\Field|Collection quality_level(string $label = null)
     * @method Show\Field|Collection recipe_id(string $label = null)
     * @method Show\Field|Collection subclass(string $label = null)
     * @method Show\Field|Collection is_boardcast(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection equip_point(string $label = null)
     * @method Show\Field|Collection visual(string $label = null)
     * @method Show\Field|Collection suit_id(string $label = null)
     * @method Show\Field|Collection suit_value(string $label = null)
     * @method Show\Field|Collection lv(string $label = null)
     * @method Show\Field|Collection menpai(string $label = null)
     * @method Show\Field|Collection max_value(string $label = null)
     * @method Show\Field|Collection fix_fail_value(string $label = null)
     * @method Show\Field|Collection max_gem(string $label = null)
     * @method Show\Field|Collection piao_id(string $label = null)
     * @method Show\Field|Collection is_zz(string $label = null)
     * @method Show\Field|Collection is_pz(string $label = null)
     * @method Show\Field|Collection quality_rule(string $label = null)
     * @method Show\Field|Collection begin_attr(string $label = null)
     * @method Show\Field|Collection attr_min(string $label = null)
     * @method Show\Field|Collection attr_max(string $label = null)
     * @method Show\Field|Collection zz_min(string $label = null)
     * @method Show\Field|Collection zz_max(string $label = null)
     * @method Show\Field|Collection level_up_id(string $label = null)
     * @method Show\Field|Collection bag(string $label = null)
     * @method Show\Field|Collection box(string $label = null)
     * @method Show\Field|Collection float_space(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
