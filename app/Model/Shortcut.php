<?php
namespace Model;

class Shortcut
{

    /**
     *
     * @param unknown $CONTENUARTICLE
     * @return string
     */
    public static function getAccroche($CONTENUARTICLE) {
    
        // : http://php.net/manual/fr/function.mb-strimwidth.php
    
        // strip tags to avoid breaking any html
        $string = strip_tags($CONTENUARTICLE);
    
        if (strlen($string) > 170) {
    
            // truncate string
            $stringCut = substr($string, 0, 170);
    
            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
        }
        return $string;
    }
}

