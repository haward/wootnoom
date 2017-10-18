<?php
class Answer {


	function gotAnswer() {

		$msgs = array(
			'นี้คือข้อมูลที่คุณขอ',
			'Sure',
			'เราเตรียมข้อมูลให้คุณแล้ว'
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';

		return $msg;
	}

	function disturb() {

		$msgs = array(
			'สุภาพหน่อยครับ',
			'พูดดีๆหน่อยซิ',
			'เราเป็นคนพูดเรพาะนะแสรดด',
			'เราไม่พูดกับนายล่ะ',
			'พูดแบบนี้ไม่ดีนะค่ะ',
			'ให้โอกาสอีกครั้งนะ',
			'เพลียจัง',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';

		return $msg;
	}


	function dont_know() {
		$msgs = array(
			'don\' understand',
			'ไม่เข้าใจเลย',
			'ถามคำถามใหม่หน่อยครับ'
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

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

		$msgs = array(
			'3rd December 2017, at 12:00 noon',
			'วันที่ 3 ธันวาคม 2560 เวลา 12:00 ตอนเที่ยงตรงนะครับ',
			'งานแต่ง ที่ 3 ธันวาคม 2560 เวลา เที่ยงตรงครับ'
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
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