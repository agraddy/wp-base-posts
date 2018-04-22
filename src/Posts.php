<?php
namespace agraddy\base;

class Posts {
	public $config = [];

	function __construct() {
	}

	function config($key, $value) {
		$this->config[$key] = $value;
	}
}

?>
