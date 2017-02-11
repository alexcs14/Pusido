<?php
  class MainController{


    public function index(){
      require_once "include/header.php";
      require_once "views/index.php";
      require_once "include/footer.php";
    }

    public function soyunapantalla(){
      require_once "include/header.php";
      require_once "views/soyunapantalla.php";
      require_once "include/footer.php";
    }
  }
?>
