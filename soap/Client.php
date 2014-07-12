<?php
$options = array(
    'uri' => 'http://localhost',
    'location' => 'http://localhost/szkolenie/api/soap/Service.php',
    'trace' => 1
);
$client = new SoapClient(NULL, $options);

echo $client->getDisplayName('Joe','Bloggs');

