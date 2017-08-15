<?php

namespace Drupal\simple_sharethis\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SimpleShareThisBlock' block.
 *
 * @Block(
 *  id = "simple_share_this_block",
 *  admin_label = @Translation("Simple ShareThis block"),
 * )
 */
class SimpleShareThisBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['simple_share_this_block'] = [
      '#theme' => 'theme_simple_share_this_block',
      '#attached' => [
        'library' => [
          'simple_sharethis/addthis',
        ],
      ],
    ];
    return $build;
  }

}
