<?php namespace tuytoosh/php-google-web-search;

use tuytoosh/gsearch;

        class gsearch
        {
                public static function search($str)
                {
                        $keyword = urlencode($str);
                        $url     = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=$keyword&userip=192.168.106.1";
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_REFERER, config::get('website_url') );
                        $body = curl_exec($ch);
                        curl_close($ch);
                        $json = json_decode($body);
                        return $json;
                }
        }
