<?php
class attendee{
private static int $Count=0;
public function __construct()
{
   self::$Count++; 
}   
public static function get(){
    return self::$Count;
} 
}

$attended=new attendee();
$attendee=new attendee();
$attende=new attendee();
$attend3e=new attendee();
$attende5e=new attendee();
$atten3=new attendee();
$attende5=new attendee();
$atten4=new attendee();
$attesae=new attendee();

print_r(attendee::get());