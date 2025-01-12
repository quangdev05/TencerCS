<?php
session_start();
$developer = true;

define("DATABASE", "tcsdoithe24_checkscam"); //tên database
define("USERNAME", "tcsdoithe24_checkscam"); //tên tài khoản quản lí database
define("PASSWORD", "tcsdoithe24_checkscam"); //mật khẩu tài khoản

$tele_token = '6105996148:AAEoH9y71CGqF9bMWhxh2PD4sZECenO182s';
$tele_chatid = '6276536456';

$ketnoi = mysqli_connect("localhost", USERNAME, PASSWORD, DATABASE);
$ketnoi->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');

$_SESSION['session_request'] = time();
$site = $ketnoi->query("SELECT * FROM setting")->fetch_array();
$user = $ketnoi->query("SELECT * FROM users")->fetch_array();

$site_tenweb = $site['site_tenweb'];
$site_mota = $site['site_mota'];
$site_logo = $site['site_logo'];
$site_sdt_momo = $site['sdt_admin'];
$facebook = $site['facebook'];



if ($developer == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

function sendTele($message)
{
    global $tele_token,$tele_chatid;
    $data = http_build_query([
        'chat_id' => $tele_chatid,
        'text' => $message,
    ]);
    $url = 'https://api.telegram.org/bot' . $tele_token . '/sendMessage';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ($data) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function templateTele($content)
{
    return "🔔 THÔNG BÁO
📝 Nội dung: " .
        $content .
        "
🕒 Thời gian: " .
        date('d/m/Y H:i:s');
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}

function random($string, $int)
{
    return substr(str_shuffle($string), 0, $int);
}

function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = ["png", "jpeg", "jpg", "PNG", "JPEG", "JPG", "gif", "GIF"];
    if (in_array($ext, $valid_ext)) {
        return true;
    }
}
function curl_get_api_dailysieure($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);

    curl_close($ch);
    return $data;
}
function xoadau($strTitle)
{
    $strTitle = strtolower($strTitle);
    $strTitle = trim($strTitle);
    $strTitle = str_replace(' ', '-', $strTitle);
    $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
    $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
    $strTitle = str_replace('đ', 'd', $strTitle);
    $strTitle = str_replace('Đ', 'd', $strTitle);
    $strTitle = preg_replace("/[^-a-zA-Z0-9]/", '', $strTitle);
    return $strTitle;
}
?>
