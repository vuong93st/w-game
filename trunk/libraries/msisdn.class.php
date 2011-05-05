<?php

/*=============================================*/
//  This class detect mobile device
//============================================= */

class DetectMobileDevice{

var $mobile_device;
var $msisdn;
var $traced_mobile;
var $palm_device  = array('pre\/','palm os','palm','hiptop','avantgo','fennec','plucker','xiino','blazer','elaine');
var $windows_mo   = array('iris','3g_t','windows ce','opera mobi','windows ce; smartphone;','windows ce; iemobile');
var $extra        = array('up.browser','up.link','mini','mmp','symbian','midp','wap','phone','pocket','mobile','pda','psp');
// first four character of most commom mobile user agaent
var $common       = array('acs-','alav','alca','amoi','audi','aste','avan','benq','bird','blac','blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno','ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-','newt','noki','opwv','pana','pant','pdxg','phil','play','pluc','port','prox','qtek','qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar','sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-','tosh','tsm-','upg1','upsi','vk-v','voda','w3c ','wap-','wapa','wapi','wapp','wapr','webc','winw','xda-');

// most common mobile user agent

function __construct(){

$this->MSISDN();

if($this->traced_mobile == ''){
$this->WAP_PROFILE();
}

if($this->traced_mobile == ''){
$this->checkuseragent();
}

}

/* detect mobile number */
private function MSISDN ( ){

/* I saw this header work for most operators */
// AKTEL, BANGLA LINK & CITYCELL IN BANGLADESH
if(isset($_SERVER['HTTP_X_UP_CALLING_LINE_ID'])){
$this->msisdn = trim($_SERVER['HTTP_X_UP_CALLING_LINE_ID']);
}
// in maximum case for Nokia and SonyEricsson
elseif (isset ($_SERVER['HTTP_X_HTS_CLID'])){
$this->msisdn = trim($_SERVER['HTTP_X_HTS_CLID']);
}
// in maximum case for Motorola and Siemens
elseif (isset ($_SERVER['HTTP_MSISDN'])){
$this->msisdn = trim($_SERVER['HTTP_MSISDN']);
}
elseif (isset ($_SERVER['HTTP_X_NETWORK_INFO'])){
$tmpmsisdn    = trim($_SERVER['HTTP_MSISDN']);
$this->msisdn = preg_replace('/(.*,)(13[d]{ 9 })(,.*)/i','2',$tmpmsisdn);
}
elseif (isset ($_SERVER['HTTP_X_UP_SUBNO'])){
$tmpmsisdn    = trim($_SERVER['HTTP_X_UP_SUBNO']);
$this->msisdn = preg_replace('/(.*)(13[d]{ 9 })(.*)/i','2',$tmpmsisdn);
} else {

$this->msisdn = trim($_SERVER['DEVICEID']);
}

if($this->msisdn != '') $this->traced_mobile = true;
}

/* check if wap profile exist or not */
private function WAP_PROFILE ( ){

/* check if wap profile exist if then its must be mobile device */
if( isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || isset($_SERVER['X-OperaMini-Features']) || isset($_SERVER['UA-pixels']) ){
$this->traced_mobile = true;
return true;
}

/* check if the accept variable support wap.wml or wap.xhtml then its must be a mobile device */
if(stristr( $_SERVER['HTTP_ACCEPT'], 'text/vnd.wap.wml' ) || stristr($_SERVER['HTTP_ACCEPT'], 'application/vnd.wap.xhtml+xml')){
$this->traced_mobile = true;
}

}

// now its the final check if its mobile device

function checkuseragent ( ){

$UA = $_SERVER['HTTP_USER_AGENT'];

switch (TRUE){
// this for ipod
case stristr('ipod',$UA):         { $this->traced_mobile = true; break; }
// this for iphone
case stristr('iphone',$UA):       { $this->traced_mobile = true; break; }
// this for android
case stristr('android',$UA):      { $this->traced_mobile = true; break; }
// for opera mini
case stristr('opera mini',$UA):   { $this->traced_mobile = true; break; }
// for blackebrry
case stristr('blackberry',$UA):   { $this->traced_mobile = true; break; }

// for palm
case preg_match("/(". implode('|',$this->palm_device) .")/i" , $UA): { $this->traced_mobile = true; break; }
// for windows mobile
case preg_match("/(". implode('|',$this->windows_mo ) .")/i" , $UA): { $this->traced_mobile = true; break; }
// for some extra
case preg_match("/(". implode('|',$this->extra ) .")/i" , $UA):      { $this->traced_mobile = true; break; }

case preg_match("/(". implode('|',$this->common ) .")/i" , substr(trim($UA),0,4)):      { $this->traced_mobile = true; break; }
}

}

}

?>
