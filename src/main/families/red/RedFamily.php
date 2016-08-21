<?php
namespace Drupal\afactory\main\families\red;

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
class RedFamily extends Family {

  /**
   * Creates instance interface ManInterface
   */
  public function  createMan() {
    return new RedMan();
  }

  /**
   * Creates instance interface HouseInterface
   */
  public function  createHouse() {
    return new RedHouse();
  }

  /**
   * Creates instance interface CarInterface
   */
  public function  createCar() {
    return new RedCar();
  }

  /**
   * Creates instance CatInterface
   */
  public function  createPat() {
    return new RedPat();
  }
}
