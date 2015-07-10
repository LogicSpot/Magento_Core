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

class LogicSpot_Core_Model_Design_Package extends Mage_Core_Model_Design_Package
{
	/**
	 * Before merge css callback function
	 *
	 * @param string $file
	 * @param string $contents
	 * @return string
	 */
	//TODO: Check with possible conflicts with AoE_JsCssTimestamp
	public function beforeMergeCss($file, $contents)
	{
		$this->_setCallbackFileDir($file);
		$cssImport = '/@import\\s+([\'"])(.*?)[\'"]/';
		$contents = preg_replace_callback($cssImport, array($this, '_cssMergerImportCallback'), $contents);

		$cssUrl = '/url\\(\\s*(?![\"\']?data:)([^)]+)\\)/';
		$contents = preg_replace_callback($cssUrl, array($this, '_cssMergerUrlCallback'), $contents);

		return $contents;
	}
}
