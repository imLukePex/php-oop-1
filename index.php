<?php

    class Movie {

        public $name;
        public $cast;
        public $duration;
        public $date;

        public function __construct($name, $cast, $duration, $date) {
            $this -> name = $name;
            $this -> cast = $cast;
            $this -> duration = $duration;
            $this -> date = $date;
        }

        public function getName() {
            return $this -> name;
        }
        public function setName($name) {
            $this -> name = $name;
        }
    }

    $movies = [
        
        new Movie("Interstellar", ["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain", "Bill Irwin"], "2h 49m", "2014-09-05"),
        new Movie("Oppenheimer", ["Cillian Murphy", "Emily Blunt", "Matt Damon", "Robert Downey Jr."], "3h", "2023-08-23")
    ];

    foreach($movies as $movie) {
        echo "Title: " . $movie -> name;
        echo "<br>";
        echo "Cast: " . implode(", ", $movie -> cast);
        echo "<br>";
        echo "Duration: " . $movie -> duration;
        echo "<br>";
        echo "Release Date: " . $movie -> date;
        echo "<br><br><br>";
    }

    var_dump($movie -> getName());
    echo "<br>";
    $movie -> setName("Pulp Fiction");
    var_dump($movie -> getName());
?>