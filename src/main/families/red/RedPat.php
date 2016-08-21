<?php
namespace Drupal\afactory\main\families\red;

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
class RedPat implements PatInterface {

  /**
   * implements whoAreYou method PatInterface
   */
  function whoAreYou() {
    return "I am Red Dog";
  }

  /**
   * implements say method PatInterface
   */
  function say() {
    return "Red dog say gau!";
  }

  /**
   * implements showClawsOrTeeth method PatInterface
   */
  function showClawsOrTeeth() {
    return "Red dog show you very big teeth!";
  }
} 