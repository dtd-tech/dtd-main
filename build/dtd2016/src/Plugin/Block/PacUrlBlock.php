<?php
/**
 * Provides block displaying the PAC URL.
 *
 * @Block(
 *   id = "pac_url_block",
 *   admin_label = @Translation("Pac Url Block"),
 * )
 */

namespace Drupal\dtd2016\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Cache\Cache;

class PacUrlBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    // Return the form @ Form/PacUrlForm.php
    return \Drupal::formBuilder()->getForm('Drupal\dtd2016\Form\PacUrlForm');
  }

  /**
   * {@inheritdoc}
   *
   * @todo Make cacheable in https://www.drupal.org/node/2483181
   */
  public function getCacheMaxAge() {
    return 0;
  }
}
