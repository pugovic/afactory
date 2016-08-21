<?php
namespace Drupal\afactory\main;

/**
 * The interface for House
 */
interface HouseInterface {

  /**
   *  Says about the level of protection
   */
  public function protect();

  /**
   *  Says about size  house
   */
  public function size();

}