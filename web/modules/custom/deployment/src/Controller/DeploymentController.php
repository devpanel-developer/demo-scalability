<?php

namespace Drupal\deployment\Controller;

use Drupal\Core\Controller\ControllerBase;

class DeploymentController extends ControllerBase {
  public function index() {
    return [
      '#markup' => '<h1 style="color: blue;">Green Deployment</h1>',
    ];
  }
}
