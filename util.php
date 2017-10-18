<?php


require_once ("libs/ahocorasick.php");
require_once ("answer.php");

class Util {

	public $configuration = array();

	function __construct($configuration) {
		$this->configuration = $configuration;
	}

	function mapToAction($text) {
		$map = $this->build_mapp($this->configuration);
		$result = $this->convert($text, $map);
		//echo $result;
		$actions = array();
		$max = 1;
		$action_name = '';

		if($result !== '') {
			$keys = explode(',', $result);
			foreach($keys as $key) {
				$action = $map[$key];
				if(isset($actions[$action])) {
					$actions[$action]++;

					if($actions[$action] > $max) {
						$action_name = $action;
						$max = $actions[$action];
					}
				} else {
					$actions[$action] = 1;

					if($action_name === '') {
						$action_name = $action;
						$max = 1;
					}
				}
			}
		}

		return $action_name;
	}

	public function getAnswer($text) {
		$action = $this->mapToAction($text);
		if($action == '') $action = 'info';

		$answer = new Answer();
		switch ($action) {
			case 'map':
				return $answer->map();
				break;

			case 'time':
				return $answer->time();
				break;	
			case 'picture':
				return $answer->picture();
				break;
			default:
				return $answer->time();
				break;
		}
	}



	private function convert($text, $map) {
		$tree = new Ahocorasick\Ahocorasick();
		//echo 'text: ' . $text . '<br>';
		foreach($map as $key => $action) {
		//	echo 'key: ' . $key . ' <br>';
			$tree->add($key);
		}
		
		return $tree->match($text);
	}

	private function build_mapp($configuration) {
		$keys = array();
		foreach($configuration as $action => $keywords) {
			foreach($keywords as $keyword) {
				$keys[$keyword] = $action;
			}
		}

		return $keys;
	}
}