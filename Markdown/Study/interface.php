<?php

  interface Student
  {
    function study();
  }

  interface Teacher
  {
    function teach();
  }

  class Hale
  {
    function say()
    {
      echo "I Love PHP <hr>";
    }
    function run()
    {
      echo "I can run <hr>";
    }
  }

  class Mike extends Hale implements Student
  {
    function eat()
    {
      echo "I can Eat <hr>";
    }
    function play()
    {
      echo "I can play <hr>";
    }

    function study()
    {
      echo "I can study <hr>";
    }
    function teach()
    {
      echo "I can Teach <hr>";
    }
  }

  $me = new Hale();
  $me -> say();

  Mike::study();
  $u = new Mike();
  $u -> say();



 ?>
