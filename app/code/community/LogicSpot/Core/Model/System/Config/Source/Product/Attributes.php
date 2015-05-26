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
 * Attributes source
 *
 * @category    LogicSpot
 * @package     LogicSpot_Core
 * @author      Kamil Szewczyk <kamil@logicspot.com>
 */
class LogicSpot_Core_Model_System_Config_Source_Product_Attributes
{
	protected $_options = array();

	/**
	 * Return array of attributes to be used as select field source
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		if (!$this->_options) {
			$attributes = Mage::getResourceModel('catalog/product_attribute_collection')
				->addVisibleFilter()
				->addFieldToFilter('frontend_input', array('text', 'select', 'textarea', 'multiselect'));

			$this->_options[] = array(
				'label' => Mage::helper('core')->__('-- Select attribute --'),
				'value' => ''
			);

			foreach ($attributes as $attribute) {
				$this->_options[] = array(
					'label' => $attribute->getData('frontend_label'),
					'value' => $attribute->getData('attribute_code')
				);
			}
		}

		return $this->_options;
	}
}
