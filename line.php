 <?php
  

function send_LINE($msg){
 $access_token = 'gdnm9on2g5p3VAL9BTQU1CJi2qi0KYfjsJazE0Hx1H/eOB7nh6Z0UF8sCVElgeLxpPIaA2BLvBVhnCIUlyn1iX1XfAD1zXVQocnW8UCoRNeeBsoa+gNZM8pnEmuX/TzDZWXZIabQJBjH2/ZrOlaa0QdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U3e189474ddd1187b8d60b885332fd80a',
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
