<?php
namespace Drupal\afactory\main\families\green;

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
class GreenPat implements PatInterface {

  /**
   * implements whoAreYou method PatInterface
   */
  function whoAreYou() {
    return "I am Green Cat";
  }

  /**
   * implements say method PatInterface
   */
  function say() {
    return "Green cat say 'mou' because he is sick";
  }

  /**
   * implements showClawsOrTeeth method PatInterface
   */
  function showClawsOrTeeth() {
    return "Green cat show you very big claws";
  }
} 