<?php

    require_once "src/RPS.php";

    class RPSTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }

?>
