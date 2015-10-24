<?php namespace tuytoosh/gsearch;

class config
{
    
  $index =[
  "website_url" => "http://example.com"
  ];
  
  
  public function get($opt)
  {
    return $index[$opt];
  }
    

}
