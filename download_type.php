<?php
$file = $_GET['i'];
$path = $_SERVER['DOCUMENT_ROOT']."/".$file . ".jar";

if ($fd = fopen ($path, "r")) {
    $fsize = filesize($path);
    $path_parts = pathinfo($path);
	
	//print_r($path_parts);
	//exit;
	
    switch( $path_parts["extension"] ) {
        case "pdf": $ctype="application/pdf"; break;
        case "exe": $ctype="application/octet-stream"; break;
        case "zip": $ctype="application/zip"; break;
        case "doc": $ctype="application/msword"; break;
        case "xls": $ctype="application/vnd.ms-excel"; break;
        case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
        case "gif": $ctype="image/gif"; break;
        case "png": $ctype="image/png"; break;
        case "jpeg":
        case "jpg": $ctype="image/jpg"; break;
        case "mp3": $ctype="audio/mpeg"; break;
        case "wav": $ctype="audio/x-wav"; break;
        case "mpeg":
        case "mpg":
        case "mpe": $ctype="video/mpeg"; break;
        case "mov": $ctype="video/quicktime"; break;
        case "avi": $ctype="video/x-msvideo"; break;
		case "jar": $ctype="application/java-archive";break;
        
        case "php":
        case "htm":
        case "html":
        case "txt": die; break;
        
        default: $ctype="application/force-download";
    }
    

    header("Content-type: $ctype");
    header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
    header("Content-length: $fsize");
    header("Cache-control: private");
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
    fclose ($fd);
}

exit;
?> 