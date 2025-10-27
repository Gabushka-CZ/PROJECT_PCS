<<?php

function showAbout($request)
{
    $user = "Tom";
    zobrazHTML("about", [
        "user" => $user
    ]);
}