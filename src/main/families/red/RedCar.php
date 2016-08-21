<?php
namespace Drupal\afactory\main\families\red;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\CarInterface;

/**
 * class for green Cars
 */
class RedCar implements CarInterface {

  /**
   * implements run method interface
   */
  function run() {
    return "Red car started very slow!";
  }

  /**
   * implements stop method interface
   */
  function stop() {
    return "Green cars not want has been stoped";
  }

  /**
   * implements accelerate method interface
   */
  function accelerate() {
    return "Green car accelerate,accelerate !!! ";
  }

  /**
   * implements result method interface
   */
  function result() {
    return "Car flies!";
  }
} 