<?php
class Menus extends CI_Controller
{
  // constructor
    function __construct()
    {
      parent::__construct();
    }
    // Renderizacuion de la vistaqu emuestra los desayunos
    public function desayunos(){
      $this->load->view('header');
      $this->load->view('menus/desayunos');
      $this->load->view('footer');
    }
    public function almuerzos(){
      $this->load->view('header');
      $this->load->view('menus/almuerzos');
      $this->load->view('footer');
    }
    public function meriendas(){
      $this->load->view('header');
      $this->load->view('menus/meriendas');
      $this->load->view('footer');
    }
    public function cartas(){
      $this->load->view('header');
      $this->load->view('menus/cartas');
      $this->load->view('footer');
    }
    public function somos(){
      $this->load->view('header');
      $this->load->view('menus/somos');
      $this->load->view('footer');
    }
 //no borrar

  }
 ?>
