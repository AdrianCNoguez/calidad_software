<?php
require 'vendor/autoload.php';
use Plivo\RestClient;

$client = new RestClient("MAY2M3ODRMYTG4MMYXYZ", "ZDJlZDIwMDg5MGQ1YjczZjhkOWM2YzcyMWFkMTdm");
$message_created = $client->messages->create(
    '+13862671187',
    ['+525525665055'],
    'Hello, world!'
);
