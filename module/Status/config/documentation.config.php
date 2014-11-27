<?php
return array(
    'Status\\V1\\Rpc\\Ping\\Controller' => array(
        'GET' => array(
            'description' => 'Estou utilizando o metodo get neste servoço RPC',
            'request' => null,
            'response' => '{
   "ack": "Reconhecer o pedido com um timestamp"
}',
        ),
        'description' => 'Meu primeiro serviço RPC',
    ),
);
