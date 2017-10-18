<?php
class Answer {

	function map() {
		$msg = '{
		    "type": "location",
		    "title": "Buddy Oriental Riverside hotel",
		    "address": "At Song-Fung-Klong restaurant, Buddy Oriental Riverside hotel, Parkkred, Nontaburi",
		    "latitude": 13.927917,
		    "longitude": 100.5006025
		}';

		return $msg;
	}

	function time() {
		$msg = '{
			"type" : "text",
			"text" : "3rd December 2017, at 12:00 noon"
		}';
		return $msg;
	}

	function picture() {
		$msg = '{
		  "type": "template",
		  "altText": "this is a image carousel template",
		  "template": {
		      "type": "image_carousel",
		      "columns": [
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/pic1.jpg",
		            "action": {
		              "type": "postback",
		              "label": "Buy",
		              "data": "action=buy&itemid=111"
		            }
		          },
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/pic2.jpg",
		            "action": {
		              "type": "message",
		              "label": "Yes",
		              "text": "yes"
		            }
		          },
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/pic3.jpg",
		            "action": {
		              "type": "uri",
		              "label": "View detail",
		              "uri": "http://example.com/page/222"
		            }
		          }
		      ]
		  }
		}';

		return $msg;
	}
}