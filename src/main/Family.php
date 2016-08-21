<?php
/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 16.08.2016
 * Time: 0:10
 */

namespace Drupal\afactory\main;

/**
 * Abstract Class Family - this is abstract factory
 */
abstract class Family {

  /**
   * Creates instance interface ManInterface
   */
  abstract public function  createMan();

  /**
   * Creates instance interface HouseInterface
   */
  abstract public function  createHouse();

  /**
   * Creates instance interface CarInterface
   */
  abstract public function  createCar();

  /**
   * Creates instance interface CatInterface
   */
  abstract public function  createPat();
}