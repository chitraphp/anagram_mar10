<?php
    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        //User inputs single word.
        //Output will display back user entry.

        function  test_diplay_user_input()
        {
            //Arrange
            $test_Anagram = new Anagram();
            $input = array();
            $input = ["cow"];


            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals($input, $result);

        }


        //Input: User input word.
        //Output: will compare to user list.
        function test_compare_user_list()
        {
            //Arrange
            $test_Anagram = new Anagram();
            $input = array();
            $input = ["cow"];
            $list_of_words = array();
            $list_of_words = ["cow"];

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals($list_of_words, $result);
        }
    }
?>
