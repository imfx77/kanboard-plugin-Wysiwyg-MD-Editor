<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integrates external MD editors into Kanboard in order to conveniently edit/preview
                                            (and eventually render) the markdown textareas in the Kanboard interface.
                                            Each editor may allow for different customizations of functionality, MD features, and UI themes.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Wysiwyg MD Editor settings',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Wysiwyg MD Editor preview',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Preview with Saved Settings',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Change Settings',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Preview Container',
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Setup Editing Options',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Choose which MD editors to use.
                                                Enabling an editor will inject a corresponding button in the editing toolbar of each markdown textarea.
                                                All editors open independently of each other in a fullscreen overlay mode so that they don\'t mess with Kanboard UI.
                                                The actual UI of the editors is in English, no translations are available for them.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Enable a button for',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'A fully offline drop-in JavaScript markdown editor.
                                                Configured to cover all MD syntax and preview features GFM compatible.
                                                Supports side preview and has customized editing bar with multiple tools.
                                                Supplied with three themes : light, dimmed and dark.
                                                Implements code syntax highlight through HighlightJS for about 40 most common languages.
                                                No support for images upload, drag or paste, only trough URLs.
                                                No support for emoji syntax, only through OS emoji shortcuts (e.g. «WIN + .»).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Select the default theme for EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Light Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Dimmed Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Dark Theme',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'An online service based markdown editor and note taking tool.
                                                Covers wide range of MD syntax variations but configured to comply with GFM.
                                                Supports side preview, multiple tools, rich options and customizations.
                                                Basic switch for light/dark theme, there are multiple colorful themes via options for each pane - editing or preview.
                                                Selected preferences are remembered locally by the  browser, on reopening the editor last view will be restored.
                                                Supports code syntax highlight for a myriad of languages.
                                                Support for images upload, drag and paste BUT BE AWARE those are using the local browser storage, not the Kanboard DB!
                                                Fully supports emoji syntax and input through OS emoji shortcuts (e.g. «WIN + .»).
                                                There are extra features like KaTeX math expressions, Mermaid UML diagrams and other extensions that are
                                                supported by default BUT ARE NOT COMPATIBLE with the standard MD feature set that is supported by Kanboard!',
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Setup Rendering Options',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(TODO)',
);
