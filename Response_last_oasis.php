<?php

/**
 *
 */
class Broadcasting
          {
              public $name;
              public $file;
          }
class Response
{

 CONST ACCESS_TOKEN_GET_INFO ='EAAdcsaFXQy8BAErxBGRGmBegvBZCyTolvSyW7IXbNIQ0dcymA0snLkqdcdniLj4Og7OwHfBBnzRZAGOF7EcNjhSZAs6aOpDzDcXjA8q5IA1DNQwQk4EnzNg1sZC0Rolpw1zrUXT5U0tf4bvUIOowMCtbQDoiJSU3K5kyVh7BTukcPwQC07dc';
 CONST ACCESS_TOKEN ='EAAdcsaFXQy8BAErxBGRGmBegvBZCyTolvSyW7IXbNIQ0dcymA0snLkqdcdniLj4Og7OwHfBBnzRZAGOF7EcNjhSZAs6aOpDzDcXjA8q5IA1DNQwQk4EnzNg1sZC0Rolpw1zrUXT5U0tf4bvUIOowMCtbQDoiJSU3K5kyVh7BTukcPwQC07dc';
 CONST IMAGE='https://adventistfmc.mg/script/oasis.jpg';
  CONST QUICK_REPLY1=',
         "quick_replies":[
           {
            "content_type":"text",
            "title":"Fandaharana",
            "payload":"Emission",
            "image_url":"https://pngimg.com/uploads/radio/radio_PNG19296.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Hizara ny apps",
            "payload":"Sharing",
            "image_url":"https://media.business-antidote.com/uploads/2014/09/augmenter-nombre-partage-facebook-contenu-peu-interessant.jpg"
          }
          ,
          {
            "content_type":"text",
            "title":"Fandaharana live",
            "payload":"Live",
            "image_url":"https://c2g8v2d7.rocketcdn.me/wp-content/uploads/2018/10/facebook-live-guide.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Hanohana",
            "payload":"Support",
            "image_url":"https://cfengine.com/wp-content/uploads/2014/05/Support.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Menu",
            "payload":"Menu",
            "image_url":"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0FI65HbTHCnh-KAep6xjvXbN7-JQkP6B-rA&usqp=CAU"
          }
          ,
          {
            "content_type":"text",
            "title":"Mpamolavola",
            "payload":"Developer",
            "image_url":"https://envri.eu/wp-content/uploads/2016/08/software-developer-copy.jpg"
          }
        ]';
        /*fonctional quick reply in all messages*/
 CONST QUICK_REPLY=',
         "quick_replies":[
           {
            "content_type":"text",
            "title":"Fandaharana",
            "payload":"Emission",
            "image_url":"https://pngimg.com/uploads/radio/radio_PNG19296.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Hizara ny apps",
            "payload":"Sharing",
            "image_url":"https://media.business-antidote.com/uploads/2014/09/augmenter-nombre-partage-facebook-contenu-peu-interessant.jpg"
          }
          ,
          {
            "content_type":"text",
            "title":"Fandaharana live",
            "payload":"Live",
            "image_url":"https://c2g8v2d7.rocketcdn.me/wp-content/uploads/2018/10/facebook-live-guide.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Hanohana",
            "payload":"Support",
            "image_url":"https://cfengine.com/wp-content/uploads/2014/05/Support.png"
          }
          ,
          {
            "content_type":"text",
            "title":"Menu",
            "payload":"Menu",
            "image_url":"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0FI65HbTHCnh-KAep6xjvXbN7-JQkP6B-rA&usqp=CAU"
          }
          ,
          {
            "content_type":"text",
            "title":"Mpamolavola",
            "payload":"Developer",
            "image_url":"https://envri.eu/wp-content/uploads/2016/08/software-developer-copy.jpg"
          }
        ]';

public  function sendGeneircDynamic($recipient,$arr)
  {
    $messageData='{
      "recipient":{
        "id":"'.$recipient.'"
      },
      "message":{
        "attachment":{
          "type":"template",
          "payload":{
            "template_type":"generic",
            "elements":'.json_encode($arr).'

          }
        }'.self::QUICK_REPLY.'
      }
    }';
    $this->sendApiCall($messageData);

  }
  public function save($recipient)
  {
    $first_name= $this->get_firstname($recipient);
    $last_name = $this->get_lastname($recipient);
    $gender= $this->get_gender($recipient);
    $timezone = $this->get_timezone($recipient);
    $url_picture = $this->get_picture($recipient);

    header('Location: https://www.adventistfmc.mg/bot/home/save?id_messenger='.$recipient.'&first_name='.rawurlencode($first_name).'&last_name='.rawurlencode($last_name).'&gender='
      .$gender.'&timezone='.$timezone.'&url_picture='.$url_picture.''); 
   
  }
    public function Developer($recipient)
  {
    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "Raharinjatovo Mbolatiana",
            "subtitle": "Backend web developer",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "https://adventistfmc.mg/script/mbola.jpg"
          }, {

            "title": "Ps Tefy Randrianarivony",
            "subtitle": "Directeur Communication de la FMC ",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url": "https://adventistfmc.mg/script/ps_tefy.jpg"


          }]
        }
      }'.self::QUICK_REPLY.'
    }
  }';
    $this->sendApiCall($messageData);

  }
  public function Main_menu_img_redir($recipient)
  {
    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "рџ›Ќ️ Produits",
            "subtitle": "Nos produits",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [{
              "type": "postback",
              "title": "Voir les produits",
              "payload": "Emission",
            }]
          }]
        }
      }
    }
  }';
    $this->sendApiCall($messageData);

  }
  public function remote_file_exists($url){
    $ch = curl_init($url);
     $userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';
     curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if( $httpCode == 200 ){return true;}
    return false;
}
  public function  sendReadReceipt($recipient)
  {
    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    sender_action: "mark_seen"
  }';
  $this->sendApiCall($messageData);
  }
  public function Main_menu($recipient)
  {
    $messageData='{
    "recipient": {
      id: "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "Fandaharana",
            "subtitle": "Ireo Fandaharana rehetra ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [{
              "type": "postback",
              "title": "Hihaino рџЋ§",
              "payload": "Emission",
            }]
          }, {
            "title": "Mediasion",
            "subtitle": "Misy ireo vokatry ny tarika ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [ {
              "type": "postback",
              "title": "Mediasion",
              "payload": "Mediasion",
            }]
          },
          {
            "title": "Circulaire",
            "subtitle": "Fandefasana filazan-draharaha ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [ {
              "type": "postback",
              "title": "Circulaire рџ—ћ️",
              "payload": "Circulaire",
            }]
          }]
        }
      }
    }
  }';
    $this->sendApiCall($messageData);

  }
  /*cart messenger for sharing*/
  public function sharing_bot($recipient)
  {

    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "Radio oasis bot",
            "subtitle": "Fihainoana ny radio oasis amin\'ny fotoana rehetra eto amin\'ny Messenger",
            "item_url": "https://m.me/radio.oasis.bot",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [{
             "type":"web_url",
            "url":"https://m.me/radio.oasis.bot",
            "title":"Hampiasa "
            }]
          }]
        }
      }
    }
  }';
    $this->sendApiCall($messageData);

  }
  /*Live emission page to redirect*/
  public function emission_live_redirect($recipient)
  {

    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "Page: Radio oasis Tana",
            "subtitle": "Page officiel de la radio oasis tana",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "https://www.prodns.xyz/mbola/oasis/oasis%20banner.jpg",
            "buttons": [{
             "type":"web_url",
            "url":"https://www.facebook.com/325249474338906/videos/246273990200275",
            "title":"Hitsidika"
            }]
          },{
            "title": "Page: A vous l\'antenne",
            "subtitle": "Page officiel de l\'emission animation d\'antenne de la radio oasis tana",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "https://www.prodns.xyz/mbola/oasis/a%20vous%20banner.jpg",
            "buttons": [{
             "type":"web_url",
            "url":"https://www.facebook.com/1198522026945840/videos/716449069137377",
            "title":"Hitsidika"
            }]
          }]
        }
      }'.self::QUICK_REPLY.'
    }
  }';
    $this->sendApiCall($messageData);

  }
  public function Menu($recipient)
  {
    $messageData='{
    "recipient": {
      "id": "'.$recipient.'"
    },
    "message": {
      "attachment": {
        "type": "template",
        "payload": {
          "template_type": "generic",
          "elements": [{
            "title": "Fandaharana",
            "subtitle": "Ireo Fandaharana rehetra ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [{
              "type": "postback",
              "title": "Hihaino рџЋ§",
              "payload": "Emission",
            }]
          }, {
            "title": "Mediasion",
            "subtitle": "Misy ireo vokatry ny tarika ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
              "buttons": [ {
              "type": "postback",
              "title": "Mediasion",
              "payload": "Mediasion",
            }]
          },
          {
            "title": "Circulaire",
            "subtitle": "Fandefasana filazan-draharaha ,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡,tsindrio ny bokotra eo ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
            "item_url": "http://www.adventistfmc.mg/",
            "image_url":  "'.self::IMAGE.'",
            "buttons": [ {
              "type": "postback",
              "title": "Circulaire рџ—ћ️",
              "payload": "Circulaire",
            }]
          }]
        }
      }
    }
  }';
    $this->sendApiCall($messageData);

  }
  public function sendAudio_quickreply($recipient,$link)
  {
    $messageData='{
  "recipient":{
    "id":"'.$recipient.'"
  },
  "message":{
    "attachment": {
      "type": "audio",
          "payload": {
              "url": "'.$link.'"
            }
      }
  }
}';
$this->sendApiCall($messageData);
  }
  public function sendAudio($recipient,$link)
  {
    $messageData='{
  "recipient":{
    "id":"'.$recipient.'"
  },
  "message":{
    "attachment":{
      "type":"audio",
      "payload":{
        "url":"'.$link.'"
       }
    }
  }
}';
$this->sendApiCall($messageData);
  }
  public function sendvideo($recipient,$link)
  {
    $messageData='{
  "recipient":{
    "id":"'.$recipient.'"
  },
  "message":{
    "attachment":{
      "type":"video",
      "payload":{
        "url":"'.$link.'"
       }
    }'.self::QUICK_REPLY.'
  }
}';
$this->sendApiCall($messageData);
  }
  public function mandefa()
  {
    $target_url = 'https://adventistfmc.mg/script/get_all_products.php';
$userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';

// make the cURL request to $target_url
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$html= curl_exec($ch);
if (!$html) {
echo "<br />cURL error number:" .curl_errno($ch);
echo "<br />cURL error:" . curl_error($ch);
exit;
}

foreach (json_decode($html) as $key ) {
  $this->sendTextMessage($key,'Ialana tsiny ny fahatapahana efa miverina mandeha ny bot izao :)');
 //$user->sendvideo($key,'https://www.prodns.xyz/mbola/video.mp4');
}
  }
  public function sendTextMessage($recipient,$messagetext)
  {
   $messageData='{
     
    "recipient":{
      "id":"'.$recipient.'"
    },
    "message":{
     "text":"'.$messagetext.'"'.self::QUICK_REPLY1.'
   }
 }';

      $this->sendApiCall($messageData);
  }
 public function sendTextMessage1($recipient,$messagetext)
 {
   $messageData='{
      
    "recipient":{
      "id":"'.$recipient.'"
    },
    "message":{
     "text":"'.$messagetext.'"'.self::QUICK_REPLY1.'
   }
 }';

     $this->sendApiCall($messageData);
 }
  public function sendApiCall($messageData)
  {
    $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v8.0/me/messages?access_token='.self::ACCESS_TOKEN);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $messageData);

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

  }

  public function getcontent($url)
  {

    return file_get_contents($url);
  }
   public function show($url)
  {
    $this->getcontent($url);
  }
  public function user_info($recipient)
  {
    $data= $this->getcontent('https://graph.facebook.com/'
    .$recipient.'?fields=gender,timezone,first_name,last_name,profile_pic&access_token='.self::ACCESS_TOKEN_GET_INFO);
    return json_decode($data);

  }
  public function get_gender($recipient)
 {

   return $this->user_info($recipient)->{'gender'};
 }
  public function get_lastname($recipient)
 {

   return $this->user_info($recipient)->{'last_name'};
 }
  public function get_firstname($recipient)
 {
   return $this->user_info($recipient)->{'first_name'};
 }
   public function get_timezone($recipient)
  {

     return $this->user_info($recipient)->{'timezone'};
  }
  public function get_picture($recipient)
  {

     return $this->user_info($recipient)->{'profile_pic'};
  }
  public function get_date_by_timezone_of_user($recipient)
  {
  $data=  $this->get_timezone($recipient);
  return $this->get_date_by_timezone($data);
    // code...
  }
  public function get_date_by_timezone($timezone)
  {
    return $this->getcontent('https://viratrends.com/botscripts/wb_weekday.php?timezone='.$timezone);

  }
  public function get_day($recipient)
  {
    return json_decode($this->get_date_by_timezone_of_user($recipient));

  }
  public function get_day_audio($recipient)
  {
    $data = $this->get_timezone($recipient);

    $diff1Day = new DateInterval('P1D');
    $diff24Hours = new DateInterval('PT24H');
    $diff1440Minutes = new DateInterval('PT1440M');

    // Clocks changed at 2014-03-30 02:00:00

    $day=date('d');
    $month= date('m');
    $year = date('Y');
    $hour=date('H');
    $minute=date('i');
    $second=date('s');

    $d1 =   new DateTime($year.'/'.$month.'/'.$day
    .' '.$hour.':'.$minute.':'.$second);
    // Add 1 day - expect time to remain at 08:00
   if (($hour-$data)<0&&($hour+$data)<23) {
      $d1=$d1;
   }elseif(($hour+$data)<0) {
     // if hour < 0
      $d1->sub($diff24Hours);
   }elseif(($hour+$data)>24) {
     // if hour >24
      $d1->add($diff24Hours);
   }else {
    //  $d1->add($diff24Hours);
   }



    // print_r($d1);
    // //echo $d1['date'];
    // echo $d1->format('Y-m-d');



    return '/'.$d1->format('Y')
    .'/'.$d1->format('m')
    .'/'.$d1->format('d').'/';

  }
  public function get_day_data($recipient)
  {
    $data = $this->get_timezone($recipient);

    $diff1Day = new DateInterval('P1D');
    $diff24Hours = new DateInterval('PT24H');
    $diff1440Minutes = new DateInterval('PT1440M');

    // Clocks changed at 2014-03-30 02:00:00

    $day=date('d');
    $month= date('m');
    $year = date('Y');
    $hour=date('H');
    $minute=date('i');
    $second=date('s');

    $d1 =   new DateTime($year.'/'.$month.'/'.$day
    .' '.$hour.':'.$minute.':'.$second);
    // Add 1 day - expect time to remain at 08:00
   if (($hour-$data)<0&&($hour+$data)<23) {
      $d1=$d1;
   }elseif(($hour+$data)<0) {
     // if hour < 0
      $d1->sub($diff24Hours);
   }elseif(($hour+$data)>24) {
     // if hour >24
      $d1->add($diff24Hours);
   }else {
    //  $d1->add($diff24Hours);
   }



    // print_r($d1);
    // //echo $d1['date'];
    // echo $d1->format('Y-m-d');


    return '/'.$d1->format('Y')
    .'/'.$d1->format('m')
    .'/'.$d1->format('d').'/';
  }
 public function get_emission($recipient)
  {
          
         
          $fiambenana_maraina = new Broadcasting();
          $fiambenana_maraina->name = 'Fiambenana Maraina рџ“–';
          $fiambenana_maraina->file = 'mofo.mp3';
          
          $Araho_ny_baiboly = new Broadcasting();
          $Araho_ny_baiboly->name = 'Araho ny baiboly рџ“–';
          $Araho_ny_baiboly->file = 'baiboly.mp3';

          $Araho_ny_baiboly_ankizy = new Broadcasting();
          $Araho_ny_baiboly_ankizy->name = 'Araho ny baiboly ankizy  рџ“–';
          $Araho_ny_baiboly_ankizy->file = 'ankizy.mp3';

          $Lesona_zatovo = new Broadcasting();
          $Lesona_zatovo->name = 'Lesona Zatovo рџ§‘‍рџЋ“';
          $Lesona_zatovo->file = 'tdt.mp3';

          $Lesona_tanora_zokiny = new Broadcasting();
          $Lesona_tanora_zokiny->name = 'Lesona Tanora zokiny рџ‘©‍❤️‍рџ‘Ё';
          $Lesona_tanora_zokiny->file = 'ttz.mp3';
                        
         $All_broadcasting = array($fiambenana_maraina,
          $Araho_ny_baiboly,
          $Araho_ny_baiboly_ankizy,
          $Lesona_zatovo,
          $Lesona_tanora_zokiny);
    //https://adventistfmc.mg/script/show.php?day=01&month=09&year=2020
    $array = array();
    $num=1;
    
    $data=$this->get_day_data($recipient);

     
     /* if emission dont exists */
     
       $this->sendTextMessage($recipient,'Tsy mbola tafiditra ny Fandaharana androany');
       foreach ($All_broadcasting as $key1 ) {
        echo 'audio'.$data.''.$key1->file;
        if (file_exists('audio'.$data.''.$key1->file)) {
          if ($num%10==0) {
            array_push($array,'
               {
                "title": "'. $key1->name.'",
                "subtitle": "Tsindrio ny bokotra etsy ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
                "item_url": "https://adventistfmc.mg/",
                "image_url":  "https://www.prodns.xyz/mbola/oasis/oasis.jpg",
                "buttons": [{
                  "type": "postback",
                  "title": "Hihaino рџЋ§",
                  "payload": "'.$key1->file.'",
                }]
              }');
  
                $num=$num+1;
                  $this->sendGeneircDynamic($recipient,json_encode($array));
              $array=[];
          }else {
  
            array_push($array,'
               {
                "title": "'. $key1->name.'",
                "subtitle": "Tsindrio ny bokotra etsy ambany рџ‘‡рџ‘‡рџ‘‡рџ‘‡рџ‘‡",
                "item_url": "https://adventistfmc.mg/",
                "image_url":  "https://www.prodns.xyz/mbola/oasis/oasis.jpg",
                "buttons": [{
                  "type": "postback",
                  "title": "Hihaino рџЋ§",
                  "payload": "'.$key1->file.'",
                }]
              }');
              $num=$num+1;
  
          
  
  
             
        
  
      }
      }
          
     
    }
   
    $this->sendGeneircDynamic($recipient,json_encode($array));
     
           $array=[];
  }
  public function sendTypingOn($recipient)
  {
    $messageData='{
  "recipient":{
    "id":"'.$recipient.'"
  },
  "sender_action":"typing_on"
}';
	$this->sendApiCall($messageData);
  }
  public function sendTypingOff($recipient)
  {
    $messageData='{
  "recipient":{
    "id":"'.$recipient.'"
  },
  "sender_action":"typing_off"
}';
	$this->sendApiCall($messageData);
  }
  public function audio_emission($recipient,$payload)
  {
    $data=$this->get_day_data($recipient);
    if (file_exists('audio'.$data.''.$payload)) {
        echo 'https://www.prodns.xyz/mbola/oasis/audio'.$data.''.$payload;
      
       $this->sendAudio_quickreply($recipient,'https://www.tinady.mg/oasis/audio'.$data.''.$payload);
    }
    else{
        $this->sendTextMessage($recipient,'tsy mandeha androany io fandaharana io \n Azafady, tsindrio ny bokotra fandaharana ahitanao ireo fandaharana androany');
     
    }
     
    
  }

}



 ?>
