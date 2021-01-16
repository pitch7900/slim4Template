<?php
namespace App\Config;

/**
 * Description of languages
 *
 * @author pierre
 */
class Languages {

    public static $INIFILE_FR = __DIR__ . '/../../lang/lang_fr.ini';
    public static $INIFILE_EN = __DIR__ . '/../../lang/lang_en.ini';

    public function __construct() {
        
    }
    /**
     * Return a string for a given message based on the browser settings
     * Default is english if not found
     * @param type $stringname
     * @return string
     */
    public static function getText($stringname) {
        $lang = null;
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        } else {
            $lang = "en";
        }
        switch ($lang) {
            case "fr":
                return Languages::FR_fr($stringname);
            case "en":
                return Languages::EN_us($stringname);
            default:
                return Languages::EN_us($stringname);
        }
    }
    /**
     * Return the string for french
     * @param type $stringname
     * @return string
     */
    private static function FR_fr($stringname) {
        $DATA = parse_ini_file(Languages::$INIFILE_FR);
        $TEXT = $DATA['TEXT'];
        return $TEXT[$stringname];
    }
    /**
     * return the string for english
     * @param type $stringname
     * @return string
     */
    private static function EN_us($stringname) {
        $DATA = parse_ini_file(Languages::$INIFILE_EN);
        $TEXT = $DATA['TEXT'];
        return $TEXT[$stringname];
    }

}
