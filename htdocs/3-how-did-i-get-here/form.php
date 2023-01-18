<?php

// http://127.0.0.1:8080/3-how-did-i-get-here/form.php

// Am I just landing here via a standard GET?...or did
// someone get me here via a POST (by submitting the form...usually).

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo "GET got me here";
} else if ($_SERVER['REQUEST_METHOD'] === "POST") {
    echo "POST got me here";
} else {
    // don't worry about this...they won't come into play for us
}

require 'form.view.php';
