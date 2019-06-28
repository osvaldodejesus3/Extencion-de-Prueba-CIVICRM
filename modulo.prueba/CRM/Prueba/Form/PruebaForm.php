<?php

use CRM_Prueba_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Prueba_Form_PruebaForm extends CRM_Core_Form {
  public function buildQuickForm() {

 CRM_Utils_System::setTitle(E::ts('!Agregar Nueva Prueba!'));
 CRM_Core_Resources::singleton()->addStyleFile('modulo.prueba', 'css/pruebaform.css');

    $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => E::ts('Agregar Prueba'),
        'isDefault' => TRUE,
      ),
    ));

    $this->add(
    'text','nombre',E::ts('Nombre'),
    array('required'=>'required')
    );

    $this->add(
    'text','apellido',E::ts('Apellido'),
    array('required'=>'required')
    );

    $this->add(
    'text','cedula',E::ts('Cedula'),
    array('required'=>'required')
    );

    $this->add(
    'text','partido',E::ts('Partido A que pertenece'),
    array('required'=>'required')
   );

    parent::buildQuickForm();
  }

  public function postProcess() {
    $values = $this->exportValues();
    civicrm_api3('Prueba', 'create',$values);
    CRM_Core_Session::setStatus(E::ts('Prueba Agregada Correctamente.'));
    parent::postProcess();
  }

  public function getColorOptions() {
    $options = array(
      '' => E::ts('- select -'),
      '#f00' => E::ts('Red'),
      '#0f0' => E::ts('Green'),
      '#00f' => E::ts('Blue'),
      '#f0f' => E::ts('Purple'),
    );
    foreach (array('1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e') as $f) {
      $options["#{$f}{$f}{$f}"] = E::ts('Grey (%1)', array(1 => $f));
    }
    return $options;
  }

  /**
   * Get the fields/elements defined in this form.
   *
   * @return array (string)
   */
  public function getRenderableElementNames() {
    // The _elements list includes some items which should not be
    // auto-rendered in the loop -- such as "qfKey" and "buttons".  These
    // items don't have labels.  We'll identify renderable by filtering on
    // the 'label'.
    $elementNames = array();
    foreach ($this->_elements as $element) {
      /** @var HTML_QuickForm_Element $element */
      $label = $element->getLabel();
      if (!empty($label)) {
        $elementNames[] = $element->getName();
      }
    }
    return $elementNames;
  }

}
