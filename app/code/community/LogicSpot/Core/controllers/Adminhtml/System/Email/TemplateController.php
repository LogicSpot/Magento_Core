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

include_once("Mage/Adminhtml/controllers/System/Email/TemplateController.php");
class LogicSpot_Core_Adminhtml_System_Email_TemplateController extends Mage_Adminhtml_System_Email_TemplateController
{
    /**
     * Set template data to retrieve it in template info form
     */
    public function defaultTemplateAction()
    {
        if (function_exists('newrelic_disable_autorum')) {
            newrelic_disable_autorum();
        }
        parent::defaultTemplateAction();
    }
}
