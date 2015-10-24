<?php namespace tuytoosh/gsearch;

class config
{
    
  $index =[
  "website_url" => "http://example.com"
  ];
  
  
  public static function get($opt)
  {
    return $index[$opt];
  }
    

}
