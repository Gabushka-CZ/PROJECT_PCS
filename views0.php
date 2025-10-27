<?php


function zobrazHTML(string $nazevSouboru, array $data = []): void
{
    foreach($data as $key => $value)
    {
        $$key = $value;
    } 
    require "views/{$nazevSouboru}.php"; 
}    