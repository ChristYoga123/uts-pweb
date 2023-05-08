<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view("layouts/user/header");
        $this->view("pages/user/home/index");
        $this->view("layouts/user/footer");
    }
}
