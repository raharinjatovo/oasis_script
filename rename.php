<?php 
  // get directory of the files
  $mydir = 'and/'; 
  $date=array();
for ($i=22; $i <=26 ; $i++) { 
  $date[]=$i;
}
  
  // enumerate all files from the directory
   $myfiles = array_diff(scandir($mydir), array('.', '..')); 
   $num=0;
  foreach ($myfiles as $value) {
    
    $new_name=str_replace('12', 'dec', $value);
    rename ("$mydir/$value", "$mydir/$new_name");
    $num++;
  }
  
  // print all files
  print_r(count($myfiles));
  print_r($date);