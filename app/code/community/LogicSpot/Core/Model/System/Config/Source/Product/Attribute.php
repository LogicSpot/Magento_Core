<?php
/**
 * LogicSpot_Core
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @category    LogicSpot
 * @package     LogicSpot_Core
 * @copyright   Copyright (c) 2015 LogicSpot (http://www.logicspot.com)
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License v3.0
 */

/**
 * Attribute options source
 *
 * @category    LogicSpot
 * @package     LogicSpot_Core
 * @author      Kamil Szewczyk <kamil@logicspot.com>
 */
class LogicSpot_Core_Model_System_Config_Source_Product_Attribute
{

	/**
	 * Return array of options to be used as select field source
	 *
	 * @param $attributeCode
	 * @param bool $addEmpty
	 * @return array
	 */
	public function toOptionArray($attributeCode, $addEmpty = true)
	{
		$options = array();
		$attribute = Mage::getSingleton('eav/config')->getAttribute('catalog_product', $attributeCode);

		if (!$attribute) {
			return $options;
		}

		if ($attribute->usesSource()) {
			$options = $attribute->getSource()->getAllOptions($addEmpty);
		}

		return $options;
	}
}
