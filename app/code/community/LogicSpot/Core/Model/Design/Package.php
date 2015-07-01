<?php
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
