 <?php
// class attendee{
// private static int $Count=0;
// public function __construct()
// {
//    self::$Count++; 
// }   
// public static function get(){
//     return self::$Count;
// } 
// }

// $attended=new attendee();
// $attendee=new attendee();
// $attende=new attendee();
// $attend3e=new attendee();
// $attende5e=new attendee();
// $atten3=new attendee();
// $attende5=new attendee();
// $atten4=new attendee();
// $attesae=new attendee();

// print_r(attendee::get()); -->

// class Product {
//     private $id;
//     private $name;
//     private $price;

//     public function __construct($id, $name, $price) {
//         $this->id = $id;
//         $this->name = $name;
//         $this->price = $price;
//     }


//     public function getFormattedPrice($price) {
//         return '$' . number_format($price, 2);  // decimal number koita hoba===>
//     }

//     public function showDetails() {
//         echo "Product Details:\n";
//         echo "- ID: {$this->id}\n";
//         echo "- Name: {$this->name}\n";
//         echo "- Price: {$this->getFormattedPrice($this->price)}\n";
//     }
// }

// $product = new Product(1, 'T-shirt', 19.99);
// $product->showDetails();

// class names{
//     public $name;
//     public $name2;
//     public function __construct($name,$name2)
//     {
//         $this->name=$name;
//         $this->name2=$name2;
//     } 
//     public function name1(){
//         return  $this->name;
//         return $this->name2;

//     }
//     public function name2(){
//         $this->name1();
//         echo "my name is {$this->name}\n";
//         echo "my name is {$this->name2}";
//     }
// }
// $obj=new names("symon","ahad");
// $obj->name2();


// class funds{
//     private $fund;

//     public function __construct($aFund=0)
//     {
//         $this->fund=$aFund;
//     }
//        public function addFund($mony) {
//         $this->fund +=$mony;
//         }
//         public function reFund($mony){
//             $this->fund -=$mony;
//         }
//         public function totalFund(){
//             echo "my fund is {$this->fund}\n";
//         }
//     }
// $ourFund= new funds(100);
// $ourFund->totalFund();
// $ourFund->addFund(40);
// $ourFund->totalFund();
// $ourFund->reFund(20);
// $ourFund->totalFund();

// class Account{
//     private $deposit;
//     private $accountCheck;
//     private $withdraw;

//     public function __construct($deposit,$accountCheck,$withdraw)
//     {
//         $this->deposit=$deposit;
//         $this->accountCheck=$accountCheck;
//         $this->withdraw=$withdraw;
//     }
//     public function myMony(){
//         $myAccountCheck = $this->deposit +=$this->accountCheck;
//         return $myAccountCheck-=$this->withdraw;
//     }
//     public function totalMony(){
//             echo "my Balance is {$this->myMony()}" ;
//     }
// }
// $myAccount=new Account(50,20,40);
// $myAccount->totalMony();