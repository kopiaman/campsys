<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate);
	}
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{
	}
	
	function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	function init()
	{
				if($this->pageObject->tName=="course" && $this->field=="color")
	{
		$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		return;
	}	
	}
}
?>