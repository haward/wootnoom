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
			'ต้องการความช่วยเหลือรึเปล่า',
			'ถามคำถามใหม่หน่อยครับ'
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function map_church() {
		$msg = '
		{
			"type" : "text",
			"text" : "Church map"
		},
		{
		    "type": "location",
		    "title": "Santa Cruz Church",
		    "address": "Thesaban Sai 1, Thon Buri, Bangkok Pak Klong Talard Pier",
		    "latitude": 13.738994,
		    "longitude": 100.493801
		}';

		return $msg;
	}

	function map_ceremony() {
		$msg = '
		{
			"type" : "text",
			"text" : "Wedding Ceremony map"
		},
		{
		    "type": "location",
		    "title": "Buddy Oriental Riverside hotel",
		    "address": "At Song-Fung-Klong restaurant, Buddy Oriental Riverside hotel, Parkkred, Nontaburi",
		    "latitude": 13.927917,
		    "longitude": 100.5006025
		}';

		return $msg;
	}

	function time_church() {

		$msgs = array(
			'2 December 2017, at 14:00 noon',
			'วันที่ 2 ธันวาคม 2560 เวลา 14:00 นะครับ',
			'งานแต่ง ที่ 2 ธันวาคม 2560 เวลา บ่ายสองครับ'
		);

		$msg = '
		{
			"type" : "text",
			"text" : "เวลางานโบสถ์"
		},
		{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';

		return $msg;
	}
	

	function time_ceremony() {

		$msgs = array(
			'Wedding Ceremony: 3rd December 2017, at 12:00 noon',
			'งานแต่ง: วันที่ 3 ธันวาคม 2560 เวลา 12:00 ตอนเที่ยงตรงนะครับ',
			'งานแต่ง: ที่ 3 ธันวาคม 2560 เวลา เที่ยงตรงครับ'
		);

		$msg = '
		{
			"type" : "text",
			"text" : "เวลางานเลี้ยง"
		},
		{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';

		return $msg;
	}

	function picture() {
		$msg = '{
		  "type": "template",
		  "altText": "รูปการเตรียมงาน",
		  "template": {
		      "type": "image_carousel",
		      "columns": [
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/w5.jpg",
		            "action": {
		              "type": "message",
		              "label": "งานแต่ง",
		              "text": "info"
		            }
		          },
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/w1.jpg",
		            "action": {
		              "type": "message",
		              "label": "เตรียมงาน",
		              "text": "info"
		            }
		          },
		          {
		            "imageUrl": "https://wootnoom.herokuapp.com/media/w2.jpg",
		            "action": {
		              "type": "message",
		              "label": "เตรียมงาน",
		              "text": "info"
		            }
		          }
		      ]
		  }
		}';

		return $msg;
	}
}