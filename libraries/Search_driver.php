<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Search driver to interact with multiple search systems easily
 * User: Andrew Seymour
 * Date: 28/04/13
 * Time: 16:25
 */

class Search_driver extends CI_Driver_Library
{
  public $valid_drivers;

  function __construct()
  {
    // define what's possible
    $this->valid_drivers(
      'search_driver_database_driver',
      ''
    );
  }

  public function group_by()
  {

  }

  public function query()
  {

  }

}