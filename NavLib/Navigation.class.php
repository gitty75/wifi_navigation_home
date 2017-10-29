<?php

namespace NavLib;

class Navigation{

private $navlinks = [];
private $navname = '';
private $navtype = '';

//die Konfiguration wird als PHP-Array übergeben
public function __construct($navconfig){

  if(array_key_exists('navname', $navconfig)){
    $this->navname = $navconfig['navname'];
  }

  if(array_key_exists('navtype', $navconfig)){
    $this->navetype = $navconfig['navtype'];
  }

  if(array_key_exists('navlinks', $navconfig) && count($navconfig['navlinks']>0)){
    $this->createNavlinks($navconfig['navlinks']);
  }

}


public function render() : string {
$out = '';

$out = "<nav ><ul class=\"pure-menu-list\">";

  foreach($this->navlinks As $objLink){
  //<li>s werden aus den Objekten im Array $navlinks erzeugt  
  $out .= $objLink->render();
  }
  $out .= "</ul></nav";
  return $out;
}

private function createNavlinks($links){

  foreach($links As $navlinkconf){
    $this->navlinks[$navlinkconf['name']] = New \NavLib\Navlink($navlinkconf);
  }


}

/*
<nav>
   <ul>
      <li><a href="#">Seite 1</a></li>
      <li><a href="#">Seite 2</a></li>
      <li><a href="#">Seite 3</a></li>
      <li><a href="#">Seite 4</a></li>
  </ul>
</nav>

*/


}

?>