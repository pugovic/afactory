<?php
namespace Drupal\afactory\main;

/**
 * The interface for House
 *
 */
interface ManInterface {

  /**
   *  Buys a car
   */
  public function buyCar();

  /**
   *  Buys a cat
   */
  public function buyPat();

  /**
   *  Buys a house
   */
  public function buyHouse();

  /**
   *  Protect from hard weather
   */
  public function askQuestion();
}