<?PHP

namespace NavLib;

class Navlink{

private $href;
private $title;
private $navtext;

public function __construct($linkconf){

    if(count($linkconf)>0 && array_key_exists('href', $linkconf)){
        $this->href = $linkconf['href'];
    }

    if(count($linkconf)>0 && array_key_exists('title', $linkconf)){
        $this->title = $linkconf['title'];
    }

    if(count($linkconf)>0 && array_key_exists('navtext', $linkconf)){
        $this->navtext = $linkconf['navtext'];
    }

}

public function render() : string{

    /*<li><a href="http://orf.at" title="blabla">ORF Online</a></li>*/
    $out = '';
    $out = "<li class=\"pure-menu-item\"><a href=\"$this->href\" class=\"pure-menu-link\" title=\"$this->title\">$this->navtext</a></li>";
    return $out;
}

}


?>