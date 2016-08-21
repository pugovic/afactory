<?php

namespace Drupal\afactory\Controller;

use Drupal\afactory\main\families\green\GreenFamily;
use Drupal\afactory\main\families\red\RedFamily;
use Drupal\afactory\main\families\black\BlackFamily;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render;


class AFactoryController extends ControllerBase {

  /**
   * Called by router
   */
  public function greenFamily() {
    //creates instance concrete class
    $family = new GreenFamily();
    return $this->getConcreteFamily($family, 'green');
  }

  /**
   * Called by router
   */
  public function blackFamily() {
    //creates instance concrete class
    $family = new BlackFamily();
    return $this->getConcreteFamily($family, 'black');
  }

  /**
   * Called by router
   */
  public function redFamily(Request $request) {
    //creates instance concrete class
    $family = new RedFamily();
    return $this->getConcreteFamily($family, 'red');
  }

  /**
   * Called by router
   */
  function getConcreteFamily($family, $color) {
    // If this function called, then preprocess mast know about it
    drupal_static('afactory_static', TRUE);
    $uc_color = ucfirst($color);
    //creates instances group
    $man = $family->createMan();
    $car = $family->createCar();
    $house = $family->createHouse();
    $pat = $family->createPat();

    // Shows methods current instances
    $carts = [
      [
        '#theme' => 'cart',
        '#title' => "$uc_color Man",
        '#items' => [$man->buyHouse(), $man->buyCar(), $man->buyPat()],
        '#fa' => 'fa-child',
        '#color' => $color
      ],
      [
        '#theme' => 'cart',
        '#title' => "$uc_color Car",
        '#items' => [
          $car->run(),
          $car->stop(),
          $car->accelerate(),
          $car->result()
        ],
        '#fa' => 'fa-car',
        '#color' => $color
      ],
      [
        '#theme' => 'cart',
        '#title' => "$uc_color House",
        '#items' => [$house->size(), $house->protect(),],
        '#fa' => 'fa-home',
        '#color' => $color
      ],
      [
        '#theme' => 'cart',
        '#title' => "$uc_color Pat",
        '#items' => [$pat->whoAreYou(), $pat->say(), $pat->showClawsOrTeeth()],
        '#fa' => 'fa-paw',
        '#color' => $color
      ],
    ];

    // Shows this for green tabs
    return [
      '#title' => t("My $color Concrete Family"),
      '#theme' => "family",
      '#carts' => $carts,
      '#attached' => ['library' => ['afactory/cart']],
    ];
  }
}
