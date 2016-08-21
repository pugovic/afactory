<?php
namespace Drupal\afactory\main\families\green;

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
class GreenHouse implements HouseInterface {
  /**
   * implements protect method HouseInterface
   */
  public function protect() {
    return "Green House kept you from the rain.";
  }

  /**
   * implements protect method HouseInterface
   */
  public function size() {
    return "Green House very big.";
  }
} 