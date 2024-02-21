<?php

return array(
    //
    // GENERAL
    //
     'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editores MD externos en Kanboard para poder editar/previsualizar cómodamente
                                             (y eventualmente renderizar) las áreas de texto de rebajas en la interfaz Kanboard.
                                             Cada editor puede permitir diferentes personalizaciones de funcionalidad, características MD y temas de UI.',
    //
    // Template/config/settings
    //
     'WysiwygMDEditor_TITLE_SETTINGS' => 'Configuración del Еditor Wysiwyg MD',
     'WysiwygMDEditor_TITLE_PREVIEW' => 'Vista previa del Editor Wysiwyg MD',
     'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Vista previa con configuraciones guardadas',
     'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Cambiar configuración',
     'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Vista previa del contenedor',
     'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurar opciones de edición',
     'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Elige qué editores MD usar.
                                                 Al habilitar un editor se insertará un botón correspondiente en la barra de herramientas de edición de cada área de texto de rebajas.
                                                 Todos los editores se abren de forma independiente entre sí en un modo de superposición de pantalla completa para que no interfieran con la interfaz de usuario de Kanboard.
                                                 La interfaz de usuario real de los editores está en inglés, no hay traducciones disponibles para ellos.',
     'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Habilitar un botón para',
     'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un editor de rebajas de JavaScript totalmente fuera de línea.
                                                 Configurado para cubrir toda la sintaxis de MD y funciones de vista previa compatibles con GFM.
                                                 Admite vista previa lateral y tiene una barra de edición personalizada con múltiples herramientas.
                                                 Se suministra con tres temas: claro, atenuado y oscuro.
                                                 Implementa el resaltado de sintaxis de código a través de HighlightJS para aproximadamente los 40 idiomas más comunes.
                                                 No se admite la carga, arrastre o pegado de imágenes, solo a través de URL.
                                                 No hay soporte para la sintaxis de emoji, solo a través de atajos de emoji del sistema operativo (por ejemplo, «WIN + .»).',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Seleccione el tema predeterminado para EasyMDE :',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema ligero',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema atenuado',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema oscuro',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un editor de rebajas basado en un servicio en línea y una herramienta para tomar notas.
                                                 Cubre una amplia gama de variaciones de sintaxis MD pero está configurado para cumplir con GFM.
                                                 Admite vista previa lateral, múltiples herramientas, opciones ricas y personalizaciones.
                                                 Cambio básico para tema claro/oscuro, hay múltiples temas coloridos a través de opciones para cada panel: edición o vista previa.
                                                 El navegador recuerda localmente las preferencias seleccionadas; al volver a abrir el editor se restaurará la última vista.
                                                 Admite resaltado de sintaxis de código para una gran variedad de idiomas.
                                                 Soporte para cargar, arrastrar y pegar imágenes, ¡PERO TENGA EN CUENTA que están usando el almacenamiento del navegador local, no la base de datos Kanboard!
                                                 Totalmente compatible con la sintaxis de emoji y la entrada a través de atajos de emoji del sistema operativo (por ejemplo, «WIN + .»).
                                                 Hay características adicionales como expresiones matemáticas KaTeX, diagramas UML de Mermaid y otras extensiones que son
                                                 son compatibles de forma predeterminada, ¡PERO NO SON COMPATIBLES con el conjunto de funciones estándar de MD que admite Kanboard!',
     'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurar opciones de renderizado',
     'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(TODO)',
);
