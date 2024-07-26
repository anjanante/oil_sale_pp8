<?php
    function truncateText($text, $maxLength = 100) {
        if (strlen($text) > $maxLength) {
            $text = substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }
    function dump($mVar){
        echo "<pre>";
        var_dump($mVar);
        echo "</pre>";
    }
    
