<?php
    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        //User inputs single word.
        //Output will display back user entry.

        function  test_diplay_user_input()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "cow";

            //Act
            $result = $test_Anagram->makeAnagram($input);

            //Assert
            $this->assertEquals("cow", $result);

            }
    }
?>
