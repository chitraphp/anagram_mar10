<?php
class Anagram
{
    function anagramCheck($main_word, $array_to_compare)
    {
        $results = array();
        if(in_array($main_word, $array_to_compare))
        {
            array_push($results, true);
        }
        else
        array_push($results, false);

        return $results;

    }




}
?>
