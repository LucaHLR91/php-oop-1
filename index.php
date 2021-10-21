<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        public $title;
        public $subtitle;
        public $director;
        public $genre;
        public $time;
        public $language;

        function __construct($_title, $_subtitle, $_director, $_genre, $_time, $_language)
        {
            $this->title = $_title;
            $this->subtitle = $_subtitle;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->time = $_time;
            $this->language = $_language;
        }
    }

    $movie1 = new Movie('Lord Of The Rings', 'The Return Of The King', 'Peter Jackson', 'Fantasy', 178, 'English');
    $movie2 = new Movie('Lord Of The Rings', 'The Two Towers', 'Peter Jackson', 'Fantasy', 178, 'English');
?>