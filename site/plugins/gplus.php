<?php    
    
    function gPlus($count){

        $cacheFile = kirby()->roots()->cache().'/gplus.json';
        $cacheTime = 1800;
        $key = 'AIzaSyDfq3zULo6LDquizkngLYmVNY1MpQe27gA';
        $googlePlusID = '116500201979181780899';
        $url = 'https://www.googleapis.com/plus/v1/people/' . $googlePlusID . '/activities/public?alt=json&pp=1&key=';

        // Check for cachefile
        $lmod = @filemtime($cacheFile);

        if( !isset($_GET['purgeCache']) &&
            $lmod &&
            filesize($cacheFile) &&
            (time() - $lmod < $cacheTime)){
            $content = file_get_contents($cacheFile);
        }else{
            $content = file_get_contents($url.$key);
            if($content) file_put_contents($cacheFile,$content);
        }

        if(!$content) die('Failed to load G+ data');

        $gplus = json_decode($content);
        if(!$gplus) die('Failed to decode G+ data');

        return array_slice($gplus->items, 0, $count);

    }
?>