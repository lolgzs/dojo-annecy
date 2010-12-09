<?php
require_once 'MessageNotUnderstood.php';

class Post {
	protected $title;
	protected $content;
	protected $tags;

	public function __call($method_name,$args) {
		if (!preg_match('/(get|set)(\w+)/', $method_name, $matches))
			throw new MessageNotUnderstood($method_name);

		$field = strtolower($matches[2]);
		$accessor = $matches[1];

		if (false === property_exists($this, $field)) 
			throw new MessageNotUnderstood($method_name);

		if ($accessor == "get")
			return $this->$field;

		$this->$field = $args[0];
	}
}
?>