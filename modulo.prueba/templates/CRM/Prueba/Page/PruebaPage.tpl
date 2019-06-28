
<div style="padding: 10px; color: #ffffff;">
  <a
    style="color: #ffffff;"
    href="{crmURL p='civicrm/pruebaform'}"
    class="crm-hover-button crm-button crm-popup action-item">
      <i class="crm-i fa-plus-circle"></i> Nueva Prueba
  </a>
</div>
<table class="crm-group-selector dataTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cedula</th>
      <th>Partido A que Pertenece</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$result.values item=prueba}
      <tr class="crm-entity" id="prueba-{$prueba.id}" data-entity="prueba" data-id="{$prueba.id}" >
        <td>{$prueba.id}</td>
        <td class="crm-editable crmf-nombre" data-field="nombre" data-action="update">{$prueba.nombre}</td>
        <td class="crm-editable crmf-apellido" data-field="apellido" data-action="update">{$prueba.apellido}</td>
        <td class="crm-editable crmf-cedula" data-field="cedula" data-action="update">{$prueba.cedula}</td>
        <td class="crm-editable crmf-partido" data-field="partido" data-action="update">{$prueba.partido}</td>
        <td>
          <a 
            href="{crmURL p='civicrm/pruebamodificada' q="prueba_id=`$prueba.id`"}"
            class="crm-hover-button crm-popup action-item">
            Modificar Prueba
          </a>
        </td>
        <td>
          <a
            href="{crmURL p='civicrm/pruebaborrar' q="prueba_id=`$prueba.id`"}"
            class="crm-hover-button crm-popup action-item">
              Eliminar
          </a>
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>


<p>The current time is {$currentTime}</p>

{* Example: Display a translated string -- which happens to include a variable *}
<p>{ts 1=$currentTime}(In your native language) The current time is %1.{/ts}</p>
