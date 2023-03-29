<?php  

require_once "vendor/autoload.php";

use Stichoza\GoogleTranslate\GoogleTranslate;

$lang_one = $_POST['lang_onee'];
$lang_two = $_POST['lang_twoo'];
$text = $_POST['textt'];



if($lang_one == "AUTO_DETECT"){
    // echo $text;
$tr = new GoogleTranslate($lang_two);


$text = $tr->translate($text);
$lang_one = $tr->getLastDetectedSource();

echo GoogleTranslate::trans($text, $lang_two, $lang_one);

}else{
    echo GoogleTranslate::trans($text, $lang_two, $lang_one);
}


?>