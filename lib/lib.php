<?php

// 

namespace megahdrive\PersonalSite;

ob_start();

class PageBuilder {
    private $pageTitle;
    private $pageDescription;

    function __construct($pageTitle, $pageDescription)
    {
        $this->pageTitle = $pageTitle;
        $this->pageDescription = $pageDescription;
    }

    function BuildHeader() {
        General::FormalInclude(Path::GetDirectory() . "/template/header.php", [
            "pageTitle" => $this->pageTitle,
            "pageDescription" => $this->pageDescription
        ]);
    }

    function BuildFooter() {
        General::FormalInclude(Path::GetDirectory() . "/template/footer.php");
    }
}

class General {
    static function FormalInclude($file, $variables = []) {
        extract($variables);
        include $file;
    }

    static function RandomArrKey($array) {
        return $array[array_rand($array)];
    }
}

class Path {
    static function GetDirectory() {
        return __DIR__; // format: C:\users\joe
    }

    static function GetServerRoot() {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}

class BellsAndWhistles {
    private static $PageSplashes = [
        "Get a <a href=\"https://www.pckeyboard.com\">Unicomp!</a>",
        "Follow noobas on twitter",
        "Subscribe to an ideology today",
        "Donate to the <a href=\"https://give.hrc.org/page/125424/donate\">HRC</a>",
        "Adashima is the best ship ever",
        "I'm on AO3",
        "<span style=\"opacity: 0%;\">I wanna be a pretty girl!</span>",
        "Today is a good day~",
        "March 7th!",
        "This website is not property of miHoYo, Co., Ltd. or affiliates.",
        "I built a pagebuilder for this one-page website."
    ];

    static function ResolveSplash() {
        return General::RandomArrKey(self::$PageSplashes);
    }
}