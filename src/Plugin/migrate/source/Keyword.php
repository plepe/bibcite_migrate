<?php


namespace Drupal\bibcite_migrate\Plugin\migrate\source;


use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * Source plugin for the contributors.
 *
 * @MigrateSource(
 *   id = "keyword"
 * )
 */
class Keyword extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    return $this->select('biblio_keyword_data', 'bkd')
      ->fields('bkd');
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return [
      'kid' => $this->t('Keyword ID'),
      'word' => $this->t('Word'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'kid' => [
        'type' => 'integer',
        'alias' => 'bkd',
      ],
    ];
  }

}
