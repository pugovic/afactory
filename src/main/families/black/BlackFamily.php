<?php
namespace Drupal\afactory\main\families\black;

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
class BlackFamily extends Family {

  /**
   * Creates instance interface ManInterface
   */
  public function  createMan() {
    return new BlackMan();
  }

  /**
   * Creates instance interface HouseInterface
   */
  public function  createHouse() {
    return new BlackHouse();
  }

  /**
   * Creates instance interface CarInterface
   */
  public function  createCar() {
    return new BlackCar();
  }

  /**
   * Creates instance CatInterface
   */
  public function  createPat() {
    return new BlackPat();
  }
}
