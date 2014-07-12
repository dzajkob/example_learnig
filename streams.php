<?php
$result = file_get_contents(
        'http://api.bitly.com/v3/shorten'.
        '?login=user&apiKey=sekret'.
        '&longUrl=http%3A%2F%fsitepoint.com'
    );
    print_r(json_decode($result));
