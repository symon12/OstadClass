<?php
// class card{
//     public $product;
//     public $shipping;
//     public $discount;
//     public function Calculate() {
//         $count= $this->product+ $this->shipping -$this->discount;
//         return $count;
//     }        
//     }
//     $obj=new card();
//     $obj->product =10;
//     $obj->shipping=120;
//     $obj->discount=10;

//     $count=$obj->Calculate();
//     echo $count;

    //interactions & composition=========>
    // class song{
    //     public $songName;
    //     public $songNum;
    // }
    // $name=new song();
    // $name->songName="name";
    // $name->songNum=1;
    // // echo $name;

    // class playlist{
    //     public $name;
    //     public $djsong;
    //     public $songs=[];
    //     public function addSong($song){
    //         $this->songs[]=$song;
    //     }            
    //     }
    //     $Rockplaylist=new playlist();
    //     $Rockplaylist->name="rock";
    //     $Rockplaylist->djsong="hony sing";
    //     $Rockplaylist->addsong($name);
    // print_r($Rockplaylist);


//  class ledarBoad{
//     public $ahsan;
//     public $symon;
//     public $ahad;
//     public function leader(){
//         $this->ahsan;
//         $this->symon;
//         $this->ahad;
// }
//  }
//  $obj=new ledarBoad();
//  $obj->leader();
// //  print_r($obj);

// class result{
//     public $rank=[];
//     public function leaderboard($leaders){
//         $this->rank[]=$leaders;
//     }
// }

// $ranks=new result();
// $ranks->leaderboard($obj);
// print_r($ranks);

//public==================>
 
// class names{
//     public $name;
//     public function data(){
//         echo "symon";
//     }
// }
// $obj=new names();
// $obj->data();

//private============================>
class names{
    private function data(){
        echo "symon";
    }
}
$obj=new names();
$obj->data();

