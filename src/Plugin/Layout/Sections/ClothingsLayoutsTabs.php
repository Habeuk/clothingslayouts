<?php

namespace Drupal\clothingslayouts\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "clothingslayouts_tabs",
 *   label = @Translation(" Clothing : tabs "),
 *   category = @Translation("clothing"),
 *   path = "layouts/sections",
 *   template = "clothingslayouts-tabs",
 *   library = "clothingslayouts/clothingslayouts-tabs",
 *   default_region = "description",
 *   regions = {
 *     "button_tab_1" = {
 *       "label" = @Translation(" button tab 1 "),
 *     },
 *     "button_tab_2" = {
 *       "label" = @Translation(" button tab 2 "),
 *     },
 *     "button_tab_3" = {
 *       "label" = @Translation(" button tab 3 "),
 *     },
 *     "content_tab_1" = {
 *       "label" = @Translation(" content tab 1 "),
 *     },
 *     "content_tab_2" = {
 *       "label" = @Translation(" content tab 2 "),
 *     },
 *     "content_tab_3" = {
 *       "label" = @Translation(" content tab 3 "),
 *     },
 *   }
 * )
 */
class ClothingsLayoutsTabs extends FormatageModelsSection {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'clothingslayouts') . "/icones/sections/clothingslayouts-tabs.png");
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

  function defaultConfiguration() {
    return [
      'load_libray' => true,
      "derivate" => [
        'value' => 'right',
        'options' => [
          'right' => 'right',
          'left' => 'left'
        ]
      ],
      'infos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Texte information',
          'loader' => 'static'
        ],
        'fields' => [
          'button_tab_1' => [
            'text' => [
              'label' => 'Titre',
              'value' => ' tab 1 '
            ]
          ],
          'button_tab_2' => [
            'text_html' => [
              'value' => ' tab 2 ',
              'label' => ' Title 2'
            ]
          ],
          'button_tab_3' => [
            'text_html' => [
              'value' => ' tab 3 ',
              'label' => ' Title 3 '
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
}
