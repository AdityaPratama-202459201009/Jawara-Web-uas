<?php

require_once "Controller.php";

class TentangController extends Controller
{
    public function index()
    {
        $this->view("tentang/index");
    }
}