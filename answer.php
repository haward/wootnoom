<?php
class Answer {


	function gotAnswer() {

		$msgs = array(
			'นี้คือข้อมูลที่คุณขอ',
			'Sure',
			'ขอเวลหาข้อมูลแปร๊ป',
			'โอเครจัดปาย',
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
			'เราเป็นคนพูดเพราะนะแสรดด',
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
			'Do not understand',
			'ไม่เข้าใจเลย',
			'ต้องการความช่วยเหลือรึเปล่า',
			'ขอคำถามง่ายๆหน่อยนะ',
			'ลองกดจาก menu ด้านล่างดูก่อนดีไหม๊',
			'ไม่รู้เหมือนกัน เดียวจะไปถามเจ้าบ่าวให้',
			'ถามคำถามใหม่หน่อยครับ'
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	
	function church_park() {
		$msgs = array(
			'จอดได้รอบโบสถ์ Santa Cruz Church เลยครับ',
			'จอดที่ ลาดจอดรอบโบสถ์ Santa Cruz Church เลยครับ',
			'ลานรอบๆ Santa Cruz Church เลยครับ',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function park() {
		$msgs = array(
			'จอดที่โรงแรมเลยครับที่จอดรถมีเยอะมาก',
			'ด้านหน้าโรงแรมมีที่จอดรถเยอะมากเลยครับ',
			'ข้างๆ ร้านอาหารสองฝั่งคลองเลยครับ',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function theme() {
		$msgs = array(
			'สีพาสเทล',
			'แต่งตัวสุภาพ สีพาสเทล',
			'แต่งตัวตามสบาย สีพาสเทล',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function groom() {
		$msgs = array(
			'เจ้าบ่าวหล่อมาก ',
			'เจ้าบ่าวหล่อใจดี สปอร์ต แมน เมืองช้าง',
			'เจ้าบ่าววัยรุ่นมาก',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function bride() {
		$msgs = array(
			'สวยน่ารักดี',
			'น่ารักมากจริงๆนะ',
			'เจ้าสาวน่ารักค่า',
		);

		$msg = '{
			"type" : "text",
			"text" : "' . $msgs[rand(0, count($msgs) - 1)] . '"
		}';
		return $msg;
	}

	function food() {
		$msgs = array(
			'บุฟเฟ่ อาหารไทย ครับ',
			'เป็น บุฟเฟ่ อาหารไทย นะครับ',
			'บุฟเฟ่ อาหารไทย นะครับ',
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
		    "type": "location",
		    "title": "Santa Cruz Church map",
		    "address": "Thesaban Sai 1, Thon Buri, Bangkok Pak Klong Talard Pier",
		    "latitude": 13.738994,
		    "longitude": 100.493801
		}';

		return $msg;
	}

	function map_ceremony() {

		$msg = '
		{
		    "type": "location",
		    "title": "Wedding Ceremony map Buddy Oriental Riverside hotel",
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