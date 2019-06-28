<?php

use CRM_Prueba_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Prueba_Form_PruebaModificada extends CRM_Core_Form {
  public function buildQuickForm() {

 CRM_Utils_System::setTitle(E::ts('!Modificar Prueba!'));
 CRM_Core_Resources::singleton()->addStyleFile('modulo.prueba', 'css/pruebamodificada.css');

 $pruebaIdm = CRM_Utils_Request::retrieve('prueba_id', 'Int'); // obtenemos el id desde la url

    $pruebaview = civicrm_api3('Prueba', 'get', [
      'sequential' => 1,
      'id' => $pruebaIdm,
    ])["values"][0]; // Buscamos el objeto por id.

    $this->assign('pruebaview', $pruebaview);

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
    'text','partido',E::ts('Partido a que Pertenece'),
    array('required'=>'required')
    );

 $this->addButtons(array(
      array(
        'type' => 'submit',
        'name' => E::ts('Modificar Prueba'),
        'isDefault' => TRUE,
      ),
    ));

    parent::buildQuickForm();

  }

  public function postProcess() {
   $valuesm = $this->exportValues();
   civicrm_api3('Prueba', 'replace', $valuesm);
   CRM_Core_Session::setStatus(E::ts('Prueba Modificada Correctamente.'));
   parent::postProcess();
  }


  public function getColorOptions() {
    $options = array(
      '' => E::ts('- select -'),
      '#f00' => E::ts('FNP'),
      '#0f0' => E::ts('PRM'),
      '#00f' => E::ts('PRD'),
      '#f0f' => E::ts('PLD'),
    );
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
