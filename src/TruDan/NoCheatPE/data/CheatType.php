<?php
/**
 * NoCheatPE
 *
 * @class CheatType
 *
 * User: Dan
 * Date: 11/02/2015
 * Time: 17:42
 */

namespace TruDan\NoCheatPE\data;

class CheatType {

	const PLAYER_MOVEMENT_EXCESS_SPEED		= 1;
	const PLAYER_MOVEMENT_EXCESS_FLY		= 2;
	const PLAYER_MOVEMENT_EXCESS_PACKETS	= 3;
	const PLAYER_MOVEMENT_NOCLIP			= 4;
	const PLAYER_MOVEMENT_EXCESS_FLY_SPEED	= 5;

	const BLOCK_INTERACTION_DISTANCE 	= 6;
	const BLOCK_INTERACTION_NOT_VISIBLE = 7;
	const BLOCK_INTERACTION_SPAM		= 8;

	const BLOCK_PLACE_EXCESS_SPEED		= 9;
	const BLOCK_PLACE_EXCESS_DISTANCE	= 10;

	const PLAYER_PROJECTILE_EXCESS_SPEED	= 11;
	const PLAYER_CHAT_EXCESS_SPEED			= 12;
	const PLAYER_INVENTORY_EXCESS_DROP		= 13;
	const PLAYER_INVENTORY_EXCESS_MANAGE	= 14;

	const PLAYER_ATTACK_TOO_MANY_ENTITIES	= 15;
	const PLAYER_ATTACK_OUT_OF_RANGE		= 16;
	const PLAYER_ATTACK_TOO_MANY_ATTACK		= 17;
	const PLAYER_ATTACK_FORCE_FIELD			= 18;
	const PLAYER_ATTACK_SELF				= 19;

	public static function getName($cheatTypeValue) {
		$class = new \ReflectionClass(self::class);
		$constants = $class->getConstants();

		$constName = null;
		foreach($constants as $name => $value) {
			if($value == $cheatTypeValue) {
				$constName = $name;
				break;
			}
		}

		return $constName;
	}

}