<?php 
namespace Drupal\custom\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class customController extends ControllerBase {
  /**
   * Test page.
   */
  public function custom_test() {
    return 'Test';
  }
}