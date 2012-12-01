<?php

class OrbitWidget extends CWidget {
	const SCRIPTNAME = '/jquery.foundation.orbit.js';

	public $images = array();

	public function run(){
		$this->registerClientScript();

		echo '<div id="slider">';
		foreach($this->images as $item)
			echo '<img src="' . $item . '"/>';
		echo '</div>';
	}

	public function registerClientScript(){
		$cs = Yii::app()->getClientScript();
		$cs->registerCoreScript('jquery');
		$assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets');
		$cs->registerScript('OrbitInit',
			"$(window).load(function () {
                $('#slider').orbit();
            });",
			CClientScript::POS_END);
		$cs->registerScriptFile($assets . self::SCRIPTNAME, CClientScript::POS_END);
	}
}

?>
