<?php 
  // get directory of the files
  $mydir = 'audios/'; 

  
  // enumerate all files from the directory
  $myfiles = array_diff(scandir($mydir), array('.', '..')); 

  
  // print all files
  print_r($myfiles); 
  // declarate an array to insert all result
  $results = array();
  // declerate an array ton inser date

  // details of broadcast
  $day = array();
  $mounth = array();
  $search='Hoham';
  $number_date=3;
  $output_name='hohambinina';
    foreach ($myfiles as $value) {
        // check if an key word exist in specific files name
        if (strpos($value, $search) !== false) { 
           
        
            preg_match_all('!\d+!', $value, $matches);
            //  print_r($matches[0][$number_date]);
              // get the specific date from files and the specific month
              print($matches[0][$number_date+1]);
  
                array_push($day,$matches[0][$number_date]);
                array_push($mounth,$matches[0][$number_date+1]);
                 
              
             
              $results[] = $value;
         
          }
         
        
      
      }
      
      
      $i=0;
      // process to insert audio files to speficif destination folder
      foreach ($results as $key ) {
        if (!file_exists('audio/'.$mounth[$i].'/'.$day[$i].'/')) {
            mkdir('audio/'.$mounth[$i].'/'.$day[$i].'/', 0777, true);
        }
        $filesize = filesize($mydir.''.$key); // bytes
        $filesize = round($filesize / 1024 / 1024, 1)+1; // megabytes with 1 digit
        if($filesize >19)
        {
          //Generate a random string.
            $token = openssl_random_pseudo_bytes(16);

            //Convert the binary data into hexadecimal representation.
            $token = bin2hex($token);
            exec('ffmpeg -i "'.$mydir.''.$key.'" -map 0:a:0 -b:a 50k '.$mydir.''.$token.'.mp3');
            copy($mydir.''.$token.'.mp3','audio/'.$mounth[$i].'/'.$day[$i].'/'.$output_name.'.mp3');
            unlink($mydir.''.$token.'.mp3');
        }
        else{
          echo $mydir.'/'.$key;
          copy($mydir.''.$key,'audio/'.$mounth[$i].'/'.$day[$i].'/'.$output_name.'.mp3');
        }
       $i++;
    }
?> 
