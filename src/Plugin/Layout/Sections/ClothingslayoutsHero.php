<?php

namespace Drupal\clothingslayouts\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "clothingslayoutshero",
 *   label = @Translation(" Clothing : Hero "),
 *   category = @Translation("clothing"),
 *   path = "layouts/sections",
 *   template = "clothingslayoutshero",
 *   library = "clothingslayouts/clothingslayoutshero",
 *   default_region = "description",
 *   regions = {
 *     "button" = {
 *       "label" = @Translation("button "),
 *     },
 *     "title" = {
 *       "label" = @Translation("title")
 *     },
 *     "sub_titre" = {
 *       "label" = @Translation("sub_titre")
 *     },
 *     "image_bg" = {
 *       "label" = @Translation("Image bg")
 *     },
 *   }
 * )
 */
class ClothingslayoutsHero extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'clothingslayouts') . "/icones/sections/clothingslayoutshero.png");
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
      'region_tag_title' => 'h1',
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
          'sub_titre' => [
            'text' => [
              'label' => 'Titre',
              'value' => ' Best Collection '
            ]
          ],
          'title' => [
            'text_html' => [
              'value' => ' exclusive Fashion 2019 ',
              'label' => ' Title '
            ]
          ],
          'button' => [
            'url' => [
              'label' => "button",
              "value" => [
                "link" => "#",
                "text" => "SHOP NOW",
                "class" => "btn btn-outline-primary"
              ]
            ]
          ],
          'image_bg' => [
            'img_bg' => [
              'label' => 'image',
              'fids' => []
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}