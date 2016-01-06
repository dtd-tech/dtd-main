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

class PacUrlBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $virtwhat = virtwhat();
    if ($virtwhat) {
      $ext_ip = ext_ip();
      $pacbaseurl = 'http://' . $ext_ip . '/';
    }
    else {
      $pacbaseurl = 'http:' . $_SERVER['HTTP_HOST'] . '/';
    }
    $pacurl = $pac_baseurl . 'dtd.pac';
    return array(
      '#markup' => $this->t('PAC URL: ":pacurl"', ':pacurl' => $pacurl),
    );
  }
}
?>
