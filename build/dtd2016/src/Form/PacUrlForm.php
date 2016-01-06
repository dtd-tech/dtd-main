<?php

/**
 * @file
 * Contains \Drupal\dtd2016\Form\BlockFormController
 */

namespace Drupal\dtd2016\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Pac URL  block form
 */
class PacUrlForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'pac_url_form';
  }

  /**
  * {@inheritdoc}
  * A single readonly test field, containing the Pac URL.
  */
  public function buildForm(array $form, FormStateInterface $form_state) {
    # First check If we're in a virtual machine
    $virtwhat = virtwhat();
    # If so, lets make sure we give the external IP.
    if ($virtwhat) {
      $ext_ip = ext_ip();
      $pacbaseurl = 'http://' . $ext_ip;
    }
    elseif (preg_match("/dtd/", $_SERVER['HTTP_HOST'])) {
    # Check if the hostname doesn't end in .dtd
      $pacbaseurl = "http://" . $_SERVER['SERVER_ADDR'];
    }
    else {
    # Else just use the host currently used.
      $pacbaseurl = "http://" . $_SERVER['HTTP_HOST'];
      if ($_SERVER['SERVER_PORT'] != 80) {
        # Add the port just in case we're not on 80.
        $pacbaseurl = $pacbaseurl . ":" . $_SERVER['SERVER_PORT'];
      }
    }
    $pacurl = $pacbaseurl . '/dtd.pac.php';
    $form['pac_url'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('PAC URL'),
      '#description' => $this->t('Proxy Auto-config URL'),
      '#default_value' => $pacurl,
      '#attributes' => array('readonly' => 'readonly'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }


}
