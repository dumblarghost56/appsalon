<?php 
namespace Controllers;

class LoginController{
  public static function login(Router $router){
    // $router->render("auth/login");
  }
  public static function logout(){
      echo "Cerrando sesión";
  }
  public static function create(){
      echo "Creando usuario";
  }
  public static function olvide(){
      echo "Elegir la cuenta a recuperar";
  }
  public static function recovery(){
      echo "Escribir la nueva contraseña";
  }
}