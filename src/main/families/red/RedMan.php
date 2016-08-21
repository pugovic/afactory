<?php
namespace Drupal\afactory\main\families\red;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\ManInterface;

class RedMan implements ManInterface {

  /**
   * implements buyCar method ManInterface
   */
  function buyCar() {
    return "Red man bought a car";
  }

  /**
   * implements buyCar method ManInterface
   */
  function buyPat() {
    return "Red man bought a dog";
  }

  /**
   * implements buyHouse method ManInterface
   */
  function buyHouse() {
    return "Red man bought a house";
  }

  /**
   * implements askQuestion method ManInterface
   */
  function askQuestion() {
    return "Come to me?";
  }
} 