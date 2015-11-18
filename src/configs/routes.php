<?php

$API = 'App\\Controllers\\Api\\';

return [
    'get api/books'  => $API.'Book->get',
    'post api/books'  => $API.'Book->create',
];