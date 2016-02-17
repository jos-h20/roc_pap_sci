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
        function test_scissors_rock()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_draw()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
        function test_rock_paper()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_paper_rock()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_paper_paper()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "paper";
            $second_input = "paper";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
        function test_paper_scissors()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }
        function test_scissors_paper()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_scissors_scissors()
        {
            //Arrange
            $test_RPS = new RPS;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test_RPS->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }
    }

?>
