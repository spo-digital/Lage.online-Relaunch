<?php

return array(
  'label' => array(
      'Verein',
  ),
  'types' => array('content'),
  'contentCategory' => 'RSCE: Main',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'headline', 'cssID' ),
  'wrapper' => array(
      'type' => 'none',
  ),
  'fields' => array(
    ### group ###
    'icon_group' => array(
      'label' => array('BILD ', 'Hier können Sie ein Bild hinzufügen'),
      'inputType' => 'group',
    ),

    ### image ###
    'icon' => array(
        'label' => array(
          'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
        ),
        'inputType' => 'fileTree',
        'eval' => array(
          'fieldType' => 'radio',
          'filesOnly' => true,
          'extensions' => 'jpg,jpeg,png,gif,svg,webp',
          'tl_class'=>'clr',
          'mandatory' => true,
        ),
    ),

    ### image alt ###
    'icon_alt' => array(
      'label' => array(
          'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
    ),

    ### image title ###
    'icon_title' => array(
        'label' => array(
          'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
        ),
        'inputType' => 'text',
        'eval' => array('tl_class' => 'w50 clr'),
    ),
  ),
);
