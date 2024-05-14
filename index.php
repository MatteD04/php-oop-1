<?php 
class Movie {
    // variabili d'istanza
    public $title;
    public $year;
    public $genre;
    public $rating;
    public $country;

    //costruttore
    public function __construct($_title, $_year, $_genre, $_rating, $_country) {
        $this ->title = $_title;
        $this ->year = $_year;
        $this ->genre = $_genre;
        $this ->rating = $_rating;
        $this ->country = $_country;
    }

    //fnzione 
    public function getTitle() {
        return $this->title;
    }

}

$movie1 = new Movie('Il Padrino', 1972, 'mafia', 5, 'USA');
$movie2 = new Movie('Il Padrino parte II', 1974, 'mafia', 4, 'USA');
$movie3 = new Movie('Il padrino parte III', 1990, 'mafia', 3, 'USA');

var_dump($movie1);
var_dump($movie2);
var_dump($movie3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>I film</h1>
        <div> <?php echo $movie1->getTitle() ?></div>
        <div> <?php echo $movie2->getTitle() ?></div>
        <div> <?php echo $movie3->getTitle() ?></div>
    </div>
</body>
</html>