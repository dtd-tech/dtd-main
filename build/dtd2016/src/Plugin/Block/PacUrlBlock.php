<?php
/**
 * Provides block displaying the PAC URL.
 *
 * @Block(
 *   id = "pac_url_block",
 *   admin_label = @Translation("Pac Url block"),
 * )
 */

namespace Drupal\dtd2016\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HelloBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }
}
?>
