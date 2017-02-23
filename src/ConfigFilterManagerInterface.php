<?php

namespace Drupal\config_filter;

/**
 * Interface ConfigFilterManagerInterface.
 *
 * @package Drupal\config_filter
 */
interface ConfigFilterManagerInterface {

  /**
   * Returns a ConfigStorage object working with the sync config directory.
   *
   * @return \Drupal\config_filter\Config\FilteredStorageInterface
   *   The filtered sync storage.
   */
  public function getFilteredSyncStorage();

}
