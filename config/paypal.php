<?php 
return [ 
    'client_id' => 'AWrKIo9cFS2WgL9klZseV1Eh5vyqWS9pQ4iOCeCvmm_pMwJbj9kCqtvIAEkKg7N0n_hPCw1Av5pUTWnt',
	'secret' => 'EBXMhvSW4pFsYnhFMz06L32X7eKbd2el8i-ZRlEVWm_J0PCqpO_-o19BXO9-k_aqN58-LrdSVBAoew4_',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];