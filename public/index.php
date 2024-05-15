<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

$pathInfo = array_key_exists('PATH_INFO', $_SERVER) ? $_SERVER['PATH_INFO'] : '/';
$method = $_SERVER['REQUEST_METHOD'];

if($pathInfo === '/' && $method === 'GET') {
    require_once '../views/letssoon.html';
} elseif($pathInfo === '/sendMail' && $method === 'POST') {
    require_once '../views/letssoon.html';
    //\RonnyJohn\Site\Controller\MailerController::sendEmail($mailer, $email);
} else {
    require_once '../views/letssoon.html';
}