<?php
namespace Drupal\afactory\main\families\red;

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
class RedHouse implements HouseInterface {
  /**
   * implements protect method HouseInterface
   */
  public function protect() {
    return "Red House kept you from the robber.";
  }

  /**
   * implements protect method HouseInterface
   */
  public function size() {
    return "Red House is small.";
  }
} 