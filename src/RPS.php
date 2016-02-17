<?php
class RPS
{
  function playGame($first_input, $second_input) {
    if ($first_input == "rock" && $second_input == "scissors") {
      return "Player 1";
    } elseif ($first_input == "scissors" && $second_input == "rock") {
      return "Player 2";
    }
  }
}


 ?>
