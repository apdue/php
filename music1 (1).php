<?php

header('Content-Type: application/json');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$userAgentrr = "none";

try {
  	// Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko/20100101 Firefox/100.0
	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$userAgentrr = $_SERVER['HTTP_USER_AGENT'];

		if (strpos($userAgentrr, 'Windows') !== false) {
		    // // echo 'true2'; //contains
		    // return;
		}
	}
} catch(Exception $e) {
  $userAgentrr = 'error';
}
// include db connect class
require_once __DIR__ . '/db_connectnew.php';

// connecting to db
$db = new DB_CONNECT();
$conn = $db->connect();

$pkg = $_REQUEST['pkg'];
$referrerUrl = "none";
$utm_source = "none";
$utm_medium = "none";
$cntry = "none";
$clickcount = "1";

if (isset($_REQUEST['referrerUrl'])) {
$referrerUrl = $_REQUEST['referrerUrl'];
}
if (isset($_REQUEST['rUrl'])) {
$referrerUrl = $_REQUEST['rUrl'];
}

if (isset($_REQUEST['utm_source'])) {
$utm_source = $_REQUEST['utm_source'];
}

if (isset($_REQUEST['utm_medium'])) {
$utm_medium = $_REQUEST['utm_medium'];
}

if (isset($_REQUEST['cntry'])) {
$cntry = $_REQUEST['cntry'];
}

//time check
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

$now = new Datetime("now");

$begintime = new DateTime('00:10');
$endtime = new DateTime('09:00');

//rajan
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Function to get the client IP address
function get_client_ip() {
    // echo $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);

    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$locationcheck = true;

$rn = rand(1,3);
switch ($rn) {
  case "1":
    $locationcheck = true;
    break;
  case "2":
    $locationcheck = false;
    break;
  case "3":
    $locationcheck = true;
    break;
  default:
    $locationcheck = false;
}

if($now >= $begintime && $now <= $endtime){
    // between times
    $locationcheck = true;
} else {
    // not between times
    $locationcheck = true;
}

// mysql inserting a new row
//$result = mysqli_query($conn,"INSERT INTO `gbwhats` (`id`, `pkg`, `referrerUrl`, `utm_source`, `utm_medium`, `cntry`, `click`, `log_entdate`) VALUES (NULL, '$pkg', '$referrerUrl', '$utm_source', '$utm_medium', '$cntry', '$clickcount', CURRENT_TIMESTAMP)");


// array for JSON response
$response = array();

// check for required fields
if (isset($_REQUEST['pkg'])) {

    if (strcmp($_REQUEST['pkg'],"it.musicplayer.music")==0) {

      // successfully inserted into database
        $response["success"] = 1;
        $response["newversion"] = "1.0";
        $response["newappurl"] = "https://cryptomarketnewsnow.com";  //https://dopansearor.com/4/5000382







      //Ads

         $response["interstitial_loader"] = 5; //seconds

      //Search Keyword
        $response["search_keyword"] = "Call Ringtone";


      //Button Name
        $response["yt_button_name"] = "Video Downloader";


        $response["exit_screen"] = "text";  //ad, text
        $response["home_screen"] = "ad";  //ad, text
        $response["dummy_one_screen"] = "ad";  //ad, text
        $response["dummy_two_screen"] = "ad";  //ad, text
        $response["dummy_three_screen"] = "ad";  //ad, text
        $response["dummy_four_screen"] = "ad";  //ad, text

        $response["native_size"] = "large";  //small, medium, large


        $response["youtube_downloader"] = "true";
        $response["social_downloader"] = "true";
        $response["player_button"] = "false";


        $response["youtube_download_enabled"] = true;



        $arr["Result"] = "true";
        $arr["config"] = $response;

        $response["WHATSAPP_SHARE_FREQUENCY"] = 8;
        $response["startclicktext"] = "Start";
        $response["startvisible"] = 0;
        $response["skipfirstscreen"] = 0;

      	//vpn off totally then both 0
      	//vpn on totally then both 1
      	//vpn yes other than dev mode than 0 and 1
      	if (strcmp($_REQUEST['isdevmode'],"1")==0) {
        	$response["rd"] = 1;
        } else {
          	$response["rd"] = 1;
        }

        $response["message"] = "successfully";

        if ((strpos($referrerUrl, 'set') !== false) || (strpos($referrerUrl, 'organic') !== false) || (strpos($referrerUrl, 'rornd') !== false)) {
          //yes contains

          $response["vpn"] = "no";
          $response["ADMOB_INTERSTITIAL_FREQUENCY"] = 100;//$appbroda2
          $response["interstitialsplash"] = "no";
          $response["webview"] = "no";
          $response["dowload_btn_enabled"] = true;
          $response["youtube_btn_enabled"] = true;
          $response["player_btn_enabled"] = true;
          $response["status_btn_enabled"] = true;
          $response["youtube_setting_enable"] = true;
          $response["youtube_library_enable"] = true;
          $response["youtube_discover_enable"] = true;
          $response["josh"] = true;
          $response["chingari"] = true;
          $response["mitron"] = true;
          $response["sharechat"] = true;
          $response["roposo"] = true;
          $response["moj"] = true;
          $response["likee"] = true;
          $response["instagram"] = true;
          $response["whatsapp"] = true;
          $response["tiktok"] = true;
          $response["facebook"] = true;
          $response["takatak"] = true;

        $response["app_id_ad_unit_id"] = "ca-app-pub-3140856478598000~3334830927";

        $response["openapp_ads_enabled"] = "no";

        $response["inter_ad_type"] = "inter"; // inter, open

        $response["openappid"] = "/22581864170/it.musicplayer.music_banner_appopen";
        $response["bannermain"] = "ca-app-pub-3940256099942544/6300978110";
        $response["interstitialmain"] = "ca-app-pub-3940256099942544/1033173710";
        $response["nativeid"] = "ca-app-pub-3940256099942544/2247696100";
        $response["nativeid_small"] = "ca-app-pub-3940256099942544/2247696100";
        $response["nativeid_small_enabled"] = "false";
        $response["splash"] = "open";  //open, inter, or facebook
           //Dummy Screems

         $response["status_dummy_one_enabled"] = "false";
         $response["status_dummy_two_enabled"] = "false";
         $response["status_dummy_three_enabled"] = "false";
         $response["status_dummy_four_enabled"] = "false";
         $response["status_dummy_five_enabled"] = "false";
         $response["status_dummy_six_enabled"] = "false";

         $response["status_dummy_seven_home_enabled"] = "false";


     //-----BACK

         $response["status_dummy_one_back_enabled"] = "false";
         $response["status_dummy_two_back_enabled"] = "false";
         $response["status_dummy_three_back_enabled"] = "false";
         $response["status_dummy_four_back_enabled"] = "false";
         $response["status_dummy_five_back_enabled"] = "false";
         $response["status_dummy_six_back_enabled"] = "false";

         $response["status_dummy_seven_home_back_enabled"] = "false";
            //Facebook Ids

          $response["interstitial_ad_network"] = "admob";  //admob, facebook
          $response["banner_ad_network"] = "admob";  //admob, facebook
          $response["native_ad_network"] = "admob";  //admob, facebook

          $response["facebook_interstitial_id"] = "840518614504052_840724304483483";
          $response["facebook_banner_id"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";
          $response["facebook_native_id"] = "840518614504052_840724481150132";
          $response["facebook_native_banner"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";
          $response["facebook_mrec_id"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";

          $response["top_ad_type"] = "native";  //banner, native, nativebanner, mrec


          $response["admob_failed_facebook_enabled"] = "true";
          $response["facebook_failed_admob_enabled"] = "true";

        } else {
          //not contains
          $response["vpn"] = "no";
          $response["ADMOB_INTERSTITIAL_FREQUENCY"] = 2;//$appbroda2
          $response["interstitialsplash"] = "yes";
          $response["webview"] = "no";
          $response["dowload_btn_enabled"] = true;
          $response["youtube_btn_enabled"] = true;
          $response["player_btn_enabled"] = true;
          $response["status_btn_enabled"] = true;
          $response["youtube_setting_enable"] = true;
          $response["youtube_library_enable"] = true;
          $response["youtube_discover_enable"] = true;
          $response["josh"] = true;
          $response["chingari"] = true;
          $response["mitron"] = true;
          $response["sharechat"] = true;
          $response["roposo"] = true;
          $response["moj"] = true;
          $response["likee"] = true;
          $response["instagram"] = true;
          $response["whatsapp"] = true;
          $response["tiktok"] = true;
          $response["facebook"] = true;
          $response["takatak"] = true;


          $response["app_id_ad_unit_id"] = "ca-app-pub-3140856478598000~3334830927";

          $response["inter_ad_type"] = "inter"; // inter, open

          $response["openapp_ads_enabled"] = "yes";
          $response["openappid"] = "ca-app-pub-7418460763491226/5861466612";
          $response["bannermain"] = "ca-app-pub-7418460763491226/3015262681";
          $response["interstitialmain"] = "ca-app-pub-7418460763491226/8739783537";
          $response["nativeid"] = "ca-app-pub-7418460763491226/5837415885";
          $response["nativeid_small"] = "ca-app-pub-7418460763491226/5837415885";
          $response["nativeid_small_enabled"] = "true";
          $response["splash"] = "openapp";  //open, inter, or facebook
           //Dummy Screems

        //  $response["openappid"] = "/229445249,22844427838/highR_RS88_MusicPlayerandMP3Player_11_APP_OPEN_5594_060224";
        //  $response["bannermain"] = "/229445249,22844427838/highR_RS88_MusicPlayerandMP3Player_11_BANNER_5592_060224";
       //   $response["interstitialmain"] = "/229445249,22844427838/highR_RS88_MusicPlayerandMP3Player_11_INTERSTITIAL_5593_060224";
       //   $response["nativeid"] = "/229445249,22844427838/highR_RS88_MusicPlayerandMP3Player_11_NATIVE_5595_060224";
       //   $response["nativeid_small"] = "/229445249,22844427838/highR_RS88_MusicPlayerandMP3Player_11_NATIVE_5595_060224";



         $response["status_dummy_one_enabled"] = "true";
         $response["status_dummy_two_enabled"] = "true";
         $response["status_dummy_three_enabled"] = "true";
         $response["status_dummy_four_enabled"] = "true";
         $response["status_dummy_five_enabled"] = "false";
         $response["status_dummy_six_enabled"] = "false";

         $response["status_dummy_seven_home_enabled"] = "false";


     //-----BACK

         $response["status_dummy_one_back_enabled"] = "true";
         $response["status_dummy_two_back_enabled"] = "true";
         $response["status_dummy_three_back_enabled"] = "true";
         $response["status_dummy_four_back_enabled"] = "true";
         $response["status_dummy_five_back_enabled"] = "false";
         $response["status_dummy_six_back_enabled"] = "false";

         $response["status_dummy_seven_home_back_enabled"] = "false";
            //Facebook Ids

          $response["interstitial_ad_network"] = "facebook";  //admob, facebook
          $response["banner_ad_network"] = "admob";  //admob, facebook
          $response["native_ad_network"] = "facebook";  //admob, facebook

          $response["facebook_interstitial_id"] = "840518614504052_840724304483483";
          $response["facebook_banner_id"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";
          $response["facebook_native_id"] = "840518614504052_840724481150132";
          $response["facebook_native_banner"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";
          $response["facebook_mrec_id"] = "IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID";

          $response["top_ad_type"] = "native";  //banner, native, nativebanner, mrec


          $response["admob_failed_facebook_enabled"] = "false";
          $response["facebook_failed_admob_enabled"] = "true";



        }

        // echoing JSON response
        echo json_encode($response);
    }
}
?>
