<?php

$language = "php";
$heredoc = <<< EOT
I am going to be great at "$language"
EOT;


//there must be no space after both EOT words
//Its not so common to use this but you just might
echo $heredoc;

