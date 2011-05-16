<?php
/**

 */
require("../libraries/common.inc.php");
require("wap.share.php");
require("../share.inc.php");
require(CACHE_PATH. "cache_typeoption.php");
//require(LIB_PATH. 'page.class.php');
require(APP_ROOT.'./libraries/page.class.php');
require(APP_ROOT.'./libraries/tinhvan/payment.class.php');
//require(LIB_PATH."Tera-WURFL/TeraWurfl.php");

uses("product","gamehandset","game","transection");
$gamehandset = new Gamehandsets();
$game = new Games();

$payment = new Payments();

$product = new Products();
$transection = new Transections();

$page = new Pages();
$page->pagetpl_dir = $theme_name;

if (isset($_GET['do'])) {
	$do = $_GET['do'];
}

if (isset($_GET['t'])) {	
	$token = $_GET['t'];	
}
if(!empty($token)){			
	//Get status		
	$traninfo = $transection->getTransectionByToken($token);	
	if(empty($traninfo)){
		flash("Không tồn tại giao dịch!","index.php",10);			
	}
		
	$pid = $traninfo['product_id'];
	$status = $traninfo['status'];	
	
	if($status == 254){		
		$status = $payment->getPaymentStatus($token);			
	}
	if($status != 1){
		flash("Giao dịch này chưa được thực hiện thành công!","content.php?id=" . $pid,10);
	}
}

$device_id = "sonyericsson_w200a_ver1";

$info = $product->getProductById($pid);

if(empty($info)){
	flash("không có dữ liệu thỏa mãn yêu cầu!", '', 0);
}

$gamehandset_info = $gamehandset->getInfo($pid,$device_id);

if($do == 'charging'){		
	if(empty($_SESSION['msisdn'])){
		flash("Hiện tại hệ thống chưa nhận diện được số thuê bao, nên không thể thanh toán hãy liên hệ với quản trị để biết thông tin chi tiết!","content.php?id=" . $pid,10);	
	}
	
	if (isset($_GET['pid'])) {
		$pid = intval($_GET['pid']);
		$vals['product_id'] = $pid;
	}	$vals['price'] =  $info['price'];
	
	$iteminfo['name'] = $info['name'];
	$iteminfo['price'] =  intval($info['price']);
	$iteminfo['product_id'] = $pid;
	
	$charginginfo = $payment->request($iteminfo);
	
	if(isset($charginginfo)){
		$token = $charginginfo[0];
		$redirectUrl = $charginginfo[1];
		
		//Get Charging status
		
		//Save token to order
		$vals['transection_token'] = $token;		
		$vals['transection_time'] = time();
		$vals['transection_method'] = 'wap-tinhvan';
		$vals['msisdn'] = $_SESSION['msisdn'];		
		$vals['product_id'] = $pid;	
		$vals['device_id'] = $device_id;
		$resul_s = $transection->save($vals);
		
		if($resul_s == 1 && $token !="" & $token !="-1" & $token != "-2"){
			pheader("Location: " . $redirectUrl);
		}
		else {
			flash("Đăng ký giao dịch không thành công!");
		}
	}
}

if(!empty($gamehandset_info)){
	$game_id = $gamehandset_info['game_id'];
}

$game_info = $game->getInfoById($game_id);

$attach_id = $game_info['attachment_id'];

if(empty($attach_id)){
	//flash("Không có game tương ứng cho dòng máy của bạn!");
	setvar("attach_alert","Không có game tương ứng cho dòng máy của bạn");
}

if (isset($_GET['do'])) {
	$do = trim($_GET['do']);
	switch ($do) {
		case "download":
			//check Money
			if(isset($_GET['t'])){
				$token = $_GET['t'];
			}
			$traninfo = $transection->getTransectionByToken($token);				
			if(empty($traninfo)){
				flash("Không tồn tại giao dịch, Bạn không thể tải game!","index.php",10);			
			}else {
				$status = $traninfo['status'];
			}
			
			if($status != 1){
				flash("Bạn chưa thanh toán thành công, nên không thể tải game về máy","content.php?id=" . $pid,10);				
			}			
			
			uses("attachment");
			$attachment = new Attachments();
			if (empty($_GET['aid'])) {
				flash();
			}
			$attach_id = authcode(rawurldecode($_GET['aid']), "DECODE");			
			if (empty($attach_id)) {
				flash();
			}
			require(LIB_PATH. "download.class.php");
			require(LIB_PATH. "js.class.php");
			$download = new Downloads('',false);			
			$download->attach_filename = rawurlencode($attachment->getAttachFileName($attach_id));
			$filename = "../". $attachment->file_url;			
			if(!$download->downloadfile($filename))
			{
				die($download->geterrormsg());
			}else{
				JS::Close();
			}
			break;
		default:
			break;
	}
}

$info['attach_hashid'] = rawurlencode(authcode($attach_id));
setvar("item", $info);
template("buy");

?>