<?php
class Template {
	private $vars = array();

	public function assign($key, $value) {
		$this->vars[$key] = $value;
	}
}
?>