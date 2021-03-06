<?php



require_once ("libs/MultiStringMatcher.php");
require_once ("answer.php");
use AhoCorasick\MultiStringMatcher;

class Util {

	public $configuration = array();
	public $file_name = "user.json";

	function __construct($configuration) {
		$this->configuration = $configuration;
	}

	function mapToAction($text) {
		$map = $this->buildMapp($this->configuration);
		$result = $this->convert($text, $map);
		print_r($result);
		$actions = array();
		$max = 1;
		$action_name = '';

		if(is_array($result) && count($result) > 0) {
			//$keys = explode(',', $result);
			//print_r($result);
			//exit;
			foreach($result as $value) {
				$action = $map[$value[1]];
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
		echo 'action : ' . $action;
		if($action == '') $action = 'no anwser';

		$answer = new Answer();
		switch ($action) {
			case 'map':
				return '[' . $answer->gotAnswer() . ',' . $answer->map_ceremony() . ']';
				break;
			
			case 'info':
				return '[' .  $answer->time_ceremony() . ',' . $answer->map_ceremony() . ']';
				break;

			case 'church_info':
				return '[' . $answer->gotAnswer() . ',' .  $answer->time_church() . ',' . $answer->map_church() . ']';
				break;

			case 'time':
				return '[' . $answer->gotAnswer() . ',' . $answer->time_ceremony() . ']';
				break;	

			case 'picture':
				return '[' . $answer->picture() . ']';
				break;

			case 'theme':
				return '[' . $answer->theme() . ']';
				break;

			case 'ch_park':
				return '[' . $answer->church_park() . ']';
				break;
			
			case 'food':
				return '[' . $answer->food() . ']';
				break;

			case 'groom':
				return '[' . $answer->groom() . ']';
				break;

			case 'bride':
				return '[' . $answer->bride() . ']';
				break;

			case 'park':
				return '[' . $answer->park() . ']';
				break;

			case 'hello':
				return '[' . $answer->hello() . ']';
				break;

			case 'disturb':
				return '[' . $answer->disturb() . ']';
				break;
			default:
				return '[' . $answer->dont_know() . ']';
				break;
		}
	}



	private function convert($text, $map) {

		$keys = array();
		foreach($map as $key => $action) {
			$keys[] = $key;
		}

		$keywords = new MultiStringMatcher( $keys );
		return $keywords->searchIn( $text );


		/*$tree = new Ahocorasick\Ahocorasick();
		echo 'text: ' . $text . '<br>';
		foreach($map as $key => $action) {
			echo 'key: ' . $key . ' <br>';
			$tree->add($key);
		}
		
		return $tree->match($text);*/
	}

	private function buildMapp($configuration) {
		$keys = array();
		foreach($configuration as $action => $keywords) {
			foreach($keywords as $keyword) {
				$keys[$keyword] = $action;
			}
		}

		return $keys;
	}

	
}