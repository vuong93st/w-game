<?php


class BrowserOS{
	
	/* return Operating System */
	public function operating_system_detection ( $agent ){
		$ros[] = array('Windows XP', 'Windows XP');
        $ros[] = array('Windows NT 5.1|Windows NT5.1)', 'Windows XP');
   
        $ros[] = array('Windows 2000', 'Windows 2000');
        $ros[] = array('Windows NT 5.0',                                             'Windows 2000');
        $ros[] = array('Windows NT 4.0|WinNT4.0',                                    'Windows NT');
   
        $ros[] = array('Windows NT 5.2',                                             'Windows Server 2003');
        $ros[] = array('Windows NT 6.0',                                             'Windows Vista');
   
        $ros[] = array('Windows CE',                                                 'Windows CE');
        $ros[] = array('(media center pc).([0-9]{1,2}\.[0-9]{1,2})',                 'Windows Media Center');
   
        $ros[] = array('(win)([0-9]{1,2}\.[0-9x]{1,2})',                             'Windows');
        $ros[] = array('(win)([0-9]{2})',                                            'Windows');
        $ros[] = array('(windows)([0-9x]{2})',                                       'Windows');
   
        
        $ros[] = array('Windows ME',                                                 'Windows ME');
        $ros[] = array('Win 9x 4.90',                                                'Windows ME');
        $ros[] = array('Windows 98|Win98',                                           'Windows 98');
        $ros[] = array('Windows 95',                                                 'Windows 95');
        $ros[] = array('(windows)([0-9]{1,2}\.[0-9]{1,2})',                          'Windows');
        $ros[] = array('win32',                                                      'Windows');
   
        $ros[] = array('(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})',                 'Java');
        $ros[] = array('(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}',                    'Solaris');
        $ros[] = array('dos x86',                                                    'DOS');
        $ros[] = array('unix',                                                       'Unix');
   
        $ros[] = array('Mac OS X',                                                   'Mac OS X');
        $ros[] = array('Mac_PowerPC',                                                'Macintosh PowerPC');
        $ros[] = array('(mac|Macintosh)',                                            'Mac OS');
   
        $ros[] = array('(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}',                       'SunOS');
        $ros[] = array('(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}',                        'BeOS');
        $ros[] = array('(risc os)([0-9]{1,2}\.[0-9]{1,2})',                          'RISC OS');
        $ros[] = array('os/2',                                                       'OS/2');
        $ros[] = array('freebsd',                                                    'FreeBSD');
        $ros[] = array('openbsd',                                                    'OpenBSD');
        $ros[] = array('netbsd',                                                     'NetBSD');
        $ros[] = array('irix',                                                       'IRIX');
        $ros[] = array('plan9',                                                      'Plan9');
        $ros[] = array('osf',                                                        'OSF');
        $ros[] = array('aix',                                                        'AIX');
        $ros[] = array('GNU Hurd',                                                   'GNU Hurd');
   
        $ros[] = array('(fedora)',                                                   'Linux - Fedora');
        $ros[] = array('(kubuntu)',                                                  'Linux - Kubuntu');
        $ros[] = array('(ubuntu)',                                                   'Linux - Ubuntu');
        $ros[] = array('(debian)',                                                   'Linux - Debian');
        $ros[] = array('(CentOS)',                                                   'Linux - CentOS');
        $ros[] = array('(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',      'Linux - Mandriva');
        $ros[] = array('(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',          'Linux - SUSE');
        $ros[] = array('(Dropline)',                                                 'Linux - Slackware (Dropline GNOME)');
        $ros[] = array('(ASPLinux)',                                                 'Linux - ASPLinux');
        $ros[] = array('(Red Hat)',                                                  'Linux - Red Hat');
   
        // Loads of Linux machines will be detected as unix.
        // Actually, all of the linux machines I've checked have the 'X11' in the User Agent.
        //$ros[] = array('X11',                                                        'Unix');
        
        $ros[] = array('(linux)',                                                    'Linux');
   
        $ros[] = array('(amigaos)([0-9]{1,2}\.[0-9]{1,2})',                          'AmigaOS');
        $ros[] = array('amiga-aweb',                                                 'AmigaOS');
        $ros[] = array('amiga',                                                      'Amiga');
        $ros[] = array('AvantGo',                                                    'PalmOS');   
   
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1}-([0-9]{1,2}) i([0-9]{1})86){1}', 'Linux');
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1} i([0-9]{1}86)){1}',                                                                                                  'Linux');
        //$ros[] = array('(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1})',                                                                                                                   'Linux');
        $ros[] = array('[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3})',                        'Linux');
   
        $ros[] = array('(webtv)/([0-9]{1,2}\.[0-9]{1,2})',                           'WebTV');
        $ros[] = array('Dreamcast',                                                  'Dreamcast OS');
        $ros[] = array('GetRight',                                                   'Windows');
        $ros[] = array('go!zilla',                                                   'Windows');
        $ros[] = array('gozilla',                                                    'Windows');
        $ros[] = array('gulliver',                                                   'Windows');
        $ros[] = array('ia archiver',                                                'Windows');
        $ros[] = array('NetPositive',                                                'Windows');
        $ros[] = array('mass downloader',                                            'Windows');
        $ros[] = array('microsoft',                                                  'Windows');
        $ros[] = array('offline explorer',                                           'Windows');
        $ros[] = array('teleport',                                                   'Windows');
        $ros[] = array('web downloader',                                             'Windows');
        $ros[] = array('webcapture',                                                 'Windows');
        $ros[] = array('webcollage',                                                 'Windows');
        $ros[] = array('webcopier',                                                  'Windows');
        $ros[] = array('webstripper',                                                'Windows');
        $ros[] = array('webzip',                                                     'Windows');
        $ros[] = array('wget',                                                       'Windows');
        $ros[] = array('Java',                                                       'Unknown');
        $ros[] = array('flashget',                                                   'Windows');

        // delete next line if the script show not the right OS
        //$ros[] = array('(PHP)/([0-9]{1,2}.[0-9]{1,2})',                              'PHP');
   
        $ros[] = array('MS FrontPage',                                               'Windows');
        $ros[] = array('(msproxy)/([0-9]{1,2}.[0-9]{1,2})',                          'Windows');
        $ros[] = array('(msie)([0-9]{1,2}.[0-9]{1,2})',                              'Windows');
        $ros[] = array('libwww-perl',                                                'Unix');
        $ros[] = array('UP.Browser',                                                 'Windows CE');
        $ros[] = array('NetAnts',                                                    'Windows');

        $file = count ( $ros );
        $os   = '';

        for ( $n=0 ; $n<$file ; $n++ ){
        	if ( eregi ( $ros[$n][0] , $agent, $name ) ){
        		$os = @$ros[$n][1].' '.@$name[2];
        		break;
            }
        }

    return $this->kill_special_chars(trim ( $os ));
  } 
	




   public function browser_detection ( $agent ){
    	
    	$rbrowser[] = array('(chrome).(([0-9]{1,2}\.[0-9]{1,3})?(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',       'Chrome');  
    	$rbrowser[] = array('(firefox).(([0-9]{1,2}\.[0-9]{1,3})?(\.[0-9]{1,3})?)',       'Firefox');  
        $rbrowser[] = array('(opera).([0-9]{1,2}\.[0-9]{1,3})',                           'Opera');
  
        // Is this test really necessary? I'v never seen it work..
        $rbrowser[] = array('(opera).([0-9]{1,2}\.[0-9x]{1,3})',                          'Opera23');  
        $rbrowser[] = array('(netscape).{1,2}([0-9]{1,2}\.[0-9]{1,4}(\.[0-9]{1,3})?)',    'Netscape');

        // Never seen netscape6 in any User Agent
         
        //$rbrowser[] = array('(netscape6)[/]{1,2}([0-9]{1,2}\.[0-9]{1,4})',                'Netscape');
  
        $rbrowser[] = array('(OmniWeb).v([0-9]{1,3}(\.[0-9]{1,3})?)',                     'OmniWeb');
        $rbrowser[] = array('(safari).([0-9]{1,3}(\.[0-9]{1,3})?)',                       'Safari');
  
        /* Mozilla based browsers */
        $rbrowser[] = array('(seamonkey).([0-9]{1,3}(\.[0-9]{1,3})?)',                    'Mozilla SeaMonkey');
        $rbrowser[] = array('(galeon).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',        'Mozilla - Galeon');
        $rbrowser[] = array('(camino).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',        'Mozilla - Camino');
        $rbrowser[] = array('(epiphany).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',      'Mozilla - Epiphany');
        $rbrowser[] = array('(Shiira).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',        'Mozilla - Shiira');
  
        $rbrowser[] = array('(k-meleon).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',      'Mozilla - K-Meleon');
        $rbrowser[] = array('(Mnenhy).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',        'Mozilla - Mnenhy');
        $rbrowser[] = array('(MultiZilla).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',    'Mozilla - MultiZilla');
  
        $rbrowser[] = array('(mozilla).+rv:([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',   'Mozilla');

        /* IE based browsers */
        $rbrowser[] = array('(msie).([0-9]{1,2}\.[0-9]{1,2}).+(crazy browser)',           'IE','- Crazy browser');
        $rbrowser[] = array('(msie).([0-9]{1,2}\.[0-9]{1,2}).+slimBrowser',               'IE','- SlimBrowser');
        $rbrowser[] = array('(msie).([0-9]{1,2}\.[0-9]{1,2}).+(deepnet explorer)',        'IE','- Deepnet Explorer');
        $rbrowser[] = array('(msie).([0-9]{1,2}\.[0-9]{1,2}).+netcaptor',                 'IE','- Netcaptor');  
        $rbrowser[] = array('(msie).([0-9]{1,2}\.[0-9]{1,2}).+(maxthon|myie2)',           'IE','- Maxthon');
  
  
        $rbrowser[] = array('(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})',                 'Java');
        $rbrowser[] = array('(NetPositive)/([0-9]{1,2}\.[0-9]{0,3})',                     'NetPositive');
        $rbrowser[] = array('(FrontPage)([0-9]{1,2}\.[0-9]{1,2})',                        'MS FrontPage');
        $rbrowser[] = array('(PHP)/([0-9]{1,2}\.[0-9]{1,2})',                             'PHP');
        $rbrowser[] = array('(WebWasher)([0-9]{1,2}\.[0-9]{1,2})',                        'WebWasher');
  
        $rbrowser[] = array('(konqueror).([0-9]{1,2}(\.[0-9])?)',                         'Konqueror');
        $rbrowser[] = array('lynx',                                                       'Lynx');
        $rbrowser[] = array('mosaic',                                                     'Mosaic');
  
        $rbrowser[] = array('(msie) ([0-9]{1,2}\.[0-9]{1,2})',                            'Internet Explorer');
  
        $rbrowser[] = array('(links).*([0-9]{1,2}\.[0-9]{1,2})',                          'Links');
        $rbrowser[] = array('(OffByOne)',                                                 'OffByOne');
        $rbrowser[] = array('(ELinks)',                                                   'ELinks');

        $rbrowser[] = array('(teleport pro)/([0-9\.]{1,9})',                              'Teleport Pro');
        $rbrowser[] = array('(Amiga-AWeb)/([0-9 ]{1}\.[0-9]{1,2}\.[0-9]{1,4})',           'Amiga-AWeb');
        $rbrowser[] = array('(amigavoyager)/([0-9]{1}\.[0-9]{1,2}\.[0-9]{1,4})',          'AmigaVoyager');
        $rbrowser[] = array('AvantGo)([0-9]{1}\.[0-9]{1,2})',                             'AvantGo');
        $rbrowser[] = array('(AvantGo)([0-9]{1}\.[0-9]{1,2})',                            'BrowserEmulator');
        $rbrowser[] = array('(cosmos)/([0-9]{1,2}\.[0-9]{1,3})',                          'Cosmos');
        $rbrowser[] = array('(da)([0-9]{1,2}\.[0-9]{1,3})',                               'Download Accelerator');
        $rbrowser[] = array('flashget',                                                   'FlashGet');
        $rbrowser[] = array('(GetRight)/([0-9]{1,2}\.[0-9b]{1,3})',                       'GetRight');
        $rbrowser[] = array('(gigabaz)/([0-9]{1,2}\.[0-9]{1,3})',                         'GigaBaz');
        $rbrowser[] = array('(go!zilla)([0-9]{1,2}\.[0-9b]{1,3})',                        'Go!zilla');
        $rbrowser[] = array('(gozilla)([0-9]{1,2}\.[0-9b]{1,3})',                         'Go!zilla');
        $rbrowser[] = array('(ibrowse)/([0-9]{1,2}\.[0-9]{1,3})',                         'IBrowser');
        $rbrowser[] = array('(ICS) ([0-9]{1,2}\.[0-9]{1,3}\.[0-9]{1,3})',                 'ICS');
        $rbrowser[] = array('(lwp-trivial)/([0-9]{1,2}\.[0-9]{1,3})',                     'lpw-trivial');
        $rbrowser[] = array('(Lotus-Notes)/([0-9]{1,2}\.[0-9]{1,3})',                     'Lotus-Notes');
        $rbrowser[] = array('(msproxy)/([0-9]{1,2}\.[0-9]{0,3})',                         'MSProxy');
        $rbrowser[] = array('(NetAnts)/([0-9]{1,2}\.[0-9]{0,3})',                         'NetAnts');
        $rbrowser[] = array('(offline explorer)/([0-9]{1,2}\.[0-9]{0,3})',                'Offline Explorer');
        $rbrowser[] = array('(Penetrator)([0-9]{1,2}\.[0-9]{0,3})',                       'Penetrator');
        $rbrowser[] = array('(planetweb)/([0-9]{1,2}\.[0-9ab]{0,4})',                     'Planetweb');
        $rbrowser[] = array('(PowerNet)/([0-9]{1,2}\.[0-9]{0,4})',                        'PowerNet');
        $rbrowser[] = array('(Rotondo)/([0-9]{1,2}\.[0-9]{0,3})',                         'Rotondo');
        $rbrowser[] = array('(UP\.Browser)/([0-9]{1,2}\.[0-9]{0,3})',                     'UP.Browser');
        $rbrowser[] = array('w3m',                                                        'W3M');
        $rbrowser[] = array('(WebCapture)([0-9]{1,2}\.[0-9]{0,3})',                       'WebCapture');
        $rbrowser[] = array('(WebCopier v)([0-9]{1,2}\.[0-9]{0,3})',                      'WebCopier');
        $rbrowser[] = array('(webcollage)/([0-9]{1,2}\.[0-9]{0,3})',                      'Webcollage');
        $rbrowser[] = array('(WebScrape)/([0-9]{1,2}\.[0-9]{0,3})',                       'WebScrape');
        $rbrowser[] = array('(web downloader)(/[0-9]{1,2}\.[0-9]{0,1})',                  'Web Downloader');
        $rbrowser[] = array('(mas downloader)(/[0-9]{1,2}\.[0-9]{0,1})',                  'Web Downloader');
        $rbrowser[] = array('(webstripper)/([0-9]{1,2}\.[0-9]{0,3})',                     'WebStripper');
        $rbrowser[] = array('(WebZIP)/([0-9]{1,2}\.[0-9]{0,3})',                          'WebZIP');
        $rbrowser[] = array('webtv',                                                      'WebTv');
        $rbrowser[] = array('(Wget)/([0-9]{1,2}\.[0-9]{0,3})',                            'WGet');
        $rbrowser[] = array('(Dillo).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)',         'Dillo');
  
        $rbrowser[] = array('msnbot',                          'Robots/Spider');
        $rbrowser[] = array('baiduspider',                     'Robots/Spider');
        $rbrowser[] = array('job crawler',                     'Robots/Spider');
        $rbrowser[] = array('analyzer',                        'Robots/Spider');
        $rbrowser[] = array('arachnofilia',                    'Robots/Spider');
        $rbrowser[] = array('aspseek',                         'Robots/Spider');
        $rbrowser[] = array('bot',                             'Robots/Spider');
        $rbrowser[] = array('check',                           'Robots/Spider');
        $rbrowser[] = array('crawl',                           'Robots/Spider');
        $rbrowser[] = array('google',                          'Robots/Spider');
        $rbrowser[] = array('infoseek',                        'Robots/Spider');
        $rbrowser[] = array('inktomi',                         'Robots/Spider');
        $rbrowser[] = array('netoskop',                        'Robots/Spider');
        $rbrowser[] = array('NetSprint',                       'Robots/Spider');
        $rbrowser[] = array('openfind',                        'Robots/Spider');
        $rbrowser[] = array('roamer',                          'Robots/Spider');
        $rbrowser[] = array('robot',                           'Robots/Spider');
        $rbrowser[] = array('rover',                           'Robots/Spider');
        $rbrowser[] = array('scooter',                         'Robots/Spider');
        $rbrowser[] = array('search',                          'Robots/Spider');
        $rbrowser[] = array('siphon',                          'Robots/Spider');
        $rbrowser[] = array('slurp',                           'Robots/Spider');
        $rbrowser[] = array('spider',                          'Robots/Spider');
        $rbrowser[] = array('sweep',                           'Robots/Spider');
        $rbrowser[] = array('walker',                          'Robots/Spider');
        $rbrowser[] = array('WebStripper',                     'Robots/Spider');
        $rbrowser[] = array('wisenutbot',                      'Robots/Spider');
        $rbrowser[] = array('gulliver',                        'Robots/Spider');
        $rbrowser[] = array('validator',                       'Robots/Spider');
        $rbrowser[] = array('yandex',                          'Robots/Spider');
        $rbrowser[] = array('ask jeeves',                      'Robots/Spider');
        $rbrowser[] = array('moget@',                          'Robots/Spider');
        $rbrowser[] = array('teomaagent',                      'Robots/Spider');
        $rbrowser[] = array('infoNavirobot',                   'Robots/Spider');
        $rbrowser[] = array('PPhpDig',                         'Robots/Spider');
        $rbrowser[] = array('gigabaz',                         'Robots/Spider');
        $rbrowser[] = array('Webclipping\.com',                'Robots/Spider');
        $rbrowser[] = array('RRC',                             'Robots/Spider');
        $rbrowser[] = array('netmechanic',                     'Robots/Spider');  
  
       $file    = count($rbrowser);
       $browser = '';
  
       for( $n=0 ; $n<$file ; $n++ ){
       	if ( eregi ( $rbrowser [$n][0] , $agent , $name ) ){
       		// If IE based browser e.g. Maxthon, the IE version will be written before the Maxthon.
       		if (@$rbrowser[$n][2]) {
       			$browser = @$rbrowser[$n][1].' '.@$name[2].' '.@$rbrowser[$n][2];
       	   }else 
       	   {
       	   	$browser = @$rbrowser[$n][1].' '.@$name[2];
	  }
	  break;
	}
   }
  return $this->kill_special_chars(trim($browser));
}



private function kill_special_chars ( $value )
 {
  $value = str_replace( "ß"    , "&szlig;" , $value ); // replace ß
  $value = str_replace( "ÃŸ"   , "&szlig;" , $value ); // replace ß
  $value = str_replace( "ãŸ"   , "&szlig;" , $value ); // replace ß
  //--------------------
  $value = str_replace( "Ä"    , "&Auml;"  , $value ); // replace Ä
  $value = str_replace( "ä"    , "&auml;"  , $value ); // replace ä
  $value = str_replace( "Ã¤"   , "&auml;"  , $value ); // replace Ä
  $value = str_replace( "ã¤"   , "&auml;"  , $value ); // replace ä
  $value = str_replace( "Â¼"   , "&auml;"  , $value ); // replace Ä
  $value = str_replace( "â¼"   , "&auml;"  , $value ); // replace ä
  //--------------------
  $value = str_replace( "Ö"    , "&Ouml;"  , $value ); // replace Ö
  $value = str_replace( "ö"    , "&ouml;"  , $value ); // replace ö
  $value = str_replace( "Ã¶"   , "&ouml;"  , $value ); // replace Ö
  $value = str_replace( "ã¶"   , "&ouml;"  , $value ); // replace ö
  //--------------------
  $value = str_replace( "Ü"    , "&Uuml;"  , $value ); // replace Ü
  $value = str_replace( "ü"    , "&uuml;"  , $value ); // replace ü
  $value = str_replace( "Ã?"   , "&uuml;"  , $value ); // replace Ü
  $value = str_replace( "ã?"   , "&uuml;"  , $value ); // replace ü
  $value = str_replace( "Ã¼"   , "&uuml;"  , $value ); // replace Ü
  $value = str_replace( "ã¼"   , "&uuml;"  , $value ); // replace ü
  //--------------------
  $value = str_replace( "\""   , "&quot;"  , $value ); // replace "
  $value = str_replace( "\\"   , ""        , $value ); // delete  \
  $value = str_replace( "<"    , ""        , $value ); // delete  <
  $value = str_replace( ">"    , ""        , $value ); // delete  >
  return $value;    
 }
//------------------------------------------------------------------



}


?>