<?php

namespace Drupal\gallerysite\Theme;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * Sets the active theme on editing pages.
 */
class GalleryThemeNegotiator implements ThemeNegotiatorInterface {

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    // Use this theme on a certain route.
    $edit_routes = array(
      'node.add',
      'entity.node.edit_form',
    );
    return in_array($route_match->getRouteName(), $edit_routes);
  }

  /**
   * {@inheritdoc}
   */
  public function determineActiveTheme(RouteMatchInterface $route_match) {
    // Here you return the actual theme name.
    return 'galledit';
  }

}
