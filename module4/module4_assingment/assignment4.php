<?php
class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function introduce(){
       echo" My name is {$this->name} and I am {$this->age} years Old";
        
    }
         
    }
    $person = new person("john",30);
    $person->introduce();

    //task 2

    class Person {
        protected $name;
        protected $age;
    
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    
        public function getName() {
            return "My name is ". $this->name.",";
        }
    
        public function getAge() {
    
            return "I am {$this->age} years old";
        }
    }
    
    class Student extends Person {
        private $mark;
    
        public function __construct($name, $age, $mark) {
            parent::__construct($name, $age);
            $this->mark = $mark;
        }
    
        public function getMark() {
            return $this->mark;
        }
    
        public function calculate_grade_percentage() {
            $percentage = ($this->mark / 100) * 100;
            echo "{$this->getName()} {$this->getAge()} \n";
            echo "My grade percentage is  {$percentage}%";
        }
    }
    





//     class Student extends Person{
//         public $name;
//         public $age;
//         public $mark;

//         public function __construct($name, $age,$mark){

//         $this->name=$name;
//         $this->age=$age;
//         $this->mark=$mark;
            
//         }
//         public function introduce(){
//             echo "My name is $this->name, I am $this->age Years old";
//         }
        
//         public function calculate_grade_percentage() {

            
       
//        }
//     }

// $student = new Student("Robert", 18, “85”);

// $student->introduce();

    
