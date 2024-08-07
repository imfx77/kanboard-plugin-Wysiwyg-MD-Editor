<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integrates external MD editors into Kanboard in order to conveniently edit and preview
                                            the markdown textareas, as well as render the markdown fields in the Kanboard interface.
                                            Each editor may allow for different customizations of functionality, MD features, and UI themes.
                                            Rendering can parametrize theme, code highlight, and background transparency.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Wysiwyg MD Editor settings',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Wysiwyg MD Editor preview',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Preview with Saved Settings',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Change Settings',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Preview Container',
    //
    // Template/config/settings/common
    //
    'WysiwygMDEditor_SETTINGS_ENABLE_BUTTON' => 'Enable a button for',
    'WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY' => 'See Details ...',
    'WysiwygMDEditor_SETTINGS_DESCR' => 'This plugin integrates symbol pickers and external MD editors as extra buttons into the editing view toolbar.',
    //
    // Template/config/settings/symbol-pickers
    //
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_OPTIONS' => 'Setup Symbol Picker Options',
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_DESCR' => 'Choose which symbol pickers to use.
* Enabling a symbol picker will inject a corresponding button in the editing toolbar of each markdown textarea.
* The pickers open mutually exclusive, in transparent fullscreen (or modal) overlay mode, so that there is only one active at a time.
* All pickers are draggable, it is conveniently to move them around in order to see the content underneath.',
    'WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR' => 'A fully offline vanilla JavaScript emoji picker.
* ⚠ The emoticons are **NOT** image based but rather are unicode symbols, so their look is browser and platform dependent !
* Has categories and search.
* Overlays the editing textarea and can be dragged around.
* Clicking the emoji icons inserts at and replaces the current text selection.',
    'WysiwygMDEditor_SETTINGS_EMOJIFONT_ENABLE' => 'Enforce using internal Emoji Font',
    'WysiwygMDEditor_SETTINGS_EMOJIFONT_DESCR' => 'The plugin provides an explicit Emoji Font (based on Mozilla Twemoji) if required to override existing emoji presentations.
* Using it will guarantee that the emojis will look in the same way in all browsers on all platforms.
* Also, no emojis will be missing  or badly displayed due to incomplete or old versions of browser or system supplied fonts.
* ⚠ On the other hand, since this option will override the default fonts precedence chain, the texts on KB pages might look differently !
* ⚠ When enabled, the font will be used in all normal pages, editing and rendering views of EasyMDE, regardless of the Emoji Picker setting ! 
* ⚠ Changing this option requires explicit page reloading to take effect !',
    'WysiwygMDEditor_SETTINGS_FAICONSPICKER_DESCR' => 'A fully offline picker for `Font Awesome` icons, implemented with **jQuery**.
* ⚠ The picker is **ONLY** compatible with `Font Awesome 4.7.0`, this is the version that is used by the latest Kanboard release !
* ⚠ The inserted icons are actually `<i>` tags, so in order for them to show properly your chosen MD renderer must allow for raw HTML !
* Has search.
* Overlays the editing textarea and can be dragged around.
* Clicking the Font Awesome icons inserts at and replaces the current text selection.',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Setup Editing Options',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Choose which MD editors to use.
* Enabling an editor will inject a corresponding button in the editing toolbar of each markdown textarea.
* All editors open independently of each other in a fullscreen overlay mode so that they don\'t mess with Kanboard UI.
* The actual UI language of the editors is fixed (either **English** or **Chinese**), and **`no translations`** are available for them.',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'A fully offline drop-in JavaScript markdown editor.
* Configured to cover all **MD** syntax and preview features **GFM** compatible.
* Supports side preview and has customized editing bar with multiple tools.
* Supplied with three themes : `light`, `dimmed` and `dark`.
* Implements code syntax highlight through **Highlight.js** for about 40 most common languages.
* **`No support`** for images upload, drag or paste; images are **only** available through URLs.
* **`No support`** for emoji syntax; emojis input **only** through OS shortcuts (e.g. « **Windows + .** » on Windows or « **Control + Command + Space** » on Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Select the default theme for EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Light Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Dimmed Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Dark Theme',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️English version !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Chinese version !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'An online service based markdown editor and note taking tool.
* Covers wide range of **MD** syntax variations but configured to comply with **GFM**.
* Supports side preview and multiple tools.
* ⚠ Basic light theme only !
* Supports code syntax highlight for a myriad of languages.
* Fully supports emoji syntax and also input through OS shortcuts (e.g. « **Windows + .** » on Windows or « **Control + Command + Space** » on Mac).
* There are extra features like **KaTeX** math expressions, **Mermaid** UML diagrams and other extensions that are
supported by default **`BUT ARE NOT COMPATIBLE`** with the standard **MD** feature set that is supported by Kanboard!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Adds themes and customizations on top of the standard **StackEdit** features.
* Basic switch for `light` / `dark` theme, there are multiple colorful themes via options for each pane - editing and preview.
* Selected preferences are remembered locally by the browser, on reopening the editor last view will be restored.
* Support for images upload, drag and paste **`BUT BE AWARE`** those are using the local browser storage, not the Kanboard DB!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Setup Rendering Options',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Choose whether to use custom rendering for markdown fields.
* Rendering feature is implemented entirely client side, it uses JavaScript and utilizes a specific editor visualization.
* All markdown fields on the page will be processed, including those that are dynamically created or changed. Loading the page might be a bit slow if there are many of them.
* <span style="border-bottom: 2px solid red; padding: 2px">⚠ If you have the **`MarkdownPlus`** plugin installed, then enabling this rendering feature will **`CONFLICT or OVERRIDE`** it\'s functionality,
depending on the order in which the plugins are loaded !</span>  
⚠️ So, **make up your mind** which one you prefer to use !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Enable markdown rendering with EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Rendered markdown fields will look like the preview pane of the EasyMDE editor.
* The render theme is configured independently of the selected theme for the EasyMDE editor.
* Additionally, the theme background can be forced to be transparent.
* And finally, the highlight code syntax can be changed or disabled (in the actual EasyMDE editor it is fixed to `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Select theme for markdown rendering :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Force transparent background',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Select the highlight code syntax for markdown rendering :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'Do NOT use highlight code syntax',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Use Highlight.js ( included alongside EasyMDE )',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Use HighlightCodeSyntax plugin ( ⚠️ only if installed ! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ The HighlightCodeSyntax plugin is NOT installed !',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ BE AWARE that your current settings CONFLICT or OVERRIDE the functionality of the MarkdownPlus plugin !',
);
