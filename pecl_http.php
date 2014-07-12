<?php
// that reason need install specific library like pecl_http
$request = new HttpRequest(
        'http://api.bitly.com/v3/shorten'.
        '?login=user&apiKey=sekret'.
        '&longUrl=http%3A%2F%fsitepoint.com'
        );
$request->send();
$result = $request->getResponseBody();
print_r(json_decode($result));