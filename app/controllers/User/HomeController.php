<?php

class HomeController extends Controller
{
    public function index()
    {
        $data["title"] = "Kelas Belajar Design & Web Development BuildWithAngga";
        $this->view("layouts/user/header", $data);
        $this->view("components/user/navbar");
        $this->view("pages/user/home/index");
        $this->view("layouts/user/footer");
    }
}
