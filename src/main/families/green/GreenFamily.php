<?php
namespace Drupal\afactory\main\families\green;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\Family;

/**
 * class for green Family
 */
class GreenFamily extends Family {

  /**
   * Creates instance interface ManInterface
   */
  public function  createMan() {
    return new GreenMan();
  }

  /**
   * Creates instance interface HouseInterface
   */
  public function  createHouse() {
    return new GreenHouse();
  }

  /**
   * Creates instance interface CarInterface
   */
  public function  createCar() {
    return new GreenCar();
  }

  /**
   * Creates instance CatInterface
   */
  public function  createPat() {
    return new GreenPat();
  }
}
