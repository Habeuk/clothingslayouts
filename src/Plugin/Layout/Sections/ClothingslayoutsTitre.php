<?php

namespace Drupal\clothingslayouts\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\user\Entity\Role;
use Drupal\Core\Form\FormStateInterface;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "clothingslayoutstitre",
 *   label = @Translation(" Clothing : titre "),
 *   category = @Translation("clothing"),
 *   path = "layouts/sections",
 *   template = "clothingslayoutstitre",
 *   library = "clothingslayouts/clothingslayoutstitre",
 *   default_region = "description",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title")
 *     },
 *   }
 * )
 */
class ClothingslayoutsTitre extends FormatageModelsSection {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'clothingslayouts') . "/icones/sections/clothingslayoutstitre.png");
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
      'region_tag_title' => 'h3',
      'layoutrestrictions' => [
        'roles' => []
      ],
      'infos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Texte information',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text_html' => [
              'value' => ' Exclusive Fashion 2022 ',
              'label' => ' Title '
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }

  /**
   *
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $roles = [];
    foreach (Role::loadMultiple() as $role) {
      $roles[$role->id()] = $role->label();
    }
    $form['layoutrestrictions'] = [

      '#type' => 'details',
      '#title' => 'layout restrictions ...',
      '#open' => false,
      '#tree' => true
    ];
    $form['layoutrestrictions']['roles'] = [
      '#type' => 'checkboxes',
      '#title' => 'selectionner les roles',
      '#options' => $roles,
      '#default_value' => $this->configuration['layoutrestrictions']['roles']
    ];
    return $form;
  }

  /**
   *
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['layoutrestrictions'] = $form_state->getValue('layoutrestrictions');
  }
}
