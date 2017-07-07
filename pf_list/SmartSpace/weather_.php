<?php
class Seoul {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=37.56826&lon=126.977829&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=37.56826&lon=126.977829&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Seoul() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Busan {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=35.180168&lon=129.076835&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=35.180168&lon=129.076835&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Busan() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Gwangju {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=35.160386&lon=126.851136&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=35.160386&lon=126.851136&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Gwangju() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Daejeon {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=36.351937&lon=127.386750&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=36.351937&lon=127.386750&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Daejeon() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Daegu {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=35.871837&lon=128.601441&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=35.871837&lon=128.601441&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Daegu() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Ulsan {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=35.538957&lon=129.311209&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=35.538957&lon=129.311209&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Ulsan() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}

class Ganglung {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=37.752216&lon=128.875938&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=37.752216&lon=128.875938&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Ganglung() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}
class Andong {
	const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=36.568932&lon=128.729752&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";
	const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=36.568932&lon=128.729752&cnt=5&units=metric&APPID=c7ece49aa66d5bb6db2442a82dc46f13";

	public static function get_Andong() {
		$c = curl_init(self::API_URL_CURRENT);
		$options = array(
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true
		);
		curl_setopt_array($c, $options);
		$data = curl_exec($c);
		curl_close($c);
		
		if (isset($data) && $data) {
			$data_obj = json_decode($data);
			$result = array(
				'current_temp' => $data_obj->main->temp,
				'temp_min' => $data_obj->main->temp_min,
				'temp_max' => $data_obj->main->temp_max,
				'desc' => $data_obj->weather[0]->main,
				'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png",
				'status' => 'ok'
			);
			return $result;
		}
	}
}
?>