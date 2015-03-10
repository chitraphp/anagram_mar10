<?php
class Anagram
{
    function anagramCheck($main_word, $array_to_compare)
    {
        $results = array();
        // foreach($array_to_compare as $word)
        // {
        //     if($word ==  $main_word)
        //     {
        //     array_push($results, true);
        //     }
        //     else
        //     {
        //     array_push($results, false);
        //     }
        // }
        foreach($array_to_compare as $word)
        {
            $main_word_array = str_split($main_word);
            $word_array = str_split($word);
            $word_match = array_diff($main_word_array, $word_array);
            if(empty($word_match))
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
