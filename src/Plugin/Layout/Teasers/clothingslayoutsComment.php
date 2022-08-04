<?php

namespace Drupal\clothingslayouts\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "clothingslayouts_comment",
 *   label = @Translation(" Clothing : comment "),
 *   category = @Translation("clothing"),
 *   path = "layouts/teasers",
 *   template = "clothingslayouts-comment",
 *   library = "clothingslayouts/clothingslayouts-comment",
 *   default_region = "description",
 *   regions = {
 *     "user_image" = {
 *       "label" = @Translation("user_image"),
 *     },
 *     "user_name" = {
 *       "label" = @Translation("user_name")
 *     },
 *     "user_status" = {
 *       "label" = @Translation("user_status")
 *     },
 *     "note_stars" = {
 *       "label" = @Translation("note_stars")
 *     },
 *     "msg" = {
 *       "label" = @Translation("msg")
 *     },
 *     "time" = {
 *       "label" = @Translation("time")
 *     },
 *   }
 * )
 */
class clothingslayoutsComment extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'clothingslayouts') . "/icones/teasers/clothingslayouts-comment.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }
  
}