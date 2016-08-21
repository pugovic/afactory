<?php


namespace Drupal\afactory\main;

/**
 * The interface for Cars
 */
interface CarInterface {

  /**
   * Started Auto
   */
  public function run();

  /**
   * Stoped Auto
   */
  public function stop();

  /**
   * Accelerate Auto
   */
  public function accelerate();

  /**
   * Accelerate Auto
   */
  public function result();
}