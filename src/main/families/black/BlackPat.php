<?php
namespace Drupal\afactory\main\families\black;

/**
 * Created by PhpStorm.
 * User: Sergey2
 * Date: 15.08.2016
 * Time: 12:45
 */
use Drupal\afactory\main\PatInterface;

/**
 * class for green Pars
 */
class BlackPat implements PatInterface {

  /**
   * implements whoAreYou method PatInterface
   */
  function whoAreYou() {
    return "I am black octopus";
  }

  /**
   * implements say method PatInterface
   */
  function say() {
    return "Black octopus say frrrrrrrr!";
  }

  /**
   * implements showClawsOrTeeth method PatInterface
   */
  function showClawsOrTeeth() {
    return "Black octopus show you very big tentacles!";
  }
} 