<?php
include_once("Mage/Adminhtml/controllers/System/Email/TemplateController.php");
class LogicSpot_Core_System_Email_TemplateController extends Mage_Adminhtml_System_Email_TemplateController
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