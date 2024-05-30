<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Интегрира външни MD редактори в Kanboard с цел удобно редактиране и преглед
                                         markdown полета за маркиране, както и за изобразяването им в интерфейса на Kanboard.
                                         Всеки редактор позволява различни персонализации на функционалността, MD функции и UI теми.
                                         Изобразяването може да параметризира темата, оцветяването на код и прозрачността на фона.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Настройки на Wysiwyg MD Editor',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Преглед на Wysiwyg MD Editor',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Преглед със запазените настройки',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Промяна на настройките',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Визуализация на контейнер',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Настройка на опциите за редактиране',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Изберете кои MD редактори да използвате.
* Активирането на редактор ще вмъкне съответен бутон в лентата с инструменти за редактиране на всяко markdown поле.
* Всички редактори се отварят независимо един от друг в режим на покриване на целия екран, така че да не се смесват с потребителския интерфейс на Kanboard.
* Действителният потребителски интерфейс на редакторите е на **английски**, **`няма преводи`** за тях.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Активиране на бутон за',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Напълно офлайн markdown редактор на JavaScript.
* Конфигуриран да покрива пълния **MD** синтаксис и функции за преглед, съвместими с **GFM**.
* Поддържа страничен преглед и има персонализирана лента за редактиране с множество инструменти.
* Доставя се с три теми: `светла`, `затъмнена` и `тъмна`.
* Осъществява оцветяване на синтаксиса на код чрез **Highlight.js** за около 40 най-често срещани езика.
* **`Няма поддръжка`** за upload, drag или paste на изображения; изображенията са достъпни **само** чрез URL адреси.
* **`Няма поддръжка`** за синтаксис на емотикони; въвеждане на emojis **само** чрез шорткъти на OS (напр. « **Windows + .** » за Windows или « **Control + Command + Space** » за Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Изберете темата по подразбиране за EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Светла тема',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Затъмнена тема',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Тъмна тема',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️Версия на английски език !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Версия на китайски език !',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Онлайн услуга, базирана на markdown редактор и инструмент за водене на бележки.
* Покрива широка гама от варианти на **MD** синтаксис, но е конфигуриран да отговаря на **GFM**.
* Поддържа страничен преглед и множество инструменти.
* ⚠️Само основна светла тема !
* Поддържа оцветяване на синтаксиса на кода за множество езици.
* Напълно поддържа синтаксис на емотикони, а също и въвеждане чрез шорткъти на OS (напр. « **Windows + .** » за Windows или « **Control + Command + Space** » за Mac).
* Има допълнителни функции като **KaTeX** математически изрази, **Mermaid** UML диаграми и други разширения, които се
поддържат по подразбиране **`НО СА НЕСЪВМЕСТИМИ`** със стандартния набор от **MD** функции, който се поддържа от Kanboard!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Добавя теми и персонализации над стандартните функции на **StackEdit**.
* Основен превключвател за `светла` / `тъмна` тема, има множество цветни теми чрез опции за всеки панел - за редактиране и за преглед.
* Избраните предпочитания се запомнят локално от браузъра, при повторно отваряне на редактора последният изглед ще бъде възстановен.
* Поддръжка за upload, drag и paste на изображения, **НО ВНИМАНИЕ`** използва се локалното хранилище на браузъра, а не Kanboard DB!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Настройка на опциите за изобразяване',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Изберете дали да използвате персонализирано изобразяване за markdown полетата.
* Функцията за изобразяване е изпълнена изцяло от страна на клиента, тя използва JavaScript и специфичната визуализация на съответния редактор.
* Всички markdown полета на страницата ще бъдат обработени, включително тези, които са динамично създадени или променени. Зареждането на страницата може да е малко бавно, ако има много такива полета.
* <span style="border-bottom: 2px solid red; padding: 2px">Ако имате инсталиран плъгин **`MarkdownPlus`**, активирането на тази функция за изобразяване ще **`КОНФЛИКТИРА или ОБОРИ`** неговата функционалност,
в зависимост от реда, в който се зареждат плъгините!</span><br>⚠️ И така, **преценете** кой от двата предпочитате да използвате !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Активиране на markdown изобразяване с EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Изобразените markdown полета ще изглеждат както в панела за преглед на редактора EasyMDE.
* Темата за изобразяване се конфигурира независимо от избраната тема за редактора EasyMDE.
* Освен това фонът на темата може да бъде направен прозрачен.
* И накрая, синтаксисът на кода за оцветяване може да бъде променен или деактивиран (в самия редактор EasyMDE той е фиксиран на `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Избор на тема за markdown изобразяване :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Използвай прозрачен фон',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Избор на синтаксис за оцветяване на код при markdown изобразяване :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'НЕ използвай синтаксис за оцветяване на код',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Използвай Highlight.js (включен заедно с EasyMDE)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Използвай плъгина HighlightCodeSyntax ( ⚠️ само ако е инсталиран ! )',
);
