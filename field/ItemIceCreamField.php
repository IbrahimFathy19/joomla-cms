<?php


// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');


defined('JPATH_BASE') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Form\FormHelper;
JFormHelper::loadFieldClass('list');

jimport('joomla.form.formfield'); 

class ItemIceCreamField extends \JFormFieldList
{

	//The field class must know its own type through the variable $type.
	protected $type = 'icecream';

	public function getOptions() {

        $json = file_get_contents(JPATH::base());
        $json_data = json_decode($json);
        foreach ($json_data as $value) {
            $ice_cream_flavors[] = $value->flavor;
        }
        // Merge any additional options in the XML definition.
        $options = array_merge(parent::getOptions(), $ice_cream_flavors);
        return $options;
       
}
}
