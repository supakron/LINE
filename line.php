 <?php
  

function send_LINE($msg){
 $access_token = 'f6M2sJfwdu8s6vJAa8/tmQfejEK5GybYa+3uvAvAwReOdntAEsy1l2dT3Wh7XDr2gWGee6E5XmMfIa/oM/YCKF3HW12G0X6LAtNgqygrYW+s0NQLcljg8TrGzmAikh7xeZph/u5pxakegBIU7vY1jQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U09e1a6329958899387ec623fc038b10e',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
