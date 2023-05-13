<?php
class RegisterController extends Controller
{
    public function index()
    {
        $data["title"] = "Daftar Akun Untuk Belajar Design & Code di BuildWith Angga";
        $this->view("layouts/user/register", $data);
    }
}
