<?php

class Alumnos extends CI_Controller{

//  HOLA K HACE 

  function __construct() {
      parent::__construct();
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->model("Alumno");
  }

//muestra todos los elementos
  public function index(){

      $this->load->model("Alumno");
      $data["datos"] = $this->Alumno->get_alumno();

      $this->load->view("Alumno/index",$data);


  }

  public function insert() {
      $this->load->view("Alumno/insert");
  }

  public function insert2() {
    $this->Alumno->insertar();
    redirect(base_url()."alumnos");
  }

//muestra un elemento en espe
  public function view( $id = null ) {
    if ($id != null) {

      $this->load->model("Alumno");
      $data["dato"] = $this->Alumno->getalumno($id);
      $this->load->view("Alumno/view",$data);
    }
  }

  public function edit( $id = null ) {
    if ($id != null) {

      $this->load->model("Alumno");
      $data["dato"] = $this->Alumno->getalumno($id);
      $this->load->view("Alumno/edit",$data);
    }
  }

//metodo para actualizar
  public function update( $id = null ){
    
    $this->Alumno->actualizar($id);
    redirect(base_url()."alumnos");
    
  }

  //metodo para Eliminar
  public function delete( $id = null ){

    if($id != null){
      $this->Alumno->eliminar($id);
      redirect(base_url()."alumnos");
    }

  }


}



 ?>
