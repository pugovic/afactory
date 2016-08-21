<?php
namespace Drupal\afactory\main\families\green;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\ManInterface;

class GreenMan implements ManInterface {

  /**
   * implements buyCar method ManInterface
   */
  function buyCar() {
    return "Green man bought a car";
  }

  /**
   * implements buyCar method ManInterface
   */
  function buyPat() {
    return "Green man bought a cat";
  }

  /**
   * implements buyHouse method ManInterface
   */
  function buyHouse() {
    return "Green man bought a house";
  }

  /**
   * implements askQuestion method ManInterface
   */
  function askQuestion() {
    return "How are you?";
  }
} 