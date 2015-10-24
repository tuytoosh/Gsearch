<?php namespace tuytoosh/php-google-web-search;


        class Gsearch
        {
                public static function Search($str)
                {
                        $keyword = urlencode($str);
                        $url     = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=$keyword&userip=192.168.106.1";
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_REFERER, url('/') );
                        $body = curl_exec($ch);
                        curl_close($ch);
                        $json = json_decode($body);
                        return $json;
                }
        }
