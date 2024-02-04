<?php

    class Movie {

        public $name;
        public $cast;
        public $time;
        public $date;

        public function __construct($name, $cast, $time, $date) {
            $this -> name = $name;
            $this -> cast = $cast;
            $this -> time = $time;
            $this -> date = $date;
        }

        public function getName() {
            return $this -> name;
        }
        public function setName($name) {
            $this -> name = $name;
        }
    }

    $movie1 = new Movie("Interstellar", "Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin", "2h 49m", "2014-09-05");
    $movie2 = new Movie("Oppenheimer", "Cillian Murphy, Emily Blunt, Matt Damon, Robert Downey Jr.", "3h", "2023-08-23");


    var_dump($movie1);
    echo "<br> <br>";

    var_dump($movie1 -> name);
    echo "<br>";
    var_dump($movie1 -> cast);
    echo "<br>";
    var_dump($movie1 -> time);
    echo "<br>";
    var_dump($movie1 -> date);

    echo "<br>-------------------------------<br>";

    var_dump($movie2);
    echo "<br> <br>";

    var_dump($movie2 -> name);
    echo "<br>";
    var_dump($movie2 -> cast);
    echo "<br>";
    var_dump($movie2 -> time);
    echo "<br>";
    var_dump($movie2 -> date);

    echo "<br>-------------------------------<br>";

    var_dump($movie1 -> getName());
    echo "<br>";
    $movie1 -> setName("Pulp Fiction");
    var_dump($movie1 -> getName());
?>