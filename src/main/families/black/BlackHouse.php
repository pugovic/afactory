<?php
namespace Drupal\afactory\main\families\black;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\HouseInterface;

/**
 * class GreenHouse
 */
class BlackHouse implements HouseInterface {
  /**
   * implements protect method HouseInterface
   */
  public function protect() {
    return "Black house can protect against nuclear attack.";
  }

  /**
   * implements protect method HouseInterface
   */
  public function size() {
    return "The size of the house is not known.";
  }
} 