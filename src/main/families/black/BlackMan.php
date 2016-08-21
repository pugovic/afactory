<?php
namespace Drupal\afactory\main\families\black;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\ManInterface;

class BlackMan implements ManInterface {

  /**
   * implements buyCar method ManInterface
   */
  function buyCar() {
    return "Black man bought a car";
  }

  /**
   * implements buyCar method ManInterface
   */
  function buyPat() {
    return "Black man bought a octopus";
  }

  /**
   * implements buyHouse method ManInterface
   */
  function buyHouse() {
    return "Black man bought a house";
  }

  /**
   * implements askQuestion method ManInterface
   */
  function askQuestion() {
    return "What you need?";
  }
} 