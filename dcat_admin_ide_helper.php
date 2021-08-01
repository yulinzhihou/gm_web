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
     * @property Grid\Column|Collection trade_no
     * @property Grid\Column|Collection channel
     * @property Grid\Column|Collection server_id
     * @property Grid\Column|Collection account_id
     * @property Grid\Column|Collection fee
     * @property Grid\Column|Collection create_time
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection question
     * @property Grid\Column|Collection answer
     * @property Grid\Column|Collection qq
     * @property Grid\Column|Collection tel
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection id_type
     * @property Grid\Column|Collection id_card
     * @property Grid\Column|Collection point
     * @property Grid\Column|Collection aid
     * @property Grid\Column|Collection charguid
     * @property Grid\Column|Collection abid
     * @property Grid\Column|Collection ablvl
     * @property Grid\Column|Collection abexp
     * @property Grid\Column|Collection dbversion
     * @property Grid\Column|Collection isvalid
     * @property Grid\Column|Collection worldid
     * @property Grid\Column|Collection serverid
     * @property Grid\Column|Collection poolid
     * @property Grid\Column|Collection cshopid
     * @property Grid\Column|Collection imdata
     * @property Grid\Column|Collection xinfaid
     * @property Grid\Column|Collection xinfalvl
     * @property Grid\Column|Collection charname
     * @property Grid\Column|Collection charlevel
     * @property Grid\Column|Collection charsex
     * @property Grid\Column|Collection charmenpai
     * @property Grid\Column|Collection charguildname
     * @property Grid\Column|Collection charismarried
     * @property Grid\Column|Collection sendtime
     * @property Grid\Column|Collection announcetext
     * @property Grid\Column|Collection messageboard
     * @property Grid\Column|Collection sender
     * @property Grid\Column|Collection recer
     * @property Grid\Column|Collection mailinfo
     * @property Grid\Column|Collection mailcont
     * @property Grid\Column|Collection pindex
     * @property Grid\Column|Collection shopguid
     * @property Grid\Column|Collection stallid
     * @property Grid\Column|Collection stallunitid
     * @property Grid\Column|Collection Box_OnSale
     * @property Grid\Column|Collection Box_Price
     * @property Grid\Column|Collection Itm_charguid
     * @property Grid\Column|Collection Itm_guid
     * @property Grid\Column|Collection Itm_world
     * @property Grid\Column|Collection Itm_server
     * @property Grid\Column|Collection Itm_itemtype
     * @property Grid\Column|Collection Itm_pos
     * @property Grid\Column|Collection Itm_p1
     * @property Grid\Column|Collection Itm_p2
     * @property Grid\Column|Collection Itm_p3
     * @property Grid\Column|Collection Itm_p4
     * @property Grid\Column|Collection Itm_p5
     * @property Grid\Column|Collection Itm_p6
     * @property Grid\Column|Collection Itm_p7
     * @property Grid\Column|Collection Itm_p8
     * @property Grid\Column|Collection Itm_p9
     * @property Grid\Column|Collection Itm_p10
     * @property Grid\Column|Collection Itm_p11
     * @property Grid\Column|Collection Itm_p12
     * @property Grid\Column|Collection Itm_p13
     * @property Grid\Column|Collection Itm_p14
     * @property Grid\Column|Collection Itm_p15
     * @property Grid\Column|Collection Itm_p16
     * @property Grid\Column|Collection Itm_p17
     * @property Grid\Column|Collection Itm_creator
     * @property Grid\Column|Collection Itm_isvalid
     * @property Grid\Column|Collection Itm_dbversion
     * @property Grid\Column|Collection Itm_fixattr
     * @property Grid\Column|Collection Itm_var
     * @property Grid\Column|Collection Itm_visualid
     * @property Grid\Column|Collection Itm_maxgemid
     * @property Grid\Column|Collection cshoppos
     * @property Grid\Column|Collection serial
     * @property Grid\Column|Collection gtype
     * @property Grid\Column|Collection gvalue
     * @property Grid\Column|Collection svalue
     * @property Grid\Column|Collection ctime
     * @property Grid\Column|Collection costctime
     * @property Grid\Column|Collection sKey
     * @property Grid\Column|Collection nVal
     * @property Grid\Column|Collection hpetguid
     * @property Grid\Column|Collection lpetguid
     * @property Grid\Column|Collection dataxid
     * @property Grid\Column|Collection petname
     * @property Grid\Column|Collection petnick
     * @property Grid\Column|Collection needlevel
     * @property Grid\Column|Collection atttype
     * @property Grid\Column|Collection aitype
     * @property Grid\Column|Collection camp
     * @property Grid\Column|Collection hp
     * @property Grid\Column|Collection mp
     * @property Grid\Column|Collection life
     * @property Grid\Column|Collection pettype
     * @property Grid\Column|Collection genera
     * @property Grid\Column|Collection enjoy
     * @property Grid\Column|Collection strper
     * @property Grid\Column|Collection conper
     * @property Grid\Column|Collection dexper
     * @property Grid\Column|Collection sprper
     * @property Grid\Column|Collection iprper
     * @property Grid\Column|Collection gengu
     * @property Grid\Column|Collection growrate
     * @property Grid\Column|Collection repoint
     * @property Grid\Column|Collection exp
     * @property Grid\Column|Collection ipr
     * @property Grid\Column|Collection skill
     * @property Grid\Column|Collection flags
     * @property Grid\Column|Collection pwflag
     * @property Grid\Column|Collection pclvl
     * @property Grid\Column|Collection hspetguid
     * @property Grid\Column|Collection lspetguid
     * @property Grid\Column|Collection savvy
     * @property Grid\Column|Collection curtitle
     * @property Grid\Column|Collection us_unlock_time
     * @property Grid\Column|Collection us_reserve
     * @property Grid\Column|Collection dataversion
     * @property Grid\Column|Collection guildid
     * @property Grid\Column|Collection guildname
     * @property Grid\Column|Collection guildstat
     * @property Grid\Column|Collection chiefguid
     * @property Grid\Column|Collection pcount
     * @property Grid\Column|Collection ucount
     * @property Grid\Column|Collection mucount
     * @property Grid\Column|Collection gpoint
     * @property Grid\Column|Collection guildmoney
     * @property Grid\Column|Collection cityid
     * @property Grid\Column|Collection time
     * @property Grid\Column|Collection logevity
     * @property Grid\Column|Collection contribu
     * @property Grid\Column|Collection honor
     * @property Grid\Column|Collection indlvl
     * @property Grid\Column|Collection agrlvl
     * @property Grid\Column|Collection comlvl
     * @property Grid\Column|Collection deflvl
     * @property Grid\Column|Collection techlvl
     * @property Grid\Column|Collection ambilvl
     * @property Grid\Column|Collection admin
     * @property Grid\Column|Collection guilddesc
     * @property Grid\Column|Collection chiefname
     * @property Grid\Column|Collection cname
     * @property Grid\Column|Collection glvl
     * @property Grid\Column|Collection guilduser
     * @property Grid\Column|Collection guildmsg
     * @property Grid\Column|Collection guildextra
     * @property Grid\Column|Collection gnameinfo
     * @property Grid\Column|Collection guildboom
     * @property Grid\Column|Collection leagueid
     * @property Grid\Column|Collection lqltime
     * @property Grid\Column|Collection pairdata
     * @property Grid\Column|Collection fguid
     * @property Grid\Column|Collection fname
     * @property Grid\Column|Collection fpoint
     * @property Grid\Column|Collection reflag
     * @property Grid\Column|Collection groupid
     * @property Grid\Column|Collection extdata
     * @property Grid\Column|Collection data1
     * @property Grid\Column|Collection fixucount
     * @property Grid\Column|Collection salarytime
     * @property Grid\Column|Collection battle_succ
     * @property Grid\Column|Collection battle_fail
     * @property Grid\Column|Collection battle_score
     * @property Grid\Column|Collection battle_kill
     * @property Grid\Column|Collection battle_res
     * @property Grid\Column|Collection week_suc0
     * @property Grid\Column|Collection week_suc1
     * @property Grid\Column|Collection week_suc2
     * @property Grid\Column|Collection week_suc3
     * @property Grid\Column|Collection week_fal0
     * @property Grid\Column|Collection week_fal1
     * @property Grid\Column|Collection week_fal2
     * @property Grid\Column|Collection week_fal3
     * @property Grid\Column|Collection fcityid1
     * @property Grid\Column|Collection fboth1
     * @property Grid\Column|Collection fcityid2
     * @property Grid\Column|Collection fboth2
     * @property Grid\Column|Collection fcityid3
     * @property Grid\Column|Collection fboth3
     * @property Grid\Column|Collection fcityid4
     * @property Grid\Column|Collection fboth4
     * @property Grid\Column|Collection fcityid5
     * @property Grid\Column|Collection fboth5
     * @property Grid\Column|Collection fcityid6
     * @property Grid\Column|Collection fboth6
     * @property Grid\Column|Collection fcityid7
     * @property Grid\Column|Collection fboth7
     * @property Grid\Column|Collection fcityid8
     * @property Grid\Column|Collection fboth8
     * @property Grid\Column|Collection fnum
     * @property Grid\Column|Collection btime1
     * @property Grid\Column|Collection bguild1
     * @property Grid\Column|Collection bguild2
     * @property Grid\Column|Collection btime2
     * @property Grid\Column|Collection bguild3
     * @property Grid\Column|Collection btime3
     * @property Grid\Column|Collection bnum
     * @property Grid\Column|Collection bdtype
     * @property Grid\Column|Collection bdid
     * @property Grid\Column|Collection bdlevel
     * @property Grid\Column|Collection ri
     * @property Grid\Column|Collection ricontri
     * @property Grid\Column|Collection rimaxnum
     * @property Grid\Column|Collection riprice
     * @property Grid\Column|Collection ritvalue
     * @property Grid\Column|Collection rivalid
     * @property Grid\Column|Collection rinum
     * @property Grid\Column|Collection citydata
     * @property Grid\Column|Collection logouttime
     * @property Grid\Column|Collection crc32
     * @property Grid\Column|Collection fulldata
     * @property Grid\Column|Collection isdelete
     * @property Grid\Column|Collection server
     * @property Grid\Column|Collection Pet_charguid
     * @property Grid\Column|Collection Pet_hpetguid
     * @property Grid\Column|Collection Pet_lpetguid
     * @property Grid\Column|Collection Pet_dataxid
     * @property Grid\Column|Collection Pet_petname
     * @property Grid\Column|Collection Pet_petnick
     * @property Grid\Column|Collection Pet_level
     * @property Grid\Column|Collection Pet_needlevel
     * @property Grid\Column|Collection Pet_atttype
     * @property Grid\Column|Collection Pet_aitype
     * @property Grid\Column|Collection Pet_camp
     * @property Grid\Column|Collection Pet_hp
     * @property Grid\Column|Collection Pet_mp
     * @property Grid\Column|Collection Pet_life
     * @property Grid\Column|Collection Pet_pettype
     * @property Grid\Column|Collection Pet_genera
     * @property Grid\Column|Collection Pet_enjoy
     * @property Grid\Column|Collection Pet_strper
     * @property Grid\Column|Collection Pet_conper
     * @property Grid\Column|Collection Pet_dexper
     * @property Grid\Column|Collection Pet_sprper
     * @property Grid\Column|Collection Pet_iprper
     * @property Grid\Column|Collection Pet_gengu
     * @property Grid\Column|Collection Pet_growrate
     * @property Grid\Column|Collection Pet_repoint
     * @property Grid\Column|Collection Pet_exp
     * @property Grid\Column|Collection Pet_str
     * @property Grid\Column|Collection Pet_con
     * @property Grid\Column|Collection Pet_dex
     * @property Grid\Column|Collection Pet_spr
     * @property Grid\Column|Collection Pet_ipr
     * @property Grid\Column|Collection Pet_skill
     * @property Grid\Column|Collection Pet_dbversion
     * @property Grid\Column|Collection Pet_flags
     * @property Grid\Column|Collection Pet_isvalid
     * @property Grid\Column|Collection Pet_pwflag
     * @property Grid\Column|Collection Pet_pclvl
     * @property Grid\Column|Collection Pet_hspetguid
     * @property Grid\Column|Collection Pet_lspetguid
     * @property Grid\Column|Collection Pet_savvy
     * @property Grid\Column|Collection Pet_title
     * @property Grid\Column|Collection Pet_curtitle
     * @property Grid\Column|Collection Pet_us_unlock_time
     * @property Grid\Column|Collection Pet_us_reserve
     * @property Grid\Column|Collection sid
     * @property Grid\Column|Collection smkey
     * @property Grid\Column|Collection skid
     * @property Grid\Column|Collection sktime
     * @property Grid\Column|Collection guildpos
     * @property Grid\Column|Collection jointime
     * @property Grid\Column|Collection Box_Status
     * @property Grid\Column|Collection Box_Type
     * @property Grid\Column|Collection Box_VldNum
     * @property Grid\Column|Collection Box_FstPage
     * @property Grid\Column|Collection Buy_StlRsv
     * @property Grid\Column|Collection maxcharguid
     * @property Grid\Column|Collection stat
     * @property Grid\Column|Collection maxbmoney
     * @property Grid\Column|Collection basemoney
     * @property Grid\Column|Collection createtime
     * @property Grid\Column|Collection shopname
     * @property Grid\Column|Collection shopdesc
     * @property Grid\Column|Collection ownername
     * @property Grid\Column|Collection ownerguid
     * @property Grid\Column|Collection isopen
     * @property Grid\Column|Collection sale
     * @property Grid\Column|Collection saleprice
     * @property Grid\Column|Collection partner
     * @property Grid\Column|Collection recoder
     * @property Grid\Column|Collection stallinfo
     * @property Grid\Column|Collection partnum
     * @property Grid\Column|Collection subtype
     * @property Grid\Column|Collection profit
     * @property Grid\Column|Collection buyinfo
     * @property Grid\Column|Collection freeze
     * @property Grid\Column|Collection applypos
     * @property Grid\Column|Collection applyguildid
     * @property Grid\Column|Collection Buy_ItemNum
     * @property Grid\Column|Collection Buy_ItemIdx
     * @property Grid\Column|Collection Buy_Price
     * @property Grid\Column|Collection Buy_InStlNum
     * @property Grid\Column|Collection xflv
     * @property Grid\Column|Collection id1all
     * @property Grid\Column|Collection id2all
     * @property Grid\Column|Collection id3all
     * @property Grid\Column|Collection id4all
     * @property Grid\Column|Collection id5all
     * @property Grid\Column|Collection id6all
     * @property Grid\Column|Collection id7all
     * @property Grid\Column|Collection guid
     * @property Grid\Column|Collection world
     * @property Grid\Column|Collection itemtype
     * @property Grid\Column|Collection pos
     * @property Grid\Column|Collection p1
     * @property Grid\Column|Collection p2
     * @property Grid\Column|Collection p3
     * @property Grid\Column|Collection p4
     * @property Grid\Column|Collection p5
     * @property Grid\Column|Collection p6
     * @property Grid\Column|Collection p7
     * @property Grid\Column|Collection p8
     * @property Grid\Column|Collection p9
     * @property Grid\Column|Collection p10
     * @property Grid\Column|Collection p11
     * @property Grid\Column|Collection p12
     * @property Grid\Column|Collection p13
     * @property Grid\Column|Collection p14
     * @property Grid\Column|Collection p15
     * @property Grid\Column|Collection p16
     * @property Grid\Column|Collection p17
     * @property Grid\Column|Collection creator
     * @property Grid\Column|Collection fixattr
     * @property Grid\Column|Collection var
     * @property Grid\Column|Collection visualid
     * @property Grid\Column|Collection maxgemid
     * @property Grid\Column|Collection scene
     * @property Grid\Column|Collection citylevel
     * @property Grid\Column|Collection cityname
     * @property Grid\Column|Collection cubprog
     * @property Grid\Column|Collection mxbprog
     * @property Grid\Column|Collection cusprog
     * @property Grid\Column|Collection mxsprog
     * @property Grid\Column|Collection curupbld
     * @property Grid\Column|Collection mantain
     * @property Grid\Column|Collection indrate
     * @property Grid\Column|Collection argrate
     * @property Grid\Column|Collection comrate
     * @property Grid\Column|Collection defrate
     * @property Grid\Column|Collection scirate
     * @property Grid\Column|Collection extrate
     * @property Grid\Column|Collection leftpoint
     * @property Grid\Column|Collection cuspeifang
     * @property Grid\Column|Collection cusbld
     * @property Grid\Column|Collection smoney
     * @property Grid\Column|Collection smoneyfix
     * @property Grid\Column|Collection bmoney
     * @property Grid\Column|Collection pmoney
     * @property Grid\Column|Collection gmoneymax
     * @property Grid\Column|Collection foundtime
     * @property Grid\Column|Collection buydesc
     * @property Grid\Column|Collection buyreserve
     * @property Grid\Column|Collection leaguename
     * @property Grid\Column|Collection leaguedesc
     * @property Grid\Column|Collection creatorname
     * @property Grid\Column|Collection applynum
     * @property Grid\Column|Collection missionid
     * @property Grid\Column|Collection scriptid
     * @property Grid\Column|Collection flag
     * @property Grid\Column|Collection buyyuanbao
     * @property Grid\Column|Collection kmcount
     * @property Grid\Column|Collection cmcount
     * @property Grid\Column|Collection sbmoney
     * @property Grid\Column|Collection sbunlock
     * @property Grid\Column|Collection sbstatus
     * @property Grid\Column|Collection ipregion
     * @property Grid\Column|Collection petnumextra
     * @property Grid\Column|Collection moneyjz
     * @property Grid\Column|Collection accname
     * @property Grid\Column|Collection pw
     * @property Grid\Column|Collection sex
     * @property Grid\Column|Collection enegry
     * @property Grid\Column|Collection energymax
     * @property Grid\Column|Collection outlook
     * @property Grid\Column|Collection xpos
     * @property Grid\Column|Collection zpos
     * @property Grid\Column|Collection strikepoint
     * @property Grid\Column|Collection points
     * @property Grid\Column|Collection logintime
     * @property Grid\Column|Collection haircolor
     * @property Grid\Column|Collection hairmodel
     * @property Grid\Column|Collection facecolor
     * @property Grid\Column|Collection facemodel
     * @property Grid\Column|Collection vmoney
     * @property Grid\Column|Collection pres
     * @property Grid\Column|Collection mdata
     * @property Grid\Column|Collection mflag
     * @property Grid\Column|Collection relflag
     * @property Grid\Column|Collection settings
     * @property Grid\Column|Collection shopinfo
     * @property Grid\Column|Collection carrypet
     * @property Grid\Column|Collection guldid
     * @property Grid\Column|Collection teamid
     * @property Grid\Column|Collection headid
     * @property Grid\Column|Collection erecover
     * @property Grid\Column|Collection vigor
     * @property Grid\Column|Collection maxvigor
     * @property Grid\Column|Collection vrecover
     * @property Grid\Column|Collection pwdeltime
     * @property Grid\Column|Collection pinfo
     * @property Grid\Column|Collection bkscene
     * @property Grid\Column|Collection bkxpos
     * @property Grid\Column|Collection bkzpos
     * @property Grid\Column|Collection titleinfo
     * @property Grid\Column|Collection dietime
     * @property Grid\Column|Collection cooldown
     * @property Grid\Column|Collection bankmoney
     * @property Grid\Column|Collection bankend
     * @property Grid\Column|Collection rage
     * @property Grid\Column|Collection reserve
     * @property Grid\Column|Collection dinfo
     * @property Grid\Column|Collection defeq
     * @property Grid\Column|Collection guildpoint
     * @property Grid\Column|Collection menpaipoint
     * @property Grid\Column|Collection gevil
     * @property Grid\Column|Collection pkvalue
     * @property Grid\Column|Collection otime
     * @property Grid\Column|Collection deltime
     * @property Grid\Column|Collection expinfo
     * @property Grid\Column|Collection savetime
     * @property Grid\Column|Collection pvpinfo
     * @property Grid\Column|Collection loginip
     * @property Grid\Column|Collection pkvaluetime
     * @property Grid\Column|Collection fatigue
     * @property Grid\Column|Collection yuanbao
     * @property Grid\Column|Collection visualgem
     * @property Grid\Column|Collection isolditem
     * @property Grid\Column|Collection uipoint
     * @property Grid\Column|Collection zengdian
     * @property Grid\Column|Collection lastontime
     * @property Grid\Column|Collection contri
     * @property Grid\Column|Collection maxcoutri
     * @property Grid\Column|Collection pwcontri
     * @property Grid\Column|Collection cwcontri
     * @property Grid\Column|Collection guildpostime
     * @property Grid\Column|Collection access
     * @property Grid\Column|Collection gptime
     * @property Grid\Column|Collection lastdowntime
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
     * @method Grid\Column|Collection trade_no(string $label = null)
     * @method Grid\Column|Collection channel(string $label = null)
     * @method Grid\Column|Collection server_id(string $label = null)
     * @method Grid\Column|Collection account_id(string $label = null)
     * @method Grid\Column|Collection fee(string $label = null)
     * @method Grid\Column|Collection create_time(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection question(string $label = null)
     * @method Grid\Column|Collection answer(string $label = null)
     * @method Grid\Column|Collection qq(string $label = null)
     * @method Grid\Column|Collection tel(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection id_type(string $label = null)
     * @method Grid\Column|Collection id_card(string $label = null)
     * @method Grid\Column|Collection point(string $label = null)
     * @method Grid\Column|Collection aid(string $label = null)
     * @method Grid\Column|Collection charguid(string $label = null)
     * @method Grid\Column|Collection abid(string $label = null)
     * @method Grid\Column|Collection ablvl(string $label = null)
     * @method Grid\Column|Collection abexp(string $label = null)
     * @method Grid\Column|Collection dbversion(string $label = null)
     * @method Grid\Column|Collection isvalid(string $label = null)
     * @method Grid\Column|Collection worldid(string $label = null)
     * @method Grid\Column|Collection serverid(string $label = null)
     * @method Grid\Column|Collection poolid(string $label = null)
     * @method Grid\Column|Collection cshopid(string $label = null)
     * @method Grid\Column|Collection imdata(string $label = null)
     * @method Grid\Column|Collection xinfaid(string $label = null)
     * @method Grid\Column|Collection xinfalvl(string $label = null)
     * @method Grid\Column|Collection charname(string $label = null)
     * @method Grid\Column|Collection charlevel(string $label = null)
     * @method Grid\Column|Collection charsex(string $label = null)
     * @method Grid\Column|Collection charmenpai(string $label = null)
     * @method Grid\Column|Collection charguildname(string $label = null)
     * @method Grid\Column|Collection charismarried(string $label = null)
     * @method Grid\Column|Collection sendtime(string $label = null)
     * @method Grid\Column|Collection announcetext(string $label = null)
     * @method Grid\Column|Collection messageboard(string $label = null)
     * @method Grid\Column|Collection sender(string $label = null)
     * @method Grid\Column|Collection recer(string $label = null)
     * @method Grid\Column|Collection mailinfo(string $label = null)
     * @method Grid\Column|Collection mailcont(string $label = null)
     * @method Grid\Column|Collection pindex(string $label = null)
     * @method Grid\Column|Collection shopguid(string $label = null)
     * @method Grid\Column|Collection stallid(string $label = null)
     * @method Grid\Column|Collection stallunitid(string $label = null)
     * @method Grid\Column|Collection Box_OnSale(string $label = null)
     * @method Grid\Column|Collection Box_Price(string $label = null)
     * @method Grid\Column|Collection Itm_charguid(string $label = null)
     * @method Grid\Column|Collection Itm_guid(string $label = null)
     * @method Grid\Column|Collection Itm_world(string $label = null)
     * @method Grid\Column|Collection Itm_server(string $label = null)
     * @method Grid\Column|Collection Itm_itemtype(string $label = null)
     * @method Grid\Column|Collection Itm_pos(string $label = null)
     * @method Grid\Column|Collection Itm_p1(string $label = null)
     * @method Grid\Column|Collection Itm_p2(string $label = null)
     * @method Grid\Column|Collection Itm_p3(string $label = null)
     * @method Grid\Column|Collection Itm_p4(string $label = null)
     * @method Grid\Column|Collection Itm_p5(string $label = null)
     * @method Grid\Column|Collection Itm_p6(string $label = null)
     * @method Grid\Column|Collection Itm_p7(string $label = null)
     * @method Grid\Column|Collection Itm_p8(string $label = null)
     * @method Grid\Column|Collection Itm_p9(string $label = null)
     * @method Grid\Column|Collection Itm_p10(string $label = null)
     * @method Grid\Column|Collection Itm_p11(string $label = null)
     * @method Grid\Column|Collection Itm_p12(string $label = null)
     * @method Grid\Column|Collection Itm_p13(string $label = null)
     * @method Grid\Column|Collection Itm_p14(string $label = null)
     * @method Grid\Column|Collection Itm_p15(string $label = null)
     * @method Grid\Column|Collection Itm_p16(string $label = null)
     * @method Grid\Column|Collection Itm_p17(string $label = null)
     * @method Grid\Column|Collection Itm_creator(string $label = null)
     * @method Grid\Column|Collection Itm_isvalid(string $label = null)
     * @method Grid\Column|Collection Itm_dbversion(string $label = null)
     * @method Grid\Column|Collection Itm_fixattr(string $label = null)
     * @method Grid\Column|Collection Itm_var(string $label = null)
     * @method Grid\Column|Collection Itm_visualid(string $label = null)
     * @method Grid\Column|Collection Itm_maxgemid(string $label = null)
     * @method Grid\Column|Collection cshoppos(string $label = null)
     * @method Grid\Column|Collection serial(string $label = null)
     * @method Grid\Column|Collection gtype(string $label = null)
     * @method Grid\Column|Collection gvalue(string $label = null)
     * @method Grid\Column|Collection svalue(string $label = null)
     * @method Grid\Column|Collection ctime(string $label = null)
     * @method Grid\Column|Collection costctime(string $label = null)
     * @method Grid\Column|Collection sKey(string $label = null)
     * @method Grid\Column|Collection nVal(string $label = null)
     * @method Grid\Column|Collection hpetguid(string $label = null)
     * @method Grid\Column|Collection lpetguid(string $label = null)
     * @method Grid\Column|Collection dataxid(string $label = null)
     * @method Grid\Column|Collection petname(string $label = null)
     * @method Grid\Column|Collection petnick(string $label = null)
     * @method Grid\Column|Collection needlevel(string $label = null)
     * @method Grid\Column|Collection atttype(string $label = null)
     * @method Grid\Column|Collection aitype(string $label = null)
     * @method Grid\Column|Collection camp(string $label = null)
     * @method Grid\Column|Collection hp(string $label = null)
     * @method Grid\Column|Collection mp(string $label = null)
     * @method Grid\Column|Collection life(string $label = null)
     * @method Grid\Column|Collection pettype(string $label = null)
     * @method Grid\Column|Collection genera(string $label = null)
     * @method Grid\Column|Collection enjoy(string $label = null)
     * @method Grid\Column|Collection strper(string $label = null)
     * @method Grid\Column|Collection conper(string $label = null)
     * @method Grid\Column|Collection dexper(string $label = null)
     * @method Grid\Column|Collection sprper(string $label = null)
     * @method Grid\Column|Collection iprper(string $label = null)
     * @method Grid\Column|Collection gengu(string $label = null)
     * @method Grid\Column|Collection growrate(string $label = null)
     * @method Grid\Column|Collection repoint(string $label = null)
     * @method Grid\Column|Collection exp(string $label = null)
     * @method Grid\Column|Collection ipr(string $label = null)
     * @method Grid\Column|Collection skill(string $label = null)
     * @method Grid\Column|Collection flags(string $label = null)
     * @method Grid\Column|Collection pwflag(string $label = null)
     * @method Grid\Column|Collection pclvl(string $label = null)
     * @method Grid\Column|Collection hspetguid(string $label = null)
     * @method Grid\Column|Collection lspetguid(string $label = null)
     * @method Grid\Column|Collection savvy(string $label = null)
     * @method Grid\Column|Collection curtitle(string $label = null)
     * @method Grid\Column|Collection us_unlock_time(string $label = null)
     * @method Grid\Column|Collection us_reserve(string $label = null)
     * @method Grid\Column|Collection dataversion(string $label = null)
     * @method Grid\Column|Collection guildid(string $label = null)
     * @method Grid\Column|Collection guildname(string $label = null)
     * @method Grid\Column|Collection guildstat(string $label = null)
     * @method Grid\Column|Collection chiefguid(string $label = null)
     * @method Grid\Column|Collection pcount(string $label = null)
     * @method Grid\Column|Collection ucount(string $label = null)
     * @method Grid\Column|Collection mucount(string $label = null)
     * @method Grid\Column|Collection gpoint(string $label = null)
     * @method Grid\Column|Collection guildmoney(string $label = null)
     * @method Grid\Column|Collection cityid(string $label = null)
     * @method Grid\Column|Collection time(string $label = null)
     * @method Grid\Column|Collection logevity(string $label = null)
     * @method Grid\Column|Collection contribu(string $label = null)
     * @method Grid\Column|Collection honor(string $label = null)
     * @method Grid\Column|Collection indlvl(string $label = null)
     * @method Grid\Column|Collection agrlvl(string $label = null)
     * @method Grid\Column|Collection comlvl(string $label = null)
     * @method Grid\Column|Collection deflvl(string $label = null)
     * @method Grid\Column|Collection techlvl(string $label = null)
     * @method Grid\Column|Collection ambilvl(string $label = null)
     * @method Grid\Column|Collection admin(string $label = null)
     * @method Grid\Column|Collection guilddesc(string $label = null)
     * @method Grid\Column|Collection chiefname(string $label = null)
     * @method Grid\Column|Collection cname(string $label = null)
     * @method Grid\Column|Collection glvl(string $label = null)
     * @method Grid\Column|Collection guilduser(string $label = null)
     * @method Grid\Column|Collection guildmsg(string $label = null)
     * @method Grid\Column|Collection guildextra(string $label = null)
     * @method Grid\Column|Collection gnameinfo(string $label = null)
     * @method Grid\Column|Collection guildboom(string $label = null)
     * @method Grid\Column|Collection leagueid(string $label = null)
     * @method Grid\Column|Collection lqltime(string $label = null)
     * @method Grid\Column|Collection pairdata(string $label = null)
     * @method Grid\Column|Collection fguid(string $label = null)
     * @method Grid\Column|Collection fname(string $label = null)
     * @method Grid\Column|Collection fpoint(string $label = null)
     * @method Grid\Column|Collection reflag(string $label = null)
     * @method Grid\Column|Collection groupid(string $label = null)
     * @method Grid\Column|Collection extdata(string $label = null)
     * @method Grid\Column|Collection data1(string $label = null)
     * @method Grid\Column|Collection fixucount(string $label = null)
     * @method Grid\Column|Collection salarytime(string $label = null)
     * @method Grid\Column|Collection battle_succ(string $label = null)
     * @method Grid\Column|Collection battle_fail(string $label = null)
     * @method Grid\Column|Collection battle_score(string $label = null)
     * @method Grid\Column|Collection battle_kill(string $label = null)
     * @method Grid\Column|Collection battle_res(string $label = null)
     * @method Grid\Column|Collection week_suc0(string $label = null)
     * @method Grid\Column|Collection week_suc1(string $label = null)
     * @method Grid\Column|Collection week_suc2(string $label = null)
     * @method Grid\Column|Collection week_suc3(string $label = null)
     * @method Grid\Column|Collection week_fal0(string $label = null)
     * @method Grid\Column|Collection week_fal1(string $label = null)
     * @method Grid\Column|Collection week_fal2(string $label = null)
     * @method Grid\Column|Collection week_fal3(string $label = null)
     * @method Grid\Column|Collection fcityid1(string $label = null)
     * @method Grid\Column|Collection fboth1(string $label = null)
     * @method Grid\Column|Collection fcityid2(string $label = null)
     * @method Grid\Column|Collection fboth2(string $label = null)
     * @method Grid\Column|Collection fcityid3(string $label = null)
     * @method Grid\Column|Collection fboth3(string $label = null)
     * @method Grid\Column|Collection fcityid4(string $label = null)
     * @method Grid\Column|Collection fboth4(string $label = null)
     * @method Grid\Column|Collection fcityid5(string $label = null)
     * @method Grid\Column|Collection fboth5(string $label = null)
     * @method Grid\Column|Collection fcityid6(string $label = null)
     * @method Grid\Column|Collection fboth6(string $label = null)
     * @method Grid\Column|Collection fcityid7(string $label = null)
     * @method Grid\Column|Collection fboth7(string $label = null)
     * @method Grid\Column|Collection fcityid8(string $label = null)
     * @method Grid\Column|Collection fboth8(string $label = null)
     * @method Grid\Column|Collection fnum(string $label = null)
     * @method Grid\Column|Collection btime1(string $label = null)
     * @method Grid\Column|Collection bguild1(string $label = null)
     * @method Grid\Column|Collection bguild2(string $label = null)
     * @method Grid\Column|Collection btime2(string $label = null)
     * @method Grid\Column|Collection bguild3(string $label = null)
     * @method Grid\Column|Collection btime3(string $label = null)
     * @method Grid\Column|Collection bnum(string $label = null)
     * @method Grid\Column|Collection bdtype(string $label = null)
     * @method Grid\Column|Collection bdid(string $label = null)
     * @method Grid\Column|Collection bdlevel(string $label = null)
     * @method Grid\Column|Collection ri(string $label = null)
     * @method Grid\Column|Collection ricontri(string $label = null)
     * @method Grid\Column|Collection rimaxnum(string $label = null)
     * @method Grid\Column|Collection riprice(string $label = null)
     * @method Grid\Column|Collection ritvalue(string $label = null)
     * @method Grid\Column|Collection rivalid(string $label = null)
     * @method Grid\Column|Collection rinum(string $label = null)
     * @method Grid\Column|Collection citydata(string $label = null)
     * @method Grid\Column|Collection logouttime(string $label = null)
     * @method Grid\Column|Collection crc32(string $label = null)
     * @method Grid\Column|Collection fulldata(string $label = null)
     * @method Grid\Column|Collection isdelete(string $label = null)
     * @method Grid\Column|Collection server(string $label = null)
     * @method Grid\Column|Collection Pet_charguid(string $label = null)
     * @method Grid\Column|Collection Pet_hpetguid(string $label = null)
     * @method Grid\Column|Collection Pet_lpetguid(string $label = null)
     * @method Grid\Column|Collection Pet_dataxid(string $label = null)
     * @method Grid\Column|Collection Pet_petname(string $label = null)
     * @method Grid\Column|Collection Pet_petnick(string $label = null)
     * @method Grid\Column|Collection Pet_level(string $label = null)
     * @method Grid\Column|Collection Pet_needlevel(string $label = null)
     * @method Grid\Column|Collection Pet_atttype(string $label = null)
     * @method Grid\Column|Collection Pet_aitype(string $label = null)
     * @method Grid\Column|Collection Pet_camp(string $label = null)
     * @method Grid\Column|Collection Pet_hp(string $label = null)
     * @method Grid\Column|Collection Pet_mp(string $label = null)
     * @method Grid\Column|Collection Pet_life(string $label = null)
     * @method Grid\Column|Collection Pet_pettype(string $label = null)
     * @method Grid\Column|Collection Pet_genera(string $label = null)
     * @method Grid\Column|Collection Pet_enjoy(string $label = null)
     * @method Grid\Column|Collection Pet_strper(string $label = null)
     * @method Grid\Column|Collection Pet_conper(string $label = null)
     * @method Grid\Column|Collection Pet_dexper(string $label = null)
     * @method Grid\Column|Collection Pet_sprper(string $label = null)
     * @method Grid\Column|Collection Pet_iprper(string $label = null)
     * @method Grid\Column|Collection Pet_gengu(string $label = null)
     * @method Grid\Column|Collection Pet_growrate(string $label = null)
     * @method Grid\Column|Collection Pet_repoint(string $label = null)
     * @method Grid\Column|Collection Pet_exp(string $label = null)
     * @method Grid\Column|Collection Pet_str(string $label = null)
     * @method Grid\Column|Collection Pet_con(string $label = null)
     * @method Grid\Column|Collection Pet_dex(string $label = null)
     * @method Grid\Column|Collection Pet_spr(string $label = null)
     * @method Grid\Column|Collection Pet_ipr(string $label = null)
     * @method Grid\Column|Collection Pet_skill(string $label = null)
     * @method Grid\Column|Collection Pet_dbversion(string $label = null)
     * @method Grid\Column|Collection Pet_flags(string $label = null)
     * @method Grid\Column|Collection Pet_isvalid(string $label = null)
     * @method Grid\Column|Collection Pet_pwflag(string $label = null)
     * @method Grid\Column|Collection Pet_pclvl(string $label = null)
     * @method Grid\Column|Collection Pet_hspetguid(string $label = null)
     * @method Grid\Column|Collection Pet_lspetguid(string $label = null)
     * @method Grid\Column|Collection Pet_savvy(string $label = null)
     * @method Grid\Column|Collection Pet_title(string $label = null)
     * @method Grid\Column|Collection Pet_curtitle(string $label = null)
     * @method Grid\Column|Collection Pet_us_unlock_time(string $label = null)
     * @method Grid\Column|Collection Pet_us_reserve(string $label = null)
     * @method Grid\Column|Collection sid(string $label = null)
     * @method Grid\Column|Collection smkey(string $label = null)
     * @method Grid\Column|Collection skid(string $label = null)
     * @method Grid\Column|Collection sktime(string $label = null)
     * @method Grid\Column|Collection guildpos(string $label = null)
     * @method Grid\Column|Collection jointime(string $label = null)
     * @method Grid\Column|Collection Box_Status(string $label = null)
     * @method Grid\Column|Collection Box_Type(string $label = null)
     * @method Grid\Column|Collection Box_VldNum(string $label = null)
     * @method Grid\Column|Collection Box_FstPage(string $label = null)
     * @method Grid\Column|Collection Buy_StlRsv(string $label = null)
     * @method Grid\Column|Collection maxcharguid(string $label = null)
     * @method Grid\Column|Collection stat(string $label = null)
     * @method Grid\Column|Collection maxbmoney(string $label = null)
     * @method Grid\Column|Collection basemoney(string $label = null)
     * @method Grid\Column|Collection createtime(string $label = null)
     * @method Grid\Column|Collection shopname(string $label = null)
     * @method Grid\Column|Collection shopdesc(string $label = null)
     * @method Grid\Column|Collection ownername(string $label = null)
     * @method Grid\Column|Collection ownerguid(string $label = null)
     * @method Grid\Column|Collection isopen(string $label = null)
     * @method Grid\Column|Collection sale(string $label = null)
     * @method Grid\Column|Collection saleprice(string $label = null)
     * @method Grid\Column|Collection partner(string $label = null)
     * @method Grid\Column|Collection recoder(string $label = null)
     * @method Grid\Column|Collection stallinfo(string $label = null)
     * @method Grid\Column|Collection partnum(string $label = null)
     * @method Grid\Column|Collection subtype(string $label = null)
     * @method Grid\Column|Collection profit(string $label = null)
     * @method Grid\Column|Collection buyinfo(string $label = null)
     * @method Grid\Column|Collection freeze(string $label = null)
     * @method Grid\Column|Collection applypos(string $label = null)
     * @method Grid\Column|Collection applyguildid(string $label = null)
     * @method Grid\Column|Collection Buy_ItemNum(string $label = null)
     * @method Grid\Column|Collection Buy_ItemIdx(string $label = null)
     * @method Grid\Column|Collection Buy_Price(string $label = null)
     * @method Grid\Column|Collection Buy_InStlNum(string $label = null)
     * @method Grid\Column|Collection xflv(string $label = null)
     * @method Grid\Column|Collection id1all(string $label = null)
     * @method Grid\Column|Collection id2all(string $label = null)
     * @method Grid\Column|Collection id3all(string $label = null)
     * @method Grid\Column|Collection id4all(string $label = null)
     * @method Grid\Column|Collection id5all(string $label = null)
     * @method Grid\Column|Collection id6all(string $label = null)
     * @method Grid\Column|Collection id7all(string $label = null)
     * @method Grid\Column|Collection guid(string $label = null)
     * @method Grid\Column|Collection world(string $label = null)
     * @method Grid\Column|Collection itemtype(string $label = null)
     * @method Grid\Column|Collection pos(string $label = null)
     * @method Grid\Column|Collection p1(string $label = null)
     * @method Grid\Column|Collection p2(string $label = null)
     * @method Grid\Column|Collection p3(string $label = null)
     * @method Grid\Column|Collection p4(string $label = null)
     * @method Grid\Column|Collection p5(string $label = null)
     * @method Grid\Column|Collection p6(string $label = null)
     * @method Grid\Column|Collection p7(string $label = null)
     * @method Grid\Column|Collection p8(string $label = null)
     * @method Grid\Column|Collection p9(string $label = null)
     * @method Grid\Column|Collection p10(string $label = null)
     * @method Grid\Column|Collection p11(string $label = null)
     * @method Grid\Column|Collection p12(string $label = null)
     * @method Grid\Column|Collection p13(string $label = null)
     * @method Grid\Column|Collection p14(string $label = null)
     * @method Grid\Column|Collection p15(string $label = null)
     * @method Grid\Column|Collection p16(string $label = null)
     * @method Grid\Column|Collection p17(string $label = null)
     * @method Grid\Column|Collection creator(string $label = null)
     * @method Grid\Column|Collection fixattr(string $label = null)
     * @method Grid\Column|Collection var(string $label = null)
     * @method Grid\Column|Collection visualid(string $label = null)
     * @method Grid\Column|Collection maxgemid(string $label = null)
     * @method Grid\Column|Collection scene(string $label = null)
     * @method Grid\Column|Collection citylevel(string $label = null)
     * @method Grid\Column|Collection cityname(string $label = null)
     * @method Grid\Column|Collection cubprog(string $label = null)
     * @method Grid\Column|Collection mxbprog(string $label = null)
     * @method Grid\Column|Collection cusprog(string $label = null)
     * @method Grid\Column|Collection mxsprog(string $label = null)
     * @method Grid\Column|Collection curupbld(string $label = null)
     * @method Grid\Column|Collection mantain(string $label = null)
     * @method Grid\Column|Collection indrate(string $label = null)
     * @method Grid\Column|Collection argrate(string $label = null)
     * @method Grid\Column|Collection comrate(string $label = null)
     * @method Grid\Column|Collection defrate(string $label = null)
     * @method Grid\Column|Collection scirate(string $label = null)
     * @method Grid\Column|Collection extrate(string $label = null)
     * @method Grid\Column|Collection leftpoint(string $label = null)
     * @method Grid\Column|Collection cuspeifang(string $label = null)
     * @method Grid\Column|Collection cusbld(string $label = null)
     * @method Grid\Column|Collection smoney(string $label = null)
     * @method Grid\Column|Collection smoneyfix(string $label = null)
     * @method Grid\Column|Collection bmoney(string $label = null)
     * @method Grid\Column|Collection pmoney(string $label = null)
     * @method Grid\Column|Collection gmoneymax(string $label = null)
     * @method Grid\Column|Collection foundtime(string $label = null)
     * @method Grid\Column|Collection buydesc(string $label = null)
     * @method Grid\Column|Collection buyreserve(string $label = null)
     * @method Grid\Column|Collection leaguename(string $label = null)
     * @method Grid\Column|Collection leaguedesc(string $label = null)
     * @method Grid\Column|Collection creatorname(string $label = null)
     * @method Grid\Column|Collection applynum(string $label = null)
     * @method Grid\Column|Collection missionid(string $label = null)
     * @method Grid\Column|Collection scriptid(string $label = null)
     * @method Grid\Column|Collection flag(string $label = null)
     * @method Grid\Column|Collection buyyuanbao(string $label = null)
     * @method Grid\Column|Collection kmcount(string $label = null)
     * @method Grid\Column|Collection cmcount(string $label = null)
     * @method Grid\Column|Collection sbmoney(string $label = null)
     * @method Grid\Column|Collection sbunlock(string $label = null)
     * @method Grid\Column|Collection sbstatus(string $label = null)
     * @method Grid\Column|Collection ipregion(string $label = null)
     * @method Grid\Column|Collection petnumextra(string $label = null)
     * @method Grid\Column|Collection moneyjz(string $label = null)
     * @method Grid\Column|Collection accname(string $label = null)
     * @method Grid\Column|Collection pw(string $label = null)
     * @method Grid\Column|Collection sex(string $label = null)
     * @method Grid\Column|Collection enegry(string $label = null)
     * @method Grid\Column|Collection energymax(string $label = null)
     * @method Grid\Column|Collection outlook(string $label = null)
     * @method Grid\Column|Collection xpos(string $label = null)
     * @method Grid\Column|Collection zpos(string $label = null)
     * @method Grid\Column|Collection strikepoint(string $label = null)
     * @method Grid\Column|Collection points(string $label = null)
     * @method Grid\Column|Collection logintime(string $label = null)
     * @method Grid\Column|Collection haircolor(string $label = null)
     * @method Grid\Column|Collection hairmodel(string $label = null)
     * @method Grid\Column|Collection facecolor(string $label = null)
     * @method Grid\Column|Collection facemodel(string $label = null)
     * @method Grid\Column|Collection vmoney(string $label = null)
     * @method Grid\Column|Collection pres(string $label = null)
     * @method Grid\Column|Collection mdata(string $label = null)
     * @method Grid\Column|Collection mflag(string $label = null)
     * @method Grid\Column|Collection relflag(string $label = null)
     * @method Grid\Column|Collection settings(string $label = null)
     * @method Grid\Column|Collection shopinfo(string $label = null)
     * @method Grid\Column|Collection carrypet(string $label = null)
     * @method Grid\Column|Collection guldid(string $label = null)
     * @method Grid\Column|Collection teamid(string $label = null)
     * @method Grid\Column|Collection headid(string $label = null)
     * @method Grid\Column|Collection erecover(string $label = null)
     * @method Grid\Column|Collection vigor(string $label = null)
     * @method Grid\Column|Collection maxvigor(string $label = null)
     * @method Grid\Column|Collection vrecover(string $label = null)
     * @method Grid\Column|Collection pwdeltime(string $label = null)
     * @method Grid\Column|Collection pinfo(string $label = null)
     * @method Grid\Column|Collection bkscene(string $label = null)
     * @method Grid\Column|Collection bkxpos(string $label = null)
     * @method Grid\Column|Collection bkzpos(string $label = null)
     * @method Grid\Column|Collection titleinfo(string $label = null)
     * @method Grid\Column|Collection dietime(string $label = null)
     * @method Grid\Column|Collection cooldown(string $label = null)
     * @method Grid\Column|Collection bankmoney(string $label = null)
     * @method Grid\Column|Collection bankend(string $label = null)
     * @method Grid\Column|Collection rage(string $label = null)
     * @method Grid\Column|Collection reserve(string $label = null)
     * @method Grid\Column|Collection dinfo(string $label = null)
     * @method Grid\Column|Collection defeq(string $label = null)
     * @method Grid\Column|Collection guildpoint(string $label = null)
     * @method Grid\Column|Collection menpaipoint(string $label = null)
     * @method Grid\Column|Collection gevil(string $label = null)
     * @method Grid\Column|Collection pkvalue(string $label = null)
     * @method Grid\Column|Collection otime(string $label = null)
     * @method Grid\Column|Collection deltime(string $label = null)
     * @method Grid\Column|Collection expinfo(string $label = null)
     * @method Grid\Column|Collection savetime(string $label = null)
     * @method Grid\Column|Collection pvpinfo(string $label = null)
     * @method Grid\Column|Collection loginip(string $label = null)
     * @method Grid\Column|Collection pkvaluetime(string $label = null)
     * @method Grid\Column|Collection fatigue(string $label = null)
     * @method Grid\Column|Collection yuanbao(string $label = null)
     * @method Grid\Column|Collection visualgem(string $label = null)
     * @method Grid\Column|Collection isolditem(string $label = null)
     * @method Grid\Column|Collection uipoint(string $label = null)
     * @method Grid\Column|Collection zengdian(string $label = null)
     * @method Grid\Column|Collection lastontime(string $label = null)
     * @method Grid\Column|Collection contri(string $label = null)
     * @method Grid\Column|Collection maxcoutri(string $label = null)
     * @method Grid\Column|Collection pwcontri(string $label = null)
     * @method Grid\Column|Collection cwcontri(string $label = null)
     * @method Grid\Column|Collection guildpostime(string $label = null)
     * @method Grid\Column|Collection access(string $label = null)
     * @method Grid\Column|Collection gptime(string $label = null)
     * @method Grid\Column|Collection lastdowntime(string $label = null)
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
     * @property Show\Field|Collection trade_no
     * @property Show\Field|Collection channel
     * @property Show\Field|Collection server_id
     * @property Show\Field|Collection account_id
     * @property Show\Field|Collection fee
     * @property Show\Field|Collection create_time
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection question
     * @property Show\Field|Collection answer
     * @property Show\Field|Collection qq
     * @property Show\Field|Collection tel
     * @property Show\Field|Collection address
     * @property Show\Field|Collection id_type
     * @property Show\Field|Collection id_card
     * @property Show\Field|Collection point
     * @property Show\Field|Collection aid
     * @property Show\Field|Collection charguid
     * @property Show\Field|Collection abid
     * @property Show\Field|Collection ablvl
     * @property Show\Field|Collection abexp
     * @property Show\Field|Collection dbversion
     * @property Show\Field|Collection isvalid
     * @property Show\Field|Collection worldid
     * @property Show\Field|Collection serverid
     * @property Show\Field|Collection poolid
     * @property Show\Field|Collection cshopid
     * @property Show\Field|Collection imdata
     * @property Show\Field|Collection xinfaid
     * @property Show\Field|Collection xinfalvl
     * @property Show\Field|Collection charname
     * @property Show\Field|Collection charlevel
     * @property Show\Field|Collection charsex
     * @property Show\Field|Collection charmenpai
     * @property Show\Field|Collection charguildname
     * @property Show\Field|Collection charismarried
     * @property Show\Field|Collection sendtime
     * @property Show\Field|Collection announcetext
     * @property Show\Field|Collection messageboard
     * @property Show\Field|Collection sender
     * @property Show\Field|Collection recer
     * @property Show\Field|Collection mailinfo
     * @property Show\Field|Collection mailcont
     * @property Show\Field|Collection pindex
     * @property Show\Field|Collection shopguid
     * @property Show\Field|Collection stallid
     * @property Show\Field|Collection stallunitid
     * @property Show\Field|Collection Box_OnSale
     * @property Show\Field|Collection Box_Price
     * @property Show\Field|Collection Itm_charguid
     * @property Show\Field|Collection Itm_guid
     * @property Show\Field|Collection Itm_world
     * @property Show\Field|Collection Itm_server
     * @property Show\Field|Collection Itm_itemtype
     * @property Show\Field|Collection Itm_pos
     * @property Show\Field|Collection Itm_p1
     * @property Show\Field|Collection Itm_p2
     * @property Show\Field|Collection Itm_p3
     * @property Show\Field|Collection Itm_p4
     * @property Show\Field|Collection Itm_p5
     * @property Show\Field|Collection Itm_p6
     * @property Show\Field|Collection Itm_p7
     * @property Show\Field|Collection Itm_p8
     * @property Show\Field|Collection Itm_p9
     * @property Show\Field|Collection Itm_p10
     * @property Show\Field|Collection Itm_p11
     * @property Show\Field|Collection Itm_p12
     * @property Show\Field|Collection Itm_p13
     * @property Show\Field|Collection Itm_p14
     * @property Show\Field|Collection Itm_p15
     * @property Show\Field|Collection Itm_p16
     * @property Show\Field|Collection Itm_p17
     * @property Show\Field|Collection Itm_creator
     * @property Show\Field|Collection Itm_isvalid
     * @property Show\Field|Collection Itm_dbversion
     * @property Show\Field|Collection Itm_fixattr
     * @property Show\Field|Collection Itm_var
     * @property Show\Field|Collection Itm_visualid
     * @property Show\Field|Collection Itm_maxgemid
     * @property Show\Field|Collection cshoppos
     * @property Show\Field|Collection serial
     * @property Show\Field|Collection gtype
     * @property Show\Field|Collection gvalue
     * @property Show\Field|Collection svalue
     * @property Show\Field|Collection ctime
     * @property Show\Field|Collection costctime
     * @property Show\Field|Collection sKey
     * @property Show\Field|Collection nVal
     * @property Show\Field|Collection hpetguid
     * @property Show\Field|Collection lpetguid
     * @property Show\Field|Collection dataxid
     * @property Show\Field|Collection petname
     * @property Show\Field|Collection petnick
     * @property Show\Field|Collection needlevel
     * @property Show\Field|Collection atttype
     * @property Show\Field|Collection aitype
     * @property Show\Field|Collection camp
     * @property Show\Field|Collection hp
     * @property Show\Field|Collection mp
     * @property Show\Field|Collection life
     * @property Show\Field|Collection pettype
     * @property Show\Field|Collection genera
     * @property Show\Field|Collection enjoy
     * @property Show\Field|Collection strper
     * @property Show\Field|Collection conper
     * @property Show\Field|Collection dexper
     * @property Show\Field|Collection sprper
     * @property Show\Field|Collection iprper
     * @property Show\Field|Collection gengu
     * @property Show\Field|Collection growrate
     * @property Show\Field|Collection repoint
     * @property Show\Field|Collection exp
     * @property Show\Field|Collection ipr
     * @property Show\Field|Collection skill
     * @property Show\Field|Collection flags
     * @property Show\Field|Collection pwflag
     * @property Show\Field|Collection pclvl
     * @property Show\Field|Collection hspetguid
     * @property Show\Field|Collection lspetguid
     * @property Show\Field|Collection savvy
     * @property Show\Field|Collection curtitle
     * @property Show\Field|Collection us_unlock_time
     * @property Show\Field|Collection us_reserve
     * @property Show\Field|Collection dataversion
     * @property Show\Field|Collection guildid
     * @property Show\Field|Collection guildname
     * @property Show\Field|Collection guildstat
     * @property Show\Field|Collection chiefguid
     * @property Show\Field|Collection pcount
     * @property Show\Field|Collection ucount
     * @property Show\Field|Collection mucount
     * @property Show\Field|Collection gpoint
     * @property Show\Field|Collection guildmoney
     * @property Show\Field|Collection cityid
     * @property Show\Field|Collection time
     * @property Show\Field|Collection logevity
     * @property Show\Field|Collection contribu
     * @property Show\Field|Collection honor
     * @property Show\Field|Collection indlvl
     * @property Show\Field|Collection agrlvl
     * @property Show\Field|Collection comlvl
     * @property Show\Field|Collection deflvl
     * @property Show\Field|Collection techlvl
     * @property Show\Field|Collection ambilvl
     * @property Show\Field|Collection admin
     * @property Show\Field|Collection guilddesc
     * @property Show\Field|Collection chiefname
     * @property Show\Field|Collection cname
     * @property Show\Field|Collection glvl
     * @property Show\Field|Collection guilduser
     * @property Show\Field|Collection guildmsg
     * @property Show\Field|Collection guildextra
     * @property Show\Field|Collection gnameinfo
     * @property Show\Field|Collection guildboom
     * @property Show\Field|Collection leagueid
     * @property Show\Field|Collection lqltime
     * @property Show\Field|Collection pairdata
     * @property Show\Field|Collection fguid
     * @property Show\Field|Collection fname
     * @property Show\Field|Collection fpoint
     * @property Show\Field|Collection reflag
     * @property Show\Field|Collection groupid
     * @property Show\Field|Collection extdata
     * @property Show\Field|Collection data1
     * @property Show\Field|Collection fixucount
     * @property Show\Field|Collection salarytime
     * @property Show\Field|Collection battle_succ
     * @property Show\Field|Collection battle_fail
     * @property Show\Field|Collection battle_score
     * @property Show\Field|Collection battle_kill
     * @property Show\Field|Collection battle_res
     * @property Show\Field|Collection week_suc0
     * @property Show\Field|Collection week_suc1
     * @property Show\Field|Collection week_suc2
     * @property Show\Field|Collection week_suc3
     * @property Show\Field|Collection week_fal0
     * @property Show\Field|Collection week_fal1
     * @property Show\Field|Collection week_fal2
     * @property Show\Field|Collection week_fal3
     * @property Show\Field|Collection fcityid1
     * @property Show\Field|Collection fboth1
     * @property Show\Field|Collection fcityid2
     * @property Show\Field|Collection fboth2
     * @property Show\Field|Collection fcityid3
     * @property Show\Field|Collection fboth3
     * @property Show\Field|Collection fcityid4
     * @property Show\Field|Collection fboth4
     * @property Show\Field|Collection fcityid5
     * @property Show\Field|Collection fboth5
     * @property Show\Field|Collection fcityid6
     * @property Show\Field|Collection fboth6
     * @property Show\Field|Collection fcityid7
     * @property Show\Field|Collection fboth7
     * @property Show\Field|Collection fcityid8
     * @property Show\Field|Collection fboth8
     * @property Show\Field|Collection fnum
     * @property Show\Field|Collection btime1
     * @property Show\Field|Collection bguild1
     * @property Show\Field|Collection bguild2
     * @property Show\Field|Collection btime2
     * @property Show\Field|Collection bguild3
     * @property Show\Field|Collection btime3
     * @property Show\Field|Collection bnum
     * @property Show\Field|Collection bdtype
     * @property Show\Field|Collection bdid
     * @property Show\Field|Collection bdlevel
     * @property Show\Field|Collection ri
     * @property Show\Field|Collection ricontri
     * @property Show\Field|Collection rimaxnum
     * @property Show\Field|Collection riprice
     * @property Show\Field|Collection ritvalue
     * @property Show\Field|Collection rivalid
     * @property Show\Field|Collection rinum
     * @property Show\Field|Collection citydata
     * @property Show\Field|Collection logouttime
     * @property Show\Field|Collection crc32
     * @property Show\Field|Collection fulldata
     * @property Show\Field|Collection isdelete
     * @property Show\Field|Collection server
     * @property Show\Field|Collection Pet_charguid
     * @property Show\Field|Collection Pet_hpetguid
     * @property Show\Field|Collection Pet_lpetguid
     * @property Show\Field|Collection Pet_dataxid
     * @property Show\Field|Collection Pet_petname
     * @property Show\Field|Collection Pet_petnick
     * @property Show\Field|Collection Pet_level
     * @property Show\Field|Collection Pet_needlevel
     * @property Show\Field|Collection Pet_atttype
     * @property Show\Field|Collection Pet_aitype
     * @property Show\Field|Collection Pet_camp
     * @property Show\Field|Collection Pet_hp
     * @property Show\Field|Collection Pet_mp
     * @property Show\Field|Collection Pet_life
     * @property Show\Field|Collection Pet_pettype
     * @property Show\Field|Collection Pet_genera
     * @property Show\Field|Collection Pet_enjoy
     * @property Show\Field|Collection Pet_strper
     * @property Show\Field|Collection Pet_conper
     * @property Show\Field|Collection Pet_dexper
     * @property Show\Field|Collection Pet_sprper
     * @property Show\Field|Collection Pet_iprper
     * @property Show\Field|Collection Pet_gengu
     * @property Show\Field|Collection Pet_growrate
     * @property Show\Field|Collection Pet_repoint
     * @property Show\Field|Collection Pet_exp
     * @property Show\Field|Collection Pet_str
     * @property Show\Field|Collection Pet_con
     * @property Show\Field|Collection Pet_dex
     * @property Show\Field|Collection Pet_spr
     * @property Show\Field|Collection Pet_ipr
     * @property Show\Field|Collection Pet_skill
     * @property Show\Field|Collection Pet_dbversion
     * @property Show\Field|Collection Pet_flags
     * @property Show\Field|Collection Pet_isvalid
     * @property Show\Field|Collection Pet_pwflag
     * @property Show\Field|Collection Pet_pclvl
     * @property Show\Field|Collection Pet_hspetguid
     * @property Show\Field|Collection Pet_lspetguid
     * @property Show\Field|Collection Pet_savvy
     * @property Show\Field|Collection Pet_title
     * @property Show\Field|Collection Pet_curtitle
     * @property Show\Field|Collection Pet_us_unlock_time
     * @property Show\Field|Collection Pet_us_reserve
     * @property Show\Field|Collection sid
     * @property Show\Field|Collection smkey
     * @property Show\Field|Collection skid
     * @property Show\Field|Collection sktime
     * @property Show\Field|Collection guildpos
     * @property Show\Field|Collection jointime
     * @property Show\Field|Collection Box_Status
     * @property Show\Field|Collection Box_Type
     * @property Show\Field|Collection Box_VldNum
     * @property Show\Field|Collection Box_FstPage
     * @property Show\Field|Collection Buy_StlRsv
     * @property Show\Field|Collection maxcharguid
     * @property Show\Field|Collection stat
     * @property Show\Field|Collection maxbmoney
     * @property Show\Field|Collection basemoney
     * @property Show\Field|Collection createtime
     * @property Show\Field|Collection shopname
     * @property Show\Field|Collection shopdesc
     * @property Show\Field|Collection ownername
     * @property Show\Field|Collection ownerguid
     * @property Show\Field|Collection isopen
     * @property Show\Field|Collection sale
     * @property Show\Field|Collection saleprice
     * @property Show\Field|Collection partner
     * @property Show\Field|Collection recoder
     * @property Show\Field|Collection stallinfo
     * @property Show\Field|Collection partnum
     * @property Show\Field|Collection subtype
     * @property Show\Field|Collection profit
     * @property Show\Field|Collection buyinfo
     * @property Show\Field|Collection freeze
     * @property Show\Field|Collection applypos
     * @property Show\Field|Collection applyguildid
     * @property Show\Field|Collection Buy_ItemNum
     * @property Show\Field|Collection Buy_ItemIdx
     * @property Show\Field|Collection Buy_Price
     * @property Show\Field|Collection Buy_InStlNum
     * @property Show\Field|Collection xflv
     * @property Show\Field|Collection id1all
     * @property Show\Field|Collection id2all
     * @property Show\Field|Collection id3all
     * @property Show\Field|Collection id4all
     * @property Show\Field|Collection id5all
     * @property Show\Field|Collection id6all
     * @property Show\Field|Collection id7all
     * @property Show\Field|Collection guid
     * @property Show\Field|Collection world
     * @property Show\Field|Collection itemtype
     * @property Show\Field|Collection pos
     * @property Show\Field|Collection p1
     * @property Show\Field|Collection p2
     * @property Show\Field|Collection p3
     * @property Show\Field|Collection p4
     * @property Show\Field|Collection p5
     * @property Show\Field|Collection p6
     * @property Show\Field|Collection p7
     * @property Show\Field|Collection p8
     * @property Show\Field|Collection p9
     * @property Show\Field|Collection p10
     * @property Show\Field|Collection p11
     * @property Show\Field|Collection p12
     * @property Show\Field|Collection p13
     * @property Show\Field|Collection p14
     * @property Show\Field|Collection p15
     * @property Show\Field|Collection p16
     * @property Show\Field|Collection p17
     * @property Show\Field|Collection creator
     * @property Show\Field|Collection fixattr
     * @property Show\Field|Collection var
     * @property Show\Field|Collection visualid
     * @property Show\Field|Collection maxgemid
     * @property Show\Field|Collection scene
     * @property Show\Field|Collection citylevel
     * @property Show\Field|Collection cityname
     * @property Show\Field|Collection cubprog
     * @property Show\Field|Collection mxbprog
     * @property Show\Field|Collection cusprog
     * @property Show\Field|Collection mxsprog
     * @property Show\Field|Collection curupbld
     * @property Show\Field|Collection mantain
     * @property Show\Field|Collection indrate
     * @property Show\Field|Collection argrate
     * @property Show\Field|Collection comrate
     * @property Show\Field|Collection defrate
     * @property Show\Field|Collection scirate
     * @property Show\Field|Collection extrate
     * @property Show\Field|Collection leftpoint
     * @property Show\Field|Collection cuspeifang
     * @property Show\Field|Collection cusbld
     * @property Show\Field|Collection smoney
     * @property Show\Field|Collection smoneyfix
     * @property Show\Field|Collection bmoney
     * @property Show\Field|Collection pmoney
     * @property Show\Field|Collection gmoneymax
     * @property Show\Field|Collection foundtime
     * @property Show\Field|Collection buydesc
     * @property Show\Field|Collection buyreserve
     * @property Show\Field|Collection leaguename
     * @property Show\Field|Collection leaguedesc
     * @property Show\Field|Collection creatorname
     * @property Show\Field|Collection applynum
     * @property Show\Field|Collection missionid
     * @property Show\Field|Collection scriptid
     * @property Show\Field|Collection flag
     * @property Show\Field|Collection buyyuanbao
     * @property Show\Field|Collection kmcount
     * @property Show\Field|Collection cmcount
     * @property Show\Field|Collection sbmoney
     * @property Show\Field|Collection sbunlock
     * @property Show\Field|Collection sbstatus
     * @property Show\Field|Collection ipregion
     * @property Show\Field|Collection petnumextra
     * @property Show\Field|Collection moneyjz
     * @property Show\Field|Collection accname
     * @property Show\Field|Collection pw
     * @property Show\Field|Collection sex
     * @property Show\Field|Collection enegry
     * @property Show\Field|Collection energymax
     * @property Show\Field|Collection outlook
     * @property Show\Field|Collection xpos
     * @property Show\Field|Collection zpos
     * @property Show\Field|Collection strikepoint
     * @property Show\Field|Collection points
     * @property Show\Field|Collection logintime
     * @property Show\Field|Collection haircolor
     * @property Show\Field|Collection hairmodel
     * @property Show\Field|Collection facecolor
     * @property Show\Field|Collection facemodel
     * @property Show\Field|Collection vmoney
     * @property Show\Field|Collection pres
     * @property Show\Field|Collection mdata
     * @property Show\Field|Collection mflag
     * @property Show\Field|Collection relflag
     * @property Show\Field|Collection settings
     * @property Show\Field|Collection shopinfo
     * @property Show\Field|Collection carrypet
     * @property Show\Field|Collection guldid
     * @property Show\Field|Collection teamid
     * @property Show\Field|Collection headid
     * @property Show\Field|Collection erecover
     * @property Show\Field|Collection vigor
     * @property Show\Field|Collection maxvigor
     * @property Show\Field|Collection vrecover
     * @property Show\Field|Collection pwdeltime
     * @property Show\Field|Collection pinfo
     * @property Show\Field|Collection bkscene
     * @property Show\Field|Collection bkxpos
     * @property Show\Field|Collection bkzpos
     * @property Show\Field|Collection titleinfo
     * @property Show\Field|Collection dietime
     * @property Show\Field|Collection cooldown
     * @property Show\Field|Collection bankmoney
     * @property Show\Field|Collection bankend
     * @property Show\Field|Collection rage
     * @property Show\Field|Collection reserve
     * @property Show\Field|Collection dinfo
     * @property Show\Field|Collection defeq
     * @property Show\Field|Collection guildpoint
     * @property Show\Field|Collection menpaipoint
     * @property Show\Field|Collection gevil
     * @property Show\Field|Collection pkvalue
     * @property Show\Field|Collection otime
     * @property Show\Field|Collection deltime
     * @property Show\Field|Collection expinfo
     * @property Show\Field|Collection savetime
     * @property Show\Field|Collection pvpinfo
     * @property Show\Field|Collection loginip
     * @property Show\Field|Collection pkvaluetime
     * @property Show\Field|Collection fatigue
     * @property Show\Field|Collection yuanbao
     * @property Show\Field|Collection visualgem
     * @property Show\Field|Collection isolditem
     * @property Show\Field|Collection uipoint
     * @property Show\Field|Collection zengdian
     * @property Show\Field|Collection lastontime
     * @property Show\Field|Collection contri
     * @property Show\Field|Collection maxcoutri
     * @property Show\Field|Collection pwcontri
     * @property Show\Field|Collection cwcontri
     * @property Show\Field|Collection guildpostime
     * @property Show\Field|Collection access
     * @property Show\Field|Collection gptime
     * @property Show\Field|Collection lastdowntime
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
     * @method Show\Field|Collection trade_no(string $label = null)
     * @method Show\Field|Collection channel(string $label = null)
     * @method Show\Field|Collection server_id(string $label = null)
     * @method Show\Field|Collection account_id(string $label = null)
     * @method Show\Field|Collection fee(string $label = null)
     * @method Show\Field|Collection create_time(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection question(string $label = null)
     * @method Show\Field|Collection answer(string $label = null)
     * @method Show\Field|Collection qq(string $label = null)
     * @method Show\Field|Collection tel(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection id_type(string $label = null)
     * @method Show\Field|Collection id_card(string $label = null)
     * @method Show\Field|Collection point(string $label = null)
     * @method Show\Field|Collection aid(string $label = null)
     * @method Show\Field|Collection charguid(string $label = null)
     * @method Show\Field|Collection abid(string $label = null)
     * @method Show\Field|Collection ablvl(string $label = null)
     * @method Show\Field|Collection abexp(string $label = null)
     * @method Show\Field|Collection dbversion(string $label = null)
     * @method Show\Field|Collection isvalid(string $label = null)
     * @method Show\Field|Collection worldid(string $label = null)
     * @method Show\Field|Collection serverid(string $label = null)
     * @method Show\Field|Collection poolid(string $label = null)
     * @method Show\Field|Collection cshopid(string $label = null)
     * @method Show\Field|Collection imdata(string $label = null)
     * @method Show\Field|Collection xinfaid(string $label = null)
     * @method Show\Field|Collection xinfalvl(string $label = null)
     * @method Show\Field|Collection charname(string $label = null)
     * @method Show\Field|Collection charlevel(string $label = null)
     * @method Show\Field|Collection charsex(string $label = null)
     * @method Show\Field|Collection charmenpai(string $label = null)
     * @method Show\Field|Collection charguildname(string $label = null)
     * @method Show\Field|Collection charismarried(string $label = null)
     * @method Show\Field|Collection sendtime(string $label = null)
     * @method Show\Field|Collection announcetext(string $label = null)
     * @method Show\Field|Collection messageboard(string $label = null)
     * @method Show\Field|Collection sender(string $label = null)
     * @method Show\Field|Collection recer(string $label = null)
     * @method Show\Field|Collection mailinfo(string $label = null)
     * @method Show\Field|Collection mailcont(string $label = null)
     * @method Show\Field|Collection pindex(string $label = null)
     * @method Show\Field|Collection shopguid(string $label = null)
     * @method Show\Field|Collection stallid(string $label = null)
     * @method Show\Field|Collection stallunitid(string $label = null)
     * @method Show\Field|Collection Box_OnSale(string $label = null)
     * @method Show\Field|Collection Box_Price(string $label = null)
     * @method Show\Field|Collection Itm_charguid(string $label = null)
     * @method Show\Field|Collection Itm_guid(string $label = null)
     * @method Show\Field|Collection Itm_world(string $label = null)
     * @method Show\Field|Collection Itm_server(string $label = null)
     * @method Show\Field|Collection Itm_itemtype(string $label = null)
     * @method Show\Field|Collection Itm_pos(string $label = null)
     * @method Show\Field|Collection Itm_p1(string $label = null)
     * @method Show\Field|Collection Itm_p2(string $label = null)
     * @method Show\Field|Collection Itm_p3(string $label = null)
     * @method Show\Field|Collection Itm_p4(string $label = null)
     * @method Show\Field|Collection Itm_p5(string $label = null)
     * @method Show\Field|Collection Itm_p6(string $label = null)
     * @method Show\Field|Collection Itm_p7(string $label = null)
     * @method Show\Field|Collection Itm_p8(string $label = null)
     * @method Show\Field|Collection Itm_p9(string $label = null)
     * @method Show\Field|Collection Itm_p10(string $label = null)
     * @method Show\Field|Collection Itm_p11(string $label = null)
     * @method Show\Field|Collection Itm_p12(string $label = null)
     * @method Show\Field|Collection Itm_p13(string $label = null)
     * @method Show\Field|Collection Itm_p14(string $label = null)
     * @method Show\Field|Collection Itm_p15(string $label = null)
     * @method Show\Field|Collection Itm_p16(string $label = null)
     * @method Show\Field|Collection Itm_p17(string $label = null)
     * @method Show\Field|Collection Itm_creator(string $label = null)
     * @method Show\Field|Collection Itm_isvalid(string $label = null)
     * @method Show\Field|Collection Itm_dbversion(string $label = null)
     * @method Show\Field|Collection Itm_fixattr(string $label = null)
     * @method Show\Field|Collection Itm_var(string $label = null)
     * @method Show\Field|Collection Itm_visualid(string $label = null)
     * @method Show\Field|Collection Itm_maxgemid(string $label = null)
     * @method Show\Field|Collection cshoppos(string $label = null)
     * @method Show\Field|Collection serial(string $label = null)
     * @method Show\Field|Collection gtype(string $label = null)
     * @method Show\Field|Collection gvalue(string $label = null)
     * @method Show\Field|Collection svalue(string $label = null)
     * @method Show\Field|Collection ctime(string $label = null)
     * @method Show\Field|Collection costctime(string $label = null)
     * @method Show\Field|Collection sKey(string $label = null)
     * @method Show\Field|Collection nVal(string $label = null)
     * @method Show\Field|Collection hpetguid(string $label = null)
     * @method Show\Field|Collection lpetguid(string $label = null)
     * @method Show\Field|Collection dataxid(string $label = null)
     * @method Show\Field|Collection petname(string $label = null)
     * @method Show\Field|Collection petnick(string $label = null)
     * @method Show\Field|Collection needlevel(string $label = null)
     * @method Show\Field|Collection atttype(string $label = null)
     * @method Show\Field|Collection aitype(string $label = null)
     * @method Show\Field|Collection camp(string $label = null)
     * @method Show\Field|Collection hp(string $label = null)
     * @method Show\Field|Collection mp(string $label = null)
     * @method Show\Field|Collection life(string $label = null)
     * @method Show\Field|Collection pettype(string $label = null)
     * @method Show\Field|Collection genera(string $label = null)
     * @method Show\Field|Collection enjoy(string $label = null)
     * @method Show\Field|Collection strper(string $label = null)
     * @method Show\Field|Collection conper(string $label = null)
     * @method Show\Field|Collection dexper(string $label = null)
     * @method Show\Field|Collection sprper(string $label = null)
     * @method Show\Field|Collection iprper(string $label = null)
     * @method Show\Field|Collection gengu(string $label = null)
     * @method Show\Field|Collection growrate(string $label = null)
     * @method Show\Field|Collection repoint(string $label = null)
     * @method Show\Field|Collection exp(string $label = null)
     * @method Show\Field|Collection ipr(string $label = null)
     * @method Show\Field|Collection skill(string $label = null)
     * @method Show\Field|Collection flags(string $label = null)
     * @method Show\Field|Collection pwflag(string $label = null)
     * @method Show\Field|Collection pclvl(string $label = null)
     * @method Show\Field|Collection hspetguid(string $label = null)
     * @method Show\Field|Collection lspetguid(string $label = null)
     * @method Show\Field|Collection savvy(string $label = null)
     * @method Show\Field|Collection curtitle(string $label = null)
     * @method Show\Field|Collection us_unlock_time(string $label = null)
     * @method Show\Field|Collection us_reserve(string $label = null)
     * @method Show\Field|Collection dataversion(string $label = null)
     * @method Show\Field|Collection guildid(string $label = null)
     * @method Show\Field|Collection guildname(string $label = null)
     * @method Show\Field|Collection guildstat(string $label = null)
     * @method Show\Field|Collection chiefguid(string $label = null)
     * @method Show\Field|Collection pcount(string $label = null)
     * @method Show\Field|Collection ucount(string $label = null)
     * @method Show\Field|Collection mucount(string $label = null)
     * @method Show\Field|Collection gpoint(string $label = null)
     * @method Show\Field|Collection guildmoney(string $label = null)
     * @method Show\Field|Collection cityid(string $label = null)
     * @method Show\Field|Collection time(string $label = null)
     * @method Show\Field|Collection logevity(string $label = null)
     * @method Show\Field|Collection contribu(string $label = null)
     * @method Show\Field|Collection honor(string $label = null)
     * @method Show\Field|Collection indlvl(string $label = null)
     * @method Show\Field|Collection agrlvl(string $label = null)
     * @method Show\Field|Collection comlvl(string $label = null)
     * @method Show\Field|Collection deflvl(string $label = null)
     * @method Show\Field|Collection techlvl(string $label = null)
     * @method Show\Field|Collection ambilvl(string $label = null)
     * @method Show\Field|Collection admin(string $label = null)
     * @method Show\Field|Collection guilddesc(string $label = null)
     * @method Show\Field|Collection chiefname(string $label = null)
     * @method Show\Field|Collection cname(string $label = null)
     * @method Show\Field|Collection glvl(string $label = null)
     * @method Show\Field|Collection guilduser(string $label = null)
     * @method Show\Field|Collection guildmsg(string $label = null)
     * @method Show\Field|Collection guildextra(string $label = null)
     * @method Show\Field|Collection gnameinfo(string $label = null)
     * @method Show\Field|Collection guildboom(string $label = null)
     * @method Show\Field|Collection leagueid(string $label = null)
     * @method Show\Field|Collection lqltime(string $label = null)
     * @method Show\Field|Collection pairdata(string $label = null)
     * @method Show\Field|Collection fguid(string $label = null)
     * @method Show\Field|Collection fname(string $label = null)
     * @method Show\Field|Collection fpoint(string $label = null)
     * @method Show\Field|Collection reflag(string $label = null)
     * @method Show\Field|Collection groupid(string $label = null)
     * @method Show\Field|Collection extdata(string $label = null)
     * @method Show\Field|Collection data1(string $label = null)
     * @method Show\Field|Collection fixucount(string $label = null)
     * @method Show\Field|Collection salarytime(string $label = null)
     * @method Show\Field|Collection battle_succ(string $label = null)
     * @method Show\Field|Collection battle_fail(string $label = null)
     * @method Show\Field|Collection battle_score(string $label = null)
     * @method Show\Field|Collection battle_kill(string $label = null)
     * @method Show\Field|Collection battle_res(string $label = null)
     * @method Show\Field|Collection week_suc0(string $label = null)
     * @method Show\Field|Collection week_suc1(string $label = null)
     * @method Show\Field|Collection week_suc2(string $label = null)
     * @method Show\Field|Collection week_suc3(string $label = null)
     * @method Show\Field|Collection week_fal0(string $label = null)
     * @method Show\Field|Collection week_fal1(string $label = null)
     * @method Show\Field|Collection week_fal2(string $label = null)
     * @method Show\Field|Collection week_fal3(string $label = null)
     * @method Show\Field|Collection fcityid1(string $label = null)
     * @method Show\Field|Collection fboth1(string $label = null)
     * @method Show\Field|Collection fcityid2(string $label = null)
     * @method Show\Field|Collection fboth2(string $label = null)
     * @method Show\Field|Collection fcityid3(string $label = null)
     * @method Show\Field|Collection fboth3(string $label = null)
     * @method Show\Field|Collection fcityid4(string $label = null)
     * @method Show\Field|Collection fboth4(string $label = null)
     * @method Show\Field|Collection fcityid5(string $label = null)
     * @method Show\Field|Collection fboth5(string $label = null)
     * @method Show\Field|Collection fcityid6(string $label = null)
     * @method Show\Field|Collection fboth6(string $label = null)
     * @method Show\Field|Collection fcityid7(string $label = null)
     * @method Show\Field|Collection fboth7(string $label = null)
     * @method Show\Field|Collection fcityid8(string $label = null)
     * @method Show\Field|Collection fboth8(string $label = null)
     * @method Show\Field|Collection fnum(string $label = null)
     * @method Show\Field|Collection btime1(string $label = null)
     * @method Show\Field|Collection bguild1(string $label = null)
     * @method Show\Field|Collection bguild2(string $label = null)
     * @method Show\Field|Collection btime2(string $label = null)
     * @method Show\Field|Collection bguild3(string $label = null)
     * @method Show\Field|Collection btime3(string $label = null)
     * @method Show\Field|Collection bnum(string $label = null)
     * @method Show\Field|Collection bdtype(string $label = null)
     * @method Show\Field|Collection bdid(string $label = null)
     * @method Show\Field|Collection bdlevel(string $label = null)
     * @method Show\Field|Collection ri(string $label = null)
     * @method Show\Field|Collection ricontri(string $label = null)
     * @method Show\Field|Collection rimaxnum(string $label = null)
     * @method Show\Field|Collection riprice(string $label = null)
     * @method Show\Field|Collection ritvalue(string $label = null)
     * @method Show\Field|Collection rivalid(string $label = null)
     * @method Show\Field|Collection rinum(string $label = null)
     * @method Show\Field|Collection citydata(string $label = null)
     * @method Show\Field|Collection logouttime(string $label = null)
     * @method Show\Field|Collection crc32(string $label = null)
     * @method Show\Field|Collection fulldata(string $label = null)
     * @method Show\Field|Collection isdelete(string $label = null)
     * @method Show\Field|Collection server(string $label = null)
     * @method Show\Field|Collection Pet_charguid(string $label = null)
     * @method Show\Field|Collection Pet_hpetguid(string $label = null)
     * @method Show\Field|Collection Pet_lpetguid(string $label = null)
     * @method Show\Field|Collection Pet_dataxid(string $label = null)
     * @method Show\Field|Collection Pet_petname(string $label = null)
     * @method Show\Field|Collection Pet_petnick(string $label = null)
     * @method Show\Field|Collection Pet_level(string $label = null)
     * @method Show\Field|Collection Pet_needlevel(string $label = null)
     * @method Show\Field|Collection Pet_atttype(string $label = null)
     * @method Show\Field|Collection Pet_aitype(string $label = null)
     * @method Show\Field|Collection Pet_camp(string $label = null)
     * @method Show\Field|Collection Pet_hp(string $label = null)
     * @method Show\Field|Collection Pet_mp(string $label = null)
     * @method Show\Field|Collection Pet_life(string $label = null)
     * @method Show\Field|Collection Pet_pettype(string $label = null)
     * @method Show\Field|Collection Pet_genera(string $label = null)
     * @method Show\Field|Collection Pet_enjoy(string $label = null)
     * @method Show\Field|Collection Pet_strper(string $label = null)
     * @method Show\Field|Collection Pet_conper(string $label = null)
     * @method Show\Field|Collection Pet_dexper(string $label = null)
     * @method Show\Field|Collection Pet_sprper(string $label = null)
     * @method Show\Field|Collection Pet_iprper(string $label = null)
     * @method Show\Field|Collection Pet_gengu(string $label = null)
     * @method Show\Field|Collection Pet_growrate(string $label = null)
     * @method Show\Field|Collection Pet_repoint(string $label = null)
     * @method Show\Field|Collection Pet_exp(string $label = null)
     * @method Show\Field|Collection Pet_str(string $label = null)
     * @method Show\Field|Collection Pet_con(string $label = null)
     * @method Show\Field|Collection Pet_dex(string $label = null)
     * @method Show\Field|Collection Pet_spr(string $label = null)
     * @method Show\Field|Collection Pet_ipr(string $label = null)
     * @method Show\Field|Collection Pet_skill(string $label = null)
     * @method Show\Field|Collection Pet_dbversion(string $label = null)
     * @method Show\Field|Collection Pet_flags(string $label = null)
     * @method Show\Field|Collection Pet_isvalid(string $label = null)
     * @method Show\Field|Collection Pet_pwflag(string $label = null)
     * @method Show\Field|Collection Pet_pclvl(string $label = null)
     * @method Show\Field|Collection Pet_hspetguid(string $label = null)
     * @method Show\Field|Collection Pet_lspetguid(string $label = null)
     * @method Show\Field|Collection Pet_savvy(string $label = null)
     * @method Show\Field|Collection Pet_title(string $label = null)
     * @method Show\Field|Collection Pet_curtitle(string $label = null)
     * @method Show\Field|Collection Pet_us_unlock_time(string $label = null)
     * @method Show\Field|Collection Pet_us_reserve(string $label = null)
     * @method Show\Field|Collection sid(string $label = null)
     * @method Show\Field|Collection smkey(string $label = null)
     * @method Show\Field|Collection skid(string $label = null)
     * @method Show\Field|Collection sktime(string $label = null)
     * @method Show\Field|Collection guildpos(string $label = null)
     * @method Show\Field|Collection jointime(string $label = null)
     * @method Show\Field|Collection Box_Status(string $label = null)
     * @method Show\Field|Collection Box_Type(string $label = null)
     * @method Show\Field|Collection Box_VldNum(string $label = null)
     * @method Show\Field|Collection Box_FstPage(string $label = null)
     * @method Show\Field|Collection Buy_StlRsv(string $label = null)
     * @method Show\Field|Collection maxcharguid(string $label = null)
     * @method Show\Field|Collection stat(string $label = null)
     * @method Show\Field|Collection maxbmoney(string $label = null)
     * @method Show\Field|Collection basemoney(string $label = null)
     * @method Show\Field|Collection createtime(string $label = null)
     * @method Show\Field|Collection shopname(string $label = null)
     * @method Show\Field|Collection shopdesc(string $label = null)
     * @method Show\Field|Collection ownername(string $label = null)
     * @method Show\Field|Collection ownerguid(string $label = null)
     * @method Show\Field|Collection isopen(string $label = null)
     * @method Show\Field|Collection sale(string $label = null)
     * @method Show\Field|Collection saleprice(string $label = null)
     * @method Show\Field|Collection partner(string $label = null)
     * @method Show\Field|Collection recoder(string $label = null)
     * @method Show\Field|Collection stallinfo(string $label = null)
     * @method Show\Field|Collection partnum(string $label = null)
     * @method Show\Field|Collection subtype(string $label = null)
     * @method Show\Field|Collection profit(string $label = null)
     * @method Show\Field|Collection buyinfo(string $label = null)
     * @method Show\Field|Collection freeze(string $label = null)
     * @method Show\Field|Collection applypos(string $label = null)
     * @method Show\Field|Collection applyguildid(string $label = null)
     * @method Show\Field|Collection Buy_ItemNum(string $label = null)
     * @method Show\Field|Collection Buy_ItemIdx(string $label = null)
     * @method Show\Field|Collection Buy_Price(string $label = null)
     * @method Show\Field|Collection Buy_InStlNum(string $label = null)
     * @method Show\Field|Collection xflv(string $label = null)
     * @method Show\Field|Collection id1all(string $label = null)
     * @method Show\Field|Collection id2all(string $label = null)
     * @method Show\Field|Collection id3all(string $label = null)
     * @method Show\Field|Collection id4all(string $label = null)
     * @method Show\Field|Collection id5all(string $label = null)
     * @method Show\Field|Collection id6all(string $label = null)
     * @method Show\Field|Collection id7all(string $label = null)
     * @method Show\Field|Collection guid(string $label = null)
     * @method Show\Field|Collection world(string $label = null)
     * @method Show\Field|Collection itemtype(string $label = null)
     * @method Show\Field|Collection pos(string $label = null)
     * @method Show\Field|Collection p1(string $label = null)
     * @method Show\Field|Collection p2(string $label = null)
     * @method Show\Field|Collection p3(string $label = null)
     * @method Show\Field|Collection p4(string $label = null)
     * @method Show\Field|Collection p5(string $label = null)
     * @method Show\Field|Collection p6(string $label = null)
     * @method Show\Field|Collection p7(string $label = null)
     * @method Show\Field|Collection p8(string $label = null)
     * @method Show\Field|Collection p9(string $label = null)
     * @method Show\Field|Collection p10(string $label = null)
     * @method Show\Field|Collection p11(string $label = null)
     * @method Show\Field|Collection p12(string $label = null)
     * @method Show\Field|Collection p13(string $label = null)
     * @method Show\Field|Collection p14(string $label = null)
     * @method Show\Field|Collection p15(string $label = null)
     * @method Show\Field|Collection p16(string $label = null)
     * @method Show\Field|Collection p17(string $label = null)
     * @method Show\Field|Collection creator(string $label = null)
     * @method Show\Field|Collection fixattr(string $label = null)
     * @method Show\Field|Collection var(string $label = null)
     * @method Show\Field|Collection visualid(string $label = null)
     * @method Show\Field|Collection maxgemid(string $label = null)
     * @method Show\Field|Collection scene(string $label = null)
     * @method Show\Field|Collection citylevel(string $label = null)
     * @method Show\Field|Collection cityname(string $label = null)
     * @method Show\Field|Collection cubprog(string $label = null)
     * @method Show\Field|Collection mxbprog(string $label = null)
     * @method Show\Field|Collection cusprog(string $label = null)
     * @method Show\Field|Collection mxsprog(string $label = null)
     * @method Show\Field|Collection curupbld(string $label = null)
     * @method Show\Field|Collection mantain(string $label = null)
     * @method Show\Field|Collection indrate(string $label = null)
     * @method Show\Field|Collection argrate(string $label = null)
     * @method Show\Field|Collection comrate(string $label = null)
     * @method Show\Field|Collection defrate(string $label = null)
     * @method Show\Field|Collection scirate(string $label = null)
     * @method Show\Field|Collection extrate(string $label = null)
     * @method Show\Field|Collection leftpoint(string $label = null)
     * @method Show\Field|Collection cuspeifang(string $label = null)
     * @method Show\Field|Collection cusbld(string $label = null)
     * @method Show\Field|Collection smoney(string $label = null)
     * @method Show\Field|Collection smoneyfix(string $label = null)
     * @method Show\Field|Collection bmoney(string $label = null)
     * @method Show\Field|Collection pmoney(string $label = null)
     * @method Show\Field|Collection gmoneymax(string $label = null)
     * @method Show\Field|Collection foundtime(string $label = null)
     * @method Show\Field|Collection buydesc(string $label = null)
     * @method Show\Field|Collection buyreserve(string $label = null)
     * @method Show\Field|Collection leaguename(string $label = null)
     * @method Show\Field|Collection leaguedesc(string $label = null)
     * @method Show\Field|Collection creatorname(string $label = null)
     * @method Show\Field|Collection applynum(string $label = null)
     * @method Show\Field|Collection missionid(string $label = null)
     * @method Show\Field|Collection scriptid(string $label = null)
     * @method Show\Field|Collection flag(string $label = null)
     * @method Show\Field|Collection buyyuanbao(string $label = null)
     * @method Show\Field|Collection kmcount(string $label = null)
     * @method Show\Field|Collection cmcount(string $label = null)
     * @method Show\Field|Collection sbmoney(string $label = null)
     * @method Show\Field|Collection sbunlock(string $label = null)
     * @method Show\Field|Collection sbstatus(string $label = null)
     * @method Show\Field|Collection ipregion(string $label = null)
     * @method Show\Field|Collection petnumextra(string $label = null)
     * @method Show\Field|Collection moneyjz(string $label = null)
     * @method Show\Field|Collection accname(string $label = null)
     * @method Show\Field|Collection pw(string $label = null)
     * @method Show\Field|Collection sex(string $label = null)
     * @method Show\Field|Collection enegry(string $label = null)
     * @method Show\Field|Collection energymax(string $label = null)
     * @method Show\Field|Collection outlook(string $label = null)
     * @method Show\Field|Collection xpos(string $label = null)
     * @method Show\Field|Collection zpos(string $label = null)
     * @method Show\Field|Collection strikepoint(string $label = null)
     * @method Show\Field|Collection points(string $label = null)
     * @method Show\Field|Collection logintime(string $label = null)
     * @method Show\Field|Collection haircolor(string $label = null)
     * @method Show\Field|Collection hairmodel(string $label = null)
     * @method Show\Field|Collection facecolor(string $label = null)
     * @method Show\Field|Collection facemodel(string $label = null)
     * @method Show\Field|Collection vmoney(string $label = null)
     * @method Show\Field|Collection pres(string $label = null)
     * @method Show\Field|Collection mdata(string $label = null)
     * @method Show\Field|Collection mflag(string $label = null)
     * @method Show\Field|Collection relflag(string $label = null)
     * @method Show\Field|Collection settings(string $label = null)
     * @method Show\Field|Collection shopinfo(string $label = null)
     * @method Show\Field|Collection carrypet(string $label = null)
     * @method Show\Field|Collection guldid(string $label = null)
     * @method Show\Field|Collection teamid(string $label = null)
     * @method Show\Field|Collection headid(string $label = null)
     * @method Show\Field|Collection erecover(string $label = null)
     * @method Show\Field|Collection vigor(string $label = null)
     * @method Show\Field|Collection maxvigor(string $label = null)
     * @method Show\Field|Collection vrecover(string $label = null)
     * @method Show\Field|Collection pwdeltime(string $label = null)
     * @method Show\Field|Collection pinfo(string $label = null)
     * @method Show\Field|Collection bkscene(string $label = null)
     * @method Show\Field|Collection bkxpos(string $label = null)
     * @method Show\Field|Collection bkzpos(string $label = null)
     * @method Show\Field|Collection titleinfo(string $label = null)
     * @method Show\Field|Collection dietime(string $label = null)
     * @method Show\Field|Collection cooldown(string $label = null)
     * @method Show\Field|Collection bankmoney(string $label = null)
     * @method Show\Field|Collection bankend(string $label = null)
     * @method Show\Field|Collection rage(string $label = null)
     * @method Show\Field|Collection reserve(string $label = null)
     * @method Show\Field|Collection dinfo(string $label = null)
     * @method Show\Field|Collection defeq(string $label = null)
     * @method Show\Field|Collection guildpoint(string $label = null)
     * @method Show\Field|Collection menpaipoint(string $label = null)
     * @method Show\Field|Collection gevil(string $label = null)
     * @method Show\Field|Collection pkvalue(string $label = null)
     * @method Show\Field|Collection otime(string $label = null)
     * @method Show\Field|Collection deltime(string $label = null)
     * @method Show\Field|Collection expinfo(string $label = null)
     * @method Show\Field|Collection savetime(string $label = null)
     * @method Show\Field|Collection pvpinfo(string $label = null)
     * @method Show\Field|Collection loginip(string $label = null)
     * @method Show\Field|Collection pkvaluetime(string $label = null)
     * @method Show\Field|Collection fatigue(string $label = null)
     * @method Show\Field|Collection yuanbao(string $label = null)
     * @method Show\Field|Collection visualgem(string $label = null)
     * @method Show\Field|Collection isolditem(string $label = null)
     * @method Show\Field|Collection uipoint(string $label = null)
     * @method Show\Field|Collection zengdian(string $label = null)
     * @method Show\Field|Collection lastontime(string $label = null)
     * @method Show\Field|Collection contri(string $label = null)
     * @method Show\Field|Collection maxcoutri(string $label = null)
     * @method Show\Field|Collection pwcontri(string $label = null)
     * @method Show\Field|Collection cwcontri(string $label = null)
     * @method Show\Field|Collection guildpostime(string $label = null)
     * @method Show\Field|Collection access(string $label = null)
     * @method Show\Field|Collection gptime(string $label = null)
     * @method Show\Field|Collection lastdowntime(string $label = null)
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
