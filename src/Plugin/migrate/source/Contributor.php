<?php

namespace Drupal\bibcite_migrate\Plugin\migrate\source;


use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * Source plugin for the contributors.
 *
 * @MigrateSource(
 *   id = "bibcite_contributor"
 * )
 */
class Contributor extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('biblio_contributor_data', 'bcd')
      ->fields('bcd');

    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'name' => $this->t('Name'),
      'lastname' => $this->t('Last name'),
      'firstname' => $this->t('First name'),
      'prefix' => $this->t('Prefix'),
      'suffix' => $this->t('Suffix'),
      'initials' => $this->t('Initials'),
      'affiliation' => $this->t('Affiliation'),
    ];

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'cid' => [
        'type' => 'integer',
        'alias' => 'bcd',
      ],
    ];
  }

}
