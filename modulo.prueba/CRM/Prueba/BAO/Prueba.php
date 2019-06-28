<?php
use CRM_Prueba_ExtensionUtil as E;

class CRM_Prueba_BAO_Prueba extends CRM_Prueba_DAO_Prueba {

  /**
   * Create a new Prueba based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Prueba_DAO_Prueba|NULL
   *
  public static function create($params) {
    $className = 'CRM_Prueba_DAO_Prueba';
    $entityName = 'Prueba';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
