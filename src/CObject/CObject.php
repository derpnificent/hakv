<?php
/**
 * Holding a instance of CHakv to enable use of $this in subclasses and provide some helpers.
 *
 * @package Hakv
 */
class CObject {

  /**
   * Members
   */
  protected $ha;
  protected $config;
  protected $request;
  protected $data;
  protected $db;
  protected $views;
  protected $session;
  protected $user;


  /**
   * Constructor, can be instantiated by sending in the $ha reference.
   */
  protected function __construct($ha=null) {
    if(!$ha) {
      $ha = CHakv::Instance();
    } 
    $this->de       = &$ha;
    $this->config   = &$ha->config;
    $this->request  = &$ha->request;
    $this->data     = &$ha->data;
    $this->db       = &$ha->db;
    $this->views    = &$ha->views;
    $this->session  = &$ha->session;
    $this->user     = &$ha->user;
  }


  /**
   * Wrapper for same method in CHakv. See there for documentation.
   */
  protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->de->RedirectTo($urlOrController, $method, $arguments);
  }


  /**
   * 
   * Wrapper for same method in CHakv. See there for documentation.
   */
  protected function RedirectToController($method=null, $arguments=null) {
    $this->de->RedirectToController($method, $arguments);
  }


  /**
   *
   * Wrapper for same method in CHakv. See there for documentation.
   */
  protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->de->RedirectToControllerMethod($controller, $method, $arguments);
  }


  /**
   * 
   * Wrapper for same method in CHakv. See there for documentation.
   */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->de->AddMessage($type, $message, $alternative);
  }


  /**
   * 
   * Wrapper for same method in CHakv. See there for documentation.
   */
  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->de->CreateUrl($urlOrController, $method, $arguments);
  }


}