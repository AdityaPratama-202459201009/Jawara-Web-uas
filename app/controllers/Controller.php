<?php

class Controller
{

    public function view($view, $data = [])
    {
        extract($data);

        $file = __DIR__ . "/../views/" . $view . ".php";

        if (file_exists($file)) {

            require $file;

        } else {

            die("View tidak ditemukan: " . $file);

        }
    }

}