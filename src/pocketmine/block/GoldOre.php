<?php
/**
 * src/pocketmine/block/GoldOre.php
 *
 * @package default
 */


/*
 *
 *  _                       _           _ __  __ _
 * (_)                     (_)         | |  \/  (_)
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___|
 *                     __/ |
 *                    |___/
 *
 * This program is a third party build by ImagicalMine.
 *
 * PocketMine is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ImagicalMine Team
 * @link http://forums.imagicalcorp.ml/
 *
 *
*/

namespace pocketmine\block;

use pocketmine\item\Item;
use pocketmine\item\Tool;

class GoldOre extends Solid{

	protected $id = self::GOLD_ORE;

	/**
	 *
	 */
	public function __construct() {

	}


	/**
	 *
	 * @return unknown
	 */
	public function getName() {
		return "Gold Ore";
	}


	/**
	 *
	 * @return unknown
	 */
	public function getHardness() {
		return 3;
	}


	/**
	 *
	 * @return unknown
	 */
	public function getToolType() {
		return Tool::TYPE_PICKAXE;
	}


	/**
	 *
	 * @param Item    $item
	 * @return unknown
	 */
	public function getDrops(Item $item) {
		if ($item->isPickaxe() >= Tool::TIER_IRON) {
			return [
				[Item::GOLD_ORE, 0, 1],
			];
		}else {
			return [];
		}
	}


}
