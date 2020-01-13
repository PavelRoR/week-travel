<?php
if (file_exists(__DIR__ . '/params.local.php')) {
    return require(__DIR__ . '/params.local.php');
}
return [
    'adminEmail' => 'admin@example.com',
    'social' => [
       'vk'=> [
           'client_id'=>'6242109',
           'client_secret'=>'tUfohXD6twM3FOgeEHZO',
           'service_token'=>'e3f8826ae3f8826ae3f8826a8ae3a7bd57ee3f8e3f8826aba01fefed092b53db7a03351'
       ],
       'gp'=> [
           'client_id'=>'314635983834-3s4affu1j9qg30ed9m5gkh0gnmucv80q.apps.googleusercontent.com',
           'client_secret'=>'M1W8ZUA8R3EAVP2dXUixXAvw'
       ],
       'twitter'=> [
           'consumer_key'=>'wauDePqylP7wy21slrJjRlX6q',
           'consumer_secret'=>'Otn9J0Jt6li5m3DeI2NpvgMI8btZpBu3MgZEvgqdJZi9pSntpI'
       ],
       'fb'=>[
           'app_id'=>'1444615512318892',
           'app_secret'=>'d0cf505c6d1999d883899ba93585dbcd'
       ]
   ]
];
