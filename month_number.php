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
  $search='Mofo';
  $number_date=1;
  $output_name='mofo';
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
            mkdir('files/'.$mounth[$i].'/'.$day[$i].'/', 0777, true);
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
           
            $myfile = fopen('files/'.$mounth[$i].'/'.$day[$i].'/'.$output_name.'.txt', "w") or die("Unable to open file!");
            $txt = "John Doe\n";
            fwrite($myfile, $txt);
            $txt = "Jane Doe\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            unlink($mydir.''.$token.'.mp3');
        }
        else{
          echo $mydir.'/'.$key;
          copy($mydir.''.$key,'audio/'.$mounth[$i].'/'.$day[$i].'/'.$output_name.'.mp3');
       
            $myfile = fopen('files/'.$mounth[$i].'/'.$day[$i].'/'.$output_name.'.txt', "w") or die("Unable to open file!");
            $txt = "John Doe\n";
            fwrite($myfile, $txt);
            $txt = "Jane Doe\n";
            fwrite($myfile, $txt);
            fclose($myfile);
        }
       $i++;
    }
?> 
