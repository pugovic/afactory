<?php
namespace Drupal\afactory\main\families\green;

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
class GreenCar implements CarInterface {

  /**
   * implements run method interface
   */
  function run() {
    return "Green car started quickly";
  }

  /**
   * implements stop method interface
   */
  function stop() {
    return "Green cars stopped";
  }

  /**
   * implements accelerate method interface
   */
  function accelerate() {
    return "Green car accelerate wooooo..!!! ";
  }

  /**
   * implements result method interface
   */
  function result() {
    return "Sorry, but car crashed";
  }
} 