<?php

namespace Drupal\clothingslayouts\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "clothingslayouts_testimonial",
 *   label = @Translation(" Clothing : testimonial "),
 *   category = @Translation("clothing"),
 *   path = "layouts/teasers",
 *   template = "clothingslayouts-testimonial",
 *   library = "clothingslayouts/clothingslayouts-testimonial",
 *   default_region = "description",
 *   regions = {
 *     "comment" = {
 *       "label" = @Translation("comment"),
 *     },
 *     "name" = {
 *       "label" = @Translation("name user")
 *     },
 *     "sub_titre" = {
 *       "label" = @Translation("sub_titre")
 *     },
 *     "image" = {
 *       "label" = @Translation("Image")
 *     },
 *   }
 * )
 */
class ClothingslayoutsTestimonial extends FormatageModelsTeasers {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'clothingslayouts') . "/icones/teasers/clothingslayouts-testimonial.png");
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
