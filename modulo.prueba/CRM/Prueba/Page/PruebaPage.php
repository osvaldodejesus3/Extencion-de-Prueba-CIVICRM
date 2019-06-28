<?php
use CRM_Prueba_ExtensionUtil as E;

class CRM_Prueba_Page_PruebaPage extends CRM_Core_Page {

  public function run() {

 CRM_Utils_System::setTitle(E::ts('PruebaPage'));

 CRM_Core_Resources::singleton()->addScriptFile('modulo.prueba', 'js/pruebapage.js');

 $result = civicrm_api3('Prueba', 'get', [
  'sequential' => 1,
  ]);

 $this->assign('result',$result);

    parent::run();

  // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));


  }

}
