<?php
class Book{
   var $title;
   var  $authour;
   var $pages;
function __construct($title, $author, $pages){
       $this->title = $title;
       $this->author = $author;
       $this->pages = $pages;
   }
}
$book1 = new book("top", "ops",1000);
// $book1->title = "php 5 ";
// $book1->author = "matt doyle";
// $book1->pages =1000;
echo $book1->pages;
echo $book1->author;



class Student{
    var $name;
    var $dept;
    var $gpa;
    function __construct($name, $dept, $gpa){
        $this->name = $name;
        $this->dept = $dept;
        $this->gpa = $gpa;
    }
    function hasHonours(){
        if($this->gpa >= 3.5){
            return true;
        }else{
                return "false";
             }
         }
    }
    $tayo = new Student("tayo", "computer Engineering", "2.5");
    echo $tayo->name;

    echo $tayo->hasHonours();

    class Movies{
        public $title;
        private $rating;
    function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);



        }
        // getter
        function getRating(){
        return $this->rating;
        }
        // setter
        function setRating($rating){
           if ($rating == "pg"|| $rating=="pm"|| $rating=="pd"){
               return $this->rating = $rating;
           }
              }
    }
    $avengers = new Movies("hop", 10);
    // echo $avengers->rating; 
    echo $avengers->getRating();
    echo $avengers->setRating("g");
?>