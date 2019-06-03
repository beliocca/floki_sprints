<?php
include_once "db.php";

class dbJson extends Db

{

    public function guardarUsuario($usuario)
    {
        $json = file_get_contents("db.json");
        $array = json_decode($json, true);
        
        if ($json == "") {
            $lastId = 1;
            $usuario->setId($lastId);
            return $usuario;
        }

<<<<<<< HEAD
        $usuarioJS = [
          "id" => $lastId,
          "Nombre" => $usuario->getNombre(),
          "Apellido" => $usuario->getApellido(),
          "Email" => $usuario->getEmail(),
          "Pass" => $usuario->getPassword(),
          "News" => $usuario->getNews()
        ];


        $array["usuarios"][] = $usuarioJS;
=======
            $ultimoElemento = array_pop($array["usuarios"]);
            $lastId = $ultimoElemento["id"] + 1;    
            $usuario->setId($lastId);
            return $usuario;      
    }

    public function guardarUsuario(Usuario $usuario)
    {
        var_dump($usuario);
        $json = file_get_contents("db.json");
        $array = json_decode($json, true);
        $array["usuarios"][] = $usuario;
       var_dump($array);
>>>>>>> 6902f66c28ae1e386cfa512b0893ec8aed51da33
        $array = json_encode($array, JSON_PRETTY_PRINT);
        file_put_contents("db.json", $array);
    }

    function comprobarUsuario($email)
    {
        if (!file_exists("db.json")) {
            $usuarios = "";
        } else {
            $usuarios = file_get_contents("db.json");
        }

        if ($usuarios == "") {
            return null;
        }

        $array = json_decode($usuarios, true);
        foreach ($array["usuarios"] as $usuario) {
            if ($email == $usuario["email"]) {
                return $usuario;
            }
        }
        return null;
    }

    function listaDeUsuarios()
    {
        $json = file_get_contents("db.json");
        $array = json_decode($json, true);

        return $array;
    }

    function actualizarUsuario($user)
    {
        $usuarioActualizado = [
            "nombre" => trim($user["nombre"]),
            "apellido" => trim($user["apellido"]),
            "telefono"  => $user["telefono"],
            "fecha_nacimiento" => $user["cumple"],
        ];
        $json = file_get_contents("db.json");
        $array = json_decode($json, true);

        foreach ($array["usuarios"] as $usuario) {
            if ($_SESSION["id"] == $usuario["id"]) {
                $usuario["nombre"] = $usuarioActualizado["nombre"];
                $usuario["apellido"] = $usuarioActualizado["apellido"];
                $usuario["cumple"] = $usuarioActualizado["cumple"];
            };
            $array["usuarios"][$usuario["id"]] = $usuario;
        }
        $array = json_encode($array, JSON_PRETTY_PRINT);
        file_put_contents("db.json", $array);
    }
}
