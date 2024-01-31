<?php

function emoje($emoje) //in tabe spam mide emoji
{
    $loop_varibe = null;
    $blank = null;
    $randome = rand(1, 5);
    while ($randome != $loop_varibe) {
        ++$loop_varibe;
        $blank .= $emoje;
    }
    return $blank;
}

function spamer69($Number_spam, $text_spam, $emoji_left) //in tabe 2 vorodi migire va spam mide
{
    $number_loop = (int)$Number_spam;
    $print = null;
    if (($Number_spam != 0) and $Number_spam) {
        for ($loop = 1; $loop <= $number_loop; ++$loop) {
            if ($loop % 2) {
                $array[] = ($emoji_left == null) ? ("❤️") : ($emoji_left); //emoji
                $array[] = ($text_spam == null) ? ("I LOVE YOU") : ($text_spam); //text
                $array[] = emoje('🖤');
                $array[] = "\n";
            } else {
                $array[] = emoje('🖤');
                $array[] = ($text_spam == null) ? ("I LOVE YOU") : ($text_spam); //text
                $array[] = ($emoji_left == null) ? ("❤️") : ($emoji_left); //emoji
                $array[] = "\n";
            }
        }
        foreach ($array as $value) {
            $print .= $value;
        }
    }
    return $print;
}
