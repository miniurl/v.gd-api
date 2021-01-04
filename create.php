<?php

if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];
    if (!empty($_GET['alias'])) {
        $alias = $_GET['alias'];
        $check = file_get_contents("https://v.gd/forward.php?format=json&shorturl=".urlencode($alias));
        $checkarray = json_decode($check);
        if ($checkarray->errorcode == 1 && !isset($checkarray->url)) {
            $json = file_get_contents("https://v.gd/create.php?format=json&logstats=1&url=" .urlencode($url)."&shorturl=".urlencode($alias));
            $array = json_decode($json);
            if (!isset($array->errorcode)) {
                $title = substr($array->shorturl, 13);
                // Customize the code below for your own project
                header("Location: https://miniurl.id/?link=".$title."&vgd=true");
            } else {
                // Customize the code below for your own project
                header("Location: https://miniurl.id/?link=VGD_Error&errorcode=".$array->errorcode);
            }
        } else {
            // Customize the code below for your own project
            header("Location: https://miniurl.id/?link=Custom_Link_Already_Taken&vgd=true");
        }
    } else {
        // Customize the code below for your own project
        $json = file_get_contents("https://v.gd/create.php?format=json&logstats=1&url=" .urlencode($url));
        $array = json_decode($json);
        if (!isset($array->errorcode)) {
            $title = substr($array->shorturl, 13);
            // Customize the code below for your own project
            $urltogo = "https://miniurl.id/?link=".$title."&vgd=true";
            header("Location: $urltogo");
        } else {
            // Customize the code below for your own project
            header("Location: https://miniurl.id/?link=VGD_Error&errorcode=".$array->errorcode);
        }
    }    
}

?>
