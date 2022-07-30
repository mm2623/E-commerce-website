<?php require_once "/afs/cad.njit.edu/u/m/m/mm2623/public_html/canvas/connection.php"; ?>
<?php
    $info = $_SERVER['HTTP_USER_AGENT'];
    $data = file_get_contents("php://input");
    $data = json_decode($data, true);
    $ip = $data[0];

    function ip_details($ip) {
        $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
        $details = json_decode($json, true);
        return $details;
    }
    $details = ip_details($ip);

    foreach ($details as $k => $a){
        if($k=="ip"){$ip=$a;}
        elseif($k=="city"){$city=$a;}
        elseif($k=="postal"){$postal=$a;}
        elseif($k=="region"){$region=$a;}
        elseif($k=="country"){$country=$a;}
        elseif($k=="loc"){$loc=$a;}
        elseif($k=="timezone"){$timezone=$a;}
        elseif($k=="hostname"){$hostname=$a;}
        elseif($k=="org"){$org=$a;}
    }

    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    $realip = getUserIpAddr();
    if($realip == $ip){
        $vpn = "FALSE";
    }
    elseif($realip != $ip){
        $vpn = "TRUE";
    }

    $array = str_word_count($_SERVER['HTTP_USER_AGENT'], 1);
    $device = $array[1];

    $array2 = preg_split("/[;\s()]+/", $_SERVER['HTTP_USER_AGENT']);
    $length = count($array2);
    $browser = $array2[$length-1];

    $v = "Version" ;
    $c = "Chrome" ;
    $e = "Edg";
    foreach($array2 as $index => $string) {
        if (strpos($string, $v) !== FALSE){
            $version = $string;
        }
        if($device == "Windows"){
            $version = $array2[4];
        }
        if((strpos($string, $c) !== FALSE) && (strpos($browser, $e) === FALSE)){
            $browser = $string;
        }
        
    }

    function enter_data($ip,$city,$postal,$region,$country,$loc,$timezone,$hostname,$org,$vpn,$device,$version,$browser,$info){
 
        $db = getDB();
        $stmt = "INSERT INTO login_data (ip,city,postal,region,country,loc,vpn,timezone,hostname,org,device,versions,browser,info) VALUES('$ip','$city','$postal','$region','$country','$loc','$vpn','$timezone','$hostname','$org','$device','$version','$browser','$info')";
        mysqli_query($db,$stmt);
        mysqli_close($db);
        $done = "Done";
        return $done;
        
    }
    echo enter_data($ip,$city,$postal,$region,$country,$loc,$timezone,$hostname,$org,$vpn,$device,$version,$browser,$info);
    
?>
