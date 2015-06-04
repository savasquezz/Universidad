<?php

   class CarreraController extends MasterController {

     private static $modelo = 'CarreraModel';
     private static $nomArray="carreras_up";
     private static $link='index.php?controller=Carrera&action=registrar';
     private static $view='Carrera';
     private static $tableArray='carreras';

    public function getRegistrar() {
      
     
        // Session::addVar('action','delete');
        // $action=Session::validateVar('action');
        // // var_dump($action);
        // // exit;
        // if(isset($action))
        // {
        //     if($_SESSION['action']=="insertar")
        //     {
        //          View::load('Include/alerta registro');
        //     }
        //     else if($_SESSION['action']=="delete")
        //     {

        //          View::load('Include/alerta eliminar');
        //     }
        //     else if($_SESSION['action']=="actualizar")
        //     {
        //         require './vistas/Include/alerta actualizar.php';
        //     }
        //     Session::deleteVar('action');
        // }
        $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);
         Session::validatePage(static::$view, $data);
    }

    public function postCreateOrUpdate($request) {
        $action=$request['crud'];
        $data=['id_carrera'=>$request['id'],
        'nombre' => $request['nombre'],
        'creditos' => $request['creditos'],
        'valor_semestre' =>$request['valor_semestre'],
        'numero_semestre' => $request['numero_semestre']];
        CarreraModel::$action($data);
        $_SESSION['action']=$action;
        Redirect::to(static::$link);
    }
    public function getEliminar() {
         if(isset($_GET['id']))
          {
              $id = $_GET['id'];
              CarreraModel::eliminar($id);
              Session::addVar('action','delete');
          }
          Redirect::to(static::$link);
    }
     public function getActualizar() {
          if(isset($_GET['id']))
           {
              $id = $_GET['id'];
              $data[static::$nomArray] = CarreraModel::find($id);
              $carreras_up=$data[static::$nomArray]->fetch_assoc();
              $data[static::$tableArray]=Lib::Zebra_Pagination(static::$modelo);;
              $data[static::$nomArray]=$carreras_up;
              Session::validatePage(static::$view, $data);
          }
          else
          {
            Redirect::to(static::$link);
          }
    }
}
// ?>     