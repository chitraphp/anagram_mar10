<?php
    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        //User inputs single word.
        //Output will display back user entry.

        function test_Match_letters_true()
        {
        //Arrange
        $test_Anagram = new Anagram();
        $input1 = "a";
        $input2 = array("a");

        //Act
        $result = $test_Anagram->anagramCheck($input1, $input2);

        //Assert
        $this->assertEquals(array(true), $result);
        }


        function test_Match_letters_false()
        {
        //Arrange
        $test_Anagram = new Anagram();
        $input1 = "a";
        $input2 = array("c");

        //Act
        $result = $test_Anagram->anagramCheck($input1, $input2);

        //Assert
        $this->assertEquals(array(false), $result);
        }

        function test_Match_two_letters()
        {
        //Arrange
        $test_Anagram = new Anagram;
        $input1 = "a";
        $input2 = array("a","b");

        //Act
        $result = $test_Anagram->anagramCheck($input1, $input2);

        //Assert
        $this->assertEquals(array(true,false), $result);
        }
    }
?>
