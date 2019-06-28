{* HEADER *}

<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="top"}
</div>

<p>ESTAS SEGURO QUE DESEAS MODIFICAR ESTA PRUEBA  <p>{$pruebaview.nombre}</p> <p>{$pruebaview.apellido}</p> 
<p>{$pruebaview.cedula}</p> <p>{$pruebaview.partido}</p> !</p?

<div class="crm-accordion-wrapper">
<div class="crm-accordion-header">
 Pruebas
</div>
<div class="crm-accordion-body">
<div class="crm-block crm-form-block crm-form-title-here-form-block">
<div class="section {$form.nombre.nombre}-section"><!--Renderiza el nombre del form-->
<div class="label">{$form.nombre.label}</div> <!--Renderiza un label-->
<div class="content">{$form.nombre.html}</div> <!--Renderiza representacion del html del elemento-->
<div class="clear"></div>
</div>
</div>

<div class="crm-accordion-body">
<div class="crm-block crm-form-block crm-form-title-here-form-block">
<div class="section {$form.apellido.apellido}-section"><!--Renderiza el nombre del form-->
<div class="label">{$form.apellido.label}</div> <!--Renderiza un label-->
<div class="content">{$form.apellido.html}</div> <!--Renderiza representacion del html del elemento-->
<div class="clear"></div>
</div>
</div>

<div class="crm-accordion-body">
<div class="crm-block crm-form-block crm-form-title-here-form-block">
<div class="section {$form.cedula.cedula}-section"><!--Renderiza el nombre del form-->
<div class="label">{$form.cedula.label}</div> <!--Renderiza un label-->
<div class="content">{$form.cedula.html}</div> <!--Renderiza representacion del html del elemento-->
<div class="clear"></div>
</div>
</div>

<div class="crm-accordion-body">
<div class="crm-block crm-form-block crm-form-title-here-form-block">
<div class="section {$form.partido.partido}-section"><!--Renderiza el nombre del form-->
<div class="label">{$form.partido.label}</div> <!--Renderiza un label-->
<div class="content">{$form.partido.html}</div> <!--Renderiza representacion del html del elemento-->
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
