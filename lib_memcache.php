<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class lib_memcache{
   private $memcache;
   public function __construct(){
	    $this->memcache = new Memcache;
	    $this->memcache->connect("localhost",11211);
   }

   public function getVersion(){
   	   return $this->memcache->getVersion(); 
   }

   public function setKeyValue($keyname,$keyvalue,$time=10){
      return $this->memcache->set("{$keyname}",$keyvalue,false,$time);
   }

    public function getKeyValue($keyname){
   	  return $this->memcache->get("{$keyname}");
   }

}
