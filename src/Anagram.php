<?php
class Anagram
{
    function anagramCheck($main_word, $array_to_compare)
    {
        $results = array();
        foreach($array_to_compare as $word)
        {
            if($word ==  $main_word)
            {
            array_push($results, true);
            }
            else
            {
            array_push($results, false);
            }
        }

        return $results;

    }




}
?>
