<?php
namespace Drupal\afactory\main\families\black;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\CarInterface;

/**
 * class for black Cars
 */
class BlackCar implements CarInterface {

  /**
   * implements run method interface
   */
  function run() {
    return "Black car incredibly fast start!";
  }

  /**
   * implements stop method interface
   */
  function stop() {
    return "The black car is incredibly quick stops";
  }

  /**
   * implements accelerate method interface
   */
  function accelerate() {
    return "Turbo mode is activated!";
  }

  /**
   * implements result method interface
   */
  function result() {
    return "Black car is the best!";
  }
} 