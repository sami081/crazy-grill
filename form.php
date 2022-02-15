<?php
require_once(_DIR_. '/composer/vendor/autoload.php');
use \Mailjet\Ressources;
define('API_USER', 'bfc4f2fac5c5a8c81e445bd39757aed7');
define('API_LOGIN', 'e2649ab61060f47113c1afff4cdfeaae');
$mj = new \Mailjet\Client(API_USER,'API_LOGIN',true,['version' => 'v3.1']);


if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['message'])){
$email = htmlspecialchars($_POST['email']);
$firstname = htmlspecialchars($_POST['firstname']);
$message = htmlspecialchars($_POST['message']);

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "makhloufisami0811@gmail.com",
          'Name' => "sami"
        ],
        'To' => [
          [
            'Email' => "makhloufisami0811@gmail.com",
            'Name' => "sami"
          ]
        ],
        'Subject' => "Demande de renseignement.",
        'TextPart' => "$email, $firstname, $message",
        
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() ;
  echo "email envoyé avec succès";
};

}else{
  heade('Location: contact.html');
  die();
}
?>
