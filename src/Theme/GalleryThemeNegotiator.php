<?php

namespace Drupal\gallerysite\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

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
      'node.edit',
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
