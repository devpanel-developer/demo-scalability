<?php

namespace Drupal\deployment\Controller;

use Drupal\Core\Controller\ControllerBase;

class DeploymentController extends ControllerBase {
  public function index() {
    return [
      '#markup' => '<div class="deployment-blue-style"><h1>Green V2 Deployment</h1></div>',
      '#attached' => [
        'library' => [
          'deployment/styles',
        ],
      ],
    ];
  }
}
