<?php

class App
{
    // controller, method, dan parameter default
    protected $user = "User";
    protected $controller = "Home";
    protected $method = "index";
    protected $parameters = [];
    public function __construct()
    {
        $url = $this->parseUrl();
        // cek jika ada url
        if (!empty($url)) {
            // cek user yang masuk memiliki role lain
            if (count($url) > 2) {
                // kapitalkan user
                $this->user = ucfirst($url[0]);
                unset($url[0]);
                // mengembalikan value index pada array yang diunset
                /*
                unset()
                1 => "home",
                array_values()
                0 => "home"
                */
                $url = array_values($url);
            }
            // cek controller
            if (file_exists("../app/controllers/" . $this->user . "/" . ucfirst($url[0]) . "Controller.php")) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }


        // import controller
        require_once "../app/controllers/" . $this->user . "/" . $this->controller . "Controller.php";

        // jalankan controller
        $controller = $this->controller . "Controller";
        $controller = new $controller;

        // cek method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // cek jika ada parameter
        if (!empty($url)) {
            $this->parameters = array_values($url);
        }

        // jalankan method dan controllernya
        call_user_func_array([$controller, $this->method], $this->parameters);
    }

    // parse URL
    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            // membersihkan slash
            $url = rtrim($_GET["url"], "/");
            // membersihkan karakter asing
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
