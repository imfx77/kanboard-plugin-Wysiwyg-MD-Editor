<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Интегрирует внешние редакторы MD в Kanboard для удобного редактирования и предварительного просмотра
                                         текстовые области уценки, а также отображать поля уценки в интерфейсе Kanboard.
                                         Каждый редактор может позволять различные настройки функциональности, функций MD и тем пользовательского интерфейса.
                                         При рендеринге можно параметризовать тему, подсветку кода и прозрачность фона.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Настройки редактора Wysiwyg MD',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Предварительный просмотр редактора Wysiwyg MD',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Предварительный просмотр с сохраненными настройками',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Изменить настройки',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Контейнер предварительного просмотра',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Настроить параметры редактирования',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Выберите, какие редакторы MD использовать.
* Включение редактора приведет к появлению соответствующей кнопки на панели инструментов редактирования каждой текстовой области уценки.
* Все редакторы открываются независимо друг от друга в полноэкранном режиме наложения, чтобы не мешать пользовательскому интерфейсу Kanboard.
* Фактический интерфейс редакторов выполнен на **английском** языке, для них **`переводы нет`**.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Включить кнопку для',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Полностью автономный редактор уценки JavaScript.
* Настроен так, чтобы охватить весь синтаксис **MD** и функции предварительного просмотра, совместимые с **GFM**.
* Поддерживает боковой предварительный просмотр и имеет настраиваемую панель редактирования с несколькими инструментами.
* Поставляется с тремя темами: `светлая`, `тусклая` и `темная`.
* Реализует подсветку синтаксиса кода с помощью **Highlight.js** примерно для 40 наиболее распространенных языков.
* **`Нет поддержки`** для загрузки, перетаскивания и вставки изображений; изображения доступны **только** по URL-адресам.
* **`Не поддерживается`** синтаксис эмодзи; смайлы вводятся **только** с помощью ярлыков ОС (например, « **Windows + .** » в Windows или « **Control + Command + Space** » на Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Выберите тему по умолчанию для EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Светлая тема',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Тусклая тема',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Темная тема',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️Английская версия !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Китайская версия !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Редактор уценок и инструмент для создания заметок на основе онлайн-сервиса.
* Охватывает широкий спектр вариантов синтаксиса **MD**, но настроен в соответствии с **GFM**.
* Поддерживает боковой предварительный просмотр и несколько инструментов.
* ⚠️Только базовая светлая тема !
* Поддерживает подсветку синтаксиса кода для множества языков.
* Полностью поддерживает синтаксис эмодзи, а также ввод с помощью ярлыков ОС (например, « **Windows + .** » в Windows или « **Control + Command + Space** » на Mac).
* Существуют дополнительные функции, такие как математические выражения **KaTeX**, UML-диаграммы **Mermaid** и другие расширения,
поддерживаются по умолчанию **`НО НЕ СОВМЕСТИМЫ`** со стандартным набором функций **MD**, который поддерживается Kanboard!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Добавляет темы и настройки поверх стандартных функций **StackEdit**.
* Базовый переключатель между `светлой` и `темной` темами, для каждой панели доступно несколько красочных тем — редактирование и предварительный просмотр.
* Выбранные настройки запоминаются локально браузером, при повторном открытии редактора последний вид будет восстановлен.
* Поддержка загрузки, перетаскивания и вставки изображений. **`НО БУДЬТЕ ВНИМАТЕЛЬНЫ`** как они используют локальное хранилище браузера, а не базу данных Kanboard!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Настроить параметры рендеринга',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Выберите, использовать ли пользовательский рендеринг для полей уценки.
* Функция рендеринга реализована полностью на стороне клиента, она использует JavaScript и использует специальный редактор визуализации.
* Будут обработаны все поля уценки на странице, включая те, которые создаются или изменяются динамически. Загрузка страницы может быть немного медленной, если их много.
* <span style="border-bottom: 2px solid red; padding: 2px">Если у вас установлен плагин **`MarkdownPlus`**, то включение этой функции рендеринга приведет к **`КОФЛИКТУ или ОТМЕНУ`** его функциональность,
в зависимости от порядка загрузки плагинов !</span><br>⚠️ Итак, **решайте**, какой из них вы предпочитаете использовать !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Включить рендеринг уценки с помощью EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Отображаемые поля уценки будут выглядеть как панель предварительного просмотра редактора EasyMDE.
* Тема рендеринга настраиваться независимо от выбранной темы для редактора EasyMDE.
* Кроме того, фон темы можно сделать прозрачным.
* И наконец, синтаксис кода подсветки можно изменить или отключить (в реальном редакторе EasyMDE он фиксирован на `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Выберите тему для рендеринга уценки :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Принудительно прозрачный фон',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Выберите синтаксис кода выделения для рендеринга уценки :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'НЕ использовать синтаксис кода подсветки',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Используйте Highlight.js (входит в состав EasyMDE)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Использовать плагин HighlightCodeSyntax ( ⚠️ только если он установлен ! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ Плагин HighlightCodeSyntax НЕ установлен !',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ ВНИМАНИЕ, что ваши текущие настройки КОНФЛИКТУЮТ или ОТМЕНЯЮТ функциональность плагина MarkdownPlus !',
);
