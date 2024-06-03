<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editores MD externos en Kanboard para poder editar y obtener una vista previa cómodamente
                                         las áreas de texto de rebajas, así como representar los campos de rebajas en la interfaz de Kanboard.
                                         Cada editor puede permitir diferentes personalizaciones de funcionalidad, características de MD y temas de UI.
                                         El renderizado puede parametrizar el tema, el resaltado del código y la transparencia del fondo.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Configuración del editor Wysiwyg MD',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Vista previa del Editor Wysiwyg MD',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Vista previa con configuraciones guardadas',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Cambiar configuración',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Vista previa del contenedor',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurar opciones de edición',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Elige qué editores MD usar.
* Al habilitar un editor se insertará un botón correspondiente en la barra de herramientas de edición de cada área de texto de rebajas.
* Todos los editores se abren de forma independiente entre sí en un modo de superposición de pantalla completa para que no interfieran con la interfaz de usuario de Kanboard.
* El idioma real de la interfaz de usuario de los editores es fijo (ya sea **inglés** o **chino**) y **`no hay traducciones`** disponibles para ellos.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Habilitar un botón para',
    'WysiwygMDEditor_SETTINGS_EDITING_DETAILS_SUMMARY' => 'Ver Detalles ...',
    'WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR' => 'Un selector de emojis de JavaScript estándar completamente fuera de línea.
* Tiene categorías y búsqueda.
* Superpone el área de texto de edición y se puede arrastrar.
* Al hacer clic en los íconos emoji, se inserta y reemplaza la selección de texto actual.',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un editor de rebajas de JavaScript totalmente fuera de línea.
* Configurado para cubrir todas las funciones de vista previa y sintaxis de **MD** compatible con **GFM**.
* Admite vista previa lateral y tiene una barra de edición personalizada con múltiples herramientas.
* Se suministra con tres temas: `claro`, `atenuado` y `oscuro`.
* Implementa resaltado de sintaxis de código a través de **Highlight.js** para aproximadamente los 40 idiomas más comunes.
* **`No hay soporte`** para cargar, arrastrar o pegar imágenes; las imágenes **sólo** están disponibles a través de URL.
* **`No hay soporte`** para la sintaxis de emoji; los emojis ingresan **sólo** a través de atajos del sistema operativo (por ejemplo, « **Windows + .** » en Windows o « **Control + Comando + Espacio** » en Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Seleccione el tema predeterminado para EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema claro',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema atenuado',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema oscuro',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️¡Versión en inglés!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️¡Versión china!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un editor de rebajas basado en un servicio en línea y una herramienta para tomar notas.
* Cubre una amplia gama de variaciones de sintaxis de **MD** pero está configurado para cumplir con **GFM**.
* Admite vista previa lateral y múltiples herramientas.
* ⚠️¡Solo tema ligero básico!
* Admite resaltado de sintaxis de código para una gran variedad de idiomas.
* Totalmente compatible con la sintaxis de emoji y también la entrada a través de atajos del sistema operativo (por ejemplo, « **Windows + .** » en Windows o « **Control + Comando + Espacio** » en Mac).
* Hay características adicionales como expresiones matemáticas **KaTeX**, diagramas UML **Mermaid** y otras extensiones que son
admitidos de forma predeterminada **`PERO NO SON COMPATIBLES`** con el conjunto de funciones estándar **MD** admitido por Kanboard!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Agrega temas y personalizaciones además de las funciones estándar **StackEdit**.
* Cambio básico para el tema `claro` / `oscuro`, hay múltiples temas coloridos a través de opciones para cada panel: edición y vista previa.
* El navegador recuerda localmente las preferencias seleccionadas; al volver a abrir el editor se restaurará la última vista.
* Soporte para cargar, arrastrar y pegar imágenes **`PERO TENGA EN CUENTA`** ¡esas usan el almacenamiento del navegador local, no la base de datos Kanboard!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurar opciones de renderizado',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Elija si desea utilizar la representación personalizada para los campos de rebajas.
* La función de renderizado se implementa completamente en el lado del cliente, utiliza JavaScript y utiliza una visualización de editor específica.
* Se procesarán todos los campos de rebajas de la página, incluidos aquellos que se crean o modifican dinámicamente. La carga de la página puede ser un poco lenta si hay muchas.
* <span style="border-bottom: 2px solid red; padding: 2px">Si tiene el complemento **`MarkdownPlus`** instalado, habilitar esta función de renderizado **`CONFLICTO o ANULACIÓN`** es funcionalidad,
¡dependiendo del orden en que se cargan los complementos!</span><br>⚠️ Entonces, **¡decide** cuál prefieres usar !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Habilitar renderizado de rebajas con EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Los campos de rebajas renderizados se verán como el panel de vista previa del editor EasyMDE.
* El tema de renderizado se configura independientemente del tema seleccionado para el editor EasyMDE.
* Además, se puede forzar que el fondo del tema sea transparente.
* Y finalmente, la sintaxis del código resaltado se puede cambiar o deshabilitar (en el editor EasyMDE real está fijo en `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Seleccionar tema para renderizado de rebajas :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Forzar fondo transparente',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Seleccione la sintaxis del código resaltado para la representación de rebajas :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'NO utilice la sintaxis del código resaltado',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Usar Highlight.js (incluido junto con EasyMDE)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Utilice el complemento HighlightCodeSyntax ( ⚠️ ¡solo si está instalado! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ ¡El complemento HighlightCodeSyntax NO está instalado!',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ ¡TENGA EN CUENTA que su configuración actual ENTRA EN CONFLICTO o ANULA la funcionalidad del complemento MarkdownPlus!',
);
