<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * CodeIgniter Util Helpers
 *
 * @package     CodeIgniter
 * @subpackage  Helpers
 * @category    Helpers
 * @author      ronald <rdelacruz@stratpoint.com

 */

// ------------------------------------------------------------------------



/*
 *
 * Human Time - Converts timestamp to human-readable time
 *
 * @param timestamp
 * @return string
 */


function human_time($date) {

     if(empty($date)) {
        return "No date provided";
    }

    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();
    $unix_date = strtotime($date);

       // check validity of date
    if(empty($unix_date)) {
        return "Bad date";
    }

    // is it future date or past date
    if($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = "ago";

    } else {
        $difference = $unix_date - $now;
        $tense = "from now";
    }

    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if($difference != 1) {
        $periods[$j].= "s";
    }

    return "$difference $periods[$j] {$tense}";
}



/**
 * Generate and return a random string
 *
 * The default string returned is 8 alphanumeric characters.
 *
 * The type of string returned can be changed with the "seeds" parameter.
 * Four types are - by default - available: alpha, numeric, alphanum and hexidec.
 *
 * If the "seeds" parameter does not match one of the above, then the string
 * supplied is used.
 *
 * @author
 * @param       int     $length  Length of string to be generated
 * @param       string  $seeds   Seeds string should be generated from
 */
function str_rand($length = 8, $seeds = 'alphanum')
{
    // Possible seeds
    $seedings['alpha'] = 'abcdefghijklmnopqrstuvwqyz';
    $seedings['numeric'] = '0123456789';
    $seedings['alphanum'] = 'abcdefghijklmnopqrstuvwqyz0123456789';
    $seedings['hexidec'] = '0123456789abcdef';

    // Choose seed
    if (isset($seedings[$seeds]))
    {
        $seeds = $seedings[$seeds];
    }

    // Seed generator
    list($usec, $sec) = explode(' ', microtime());
    $seed = (float) $sec + ((float) $usec * 100000);
    mt_srand($seed);

    // Generate
    $str = '';
    $seeds_count = strlen($seeds);

    for ($i = 0; $length > $i; $i++)
    {
        $str .= $seeds{mt_rand(0, $seeds_count - 1)};
    }

    return $str;
}
