<?php
require_once(__DIR__.'./vendor/autoload.php');
use \Mailjet\Resources;

define('API_USER', 'afd17be2accc0ec5f33526c86bc43ed5');
define ('API_LOGIN', '226f628b19b3643d92683447ad4c7c50');
$mj = new \Mailjet\Client(API_USER, API_LOGIN, true,['version' => 'v3.1']);

if(!empty($_POST['email'])&& !empty($_POST['lastname'])&& !empty($_POST['firstname'])&& !empty($_POST['reservation'])&& !empty($_POST['hour'])&& !empty($_POST['telNo'])&& !empty($_POST['number'])&& !empty($_POST['message'])){
$email = htmlspecialchars($_POST['email']);
$lastname = htmlspecialchars($_POST['lastname']);
$firstname = htmlspecialchars($_POST['firstname']);
$reservation = htmlspecialchars($_POST['reservation']);
$hour = htmlspecialchars($_POST['hour']);
$telNo = htmlspecialchars($_POST['telNo']);
$number = htmlspecialchars($_POST['number']);
$message = htmlspecialchars($_POST['message']);

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    $body = [
        'Messages' => [
          [
            'From' => [
              'Email' => "samimakhloufi55@gmail.com",
              'Name' => "Sami"
            ],
            'To' => [
              [
                'Email' => "samimakhloufi55@gmail.com",
                'Name' => "Sami"
              ]
            ],
            'Subject' => "Demande de renseignement.",
            'TextPart' => "$email, $message, $reservation",
            
            'CustomID' => "AppGettingStartedTest"
          ]
        ]
      ];
      $response = $mj->post(Resources::$Email, ['body' => $body]);
      $response->success();
      echo "email envoyée";
}else {
    echo "Email non valide";
}

}else {

}
