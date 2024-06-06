<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integriert externe MD-Editoren in Kanboard, um eine bequeme Bearbeitung und Vorschau zu ermöglichen
                                         die Markdown-Textbereiche sowie das Rendern der Markdown-Felder in der Kanboard-Oberfläche.
                                         Jeder Editor ermöglicht möglicherweise unterschiedliche Anpassungen der Funktionalität, MD-Funktionen und UI-Themen.
                                         Beim Rendern können Thema, Codehervorhebung und Hintergrundtransparenz parametrisiert werden.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Wysiwyg MD Editor Einstellungen',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Wysiwyg MD Editor Vorschau',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Vorschau mit gespeicherten Einstellungen',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Einstellungen ändern',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Vorschaucontainer',
    //
    // Template/config/settings/common
    //
    'WysiwygMDEditor_SETTINGS_ENABLE_BUTTON' => 'Eine Schaltfläche aktivieren für',
    'WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY' => 'Details anzeigen ...',
    'WysiwygMDEditor_SETTINGS_DESCR' => 'Dieses Plugin integriert Symbolwähler und externe MD-Editoren als zusätzliche Schaltflächen in die Symbolleiste der Bearbeitungsansicht.',
    //
    // Template/config/settings/symbol-pickers
    //
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_OPTIONS' => 'Symbolwähler-Optionen einrichten',
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_DESCR' => 'Wählen Sie aus, welche Symbolwähler verwendet werden sollen.
* Durch Aktivieren eines Symbolwählers wird eine entsprechende Schaltfläche in die Bearbeitungssymbolleiste jedes Markdown-Textbereichs eingefügt.
* Die Wähler öffnen sich gegenseitig ausschließend im transparenten Vollbild- (oder modalen) Overlay-Modus, sodass immer nur einer aktiv ist.
* Alle Picker sind verschiebbar, man kann sie also bequem verschieben, um den Inhalt darunter zu sehen.',
    'WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR' => 'Ein vollständig offline verfügbarer Vanilla JavaScript Emoji-Picker.
* ⚠ Die Emoticons sind **NICHT** bildbasiert, sondern Unicode-Symbole, ihr Aussehen ist also browser- und plattformabhängig!
* Hat Kategorien und eine Suche.
* Überlagert den Bearbeitungstextbereich und kann verschoben werden.
* Durch Klicken auf die Emoji-Symbole wird die aktuelle Textauswahl eingefügt und ersetzt.',
    'WysiwygMDEditor_SETTINGS_FAICONSPICKER_DESCR' => 'Ein vollständig offline verfügbarer Picker für `Font Awesome`-Symbole, implementiert mit **jQuery**.
* ⚠ Der Picker ist **NUR** mit `Font Awesome 4.7.0` kompatibel, dies ist die Version, die von der neuesten Kanboard-Version verwendet wird !
* ⚠ Die eingefügten Symbole sind eigentlich `<i>`-Tags. Damit sie also richtig angezeigt werden, muss Ihr gewählter MD-Renderer reines HTML zulassen !
* Hat eine Suche.
* Überlagert den Bearbeitungstextbereich und kann verschoben werden.
* Durch Klicken auf die Font Awesome-Symbole wird die aktuelle Textauswahl eingefügt und ersetzt.',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Bearbeitungsoptionen einrichten',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Wählen Sie aus, welche MD-Editoren verwendet werden sollen.
* Durch die Aktivierung eines Editors wird eine entsprechende Schaltfläche in die Bearbeitungssymbolleiste jedes Markdown-Textbereichs eingefügt.
* Alle Editoren werden unabhängig voneinander im Vollbild-Overlay-Modus geöffnet, damit sie nicht mit der Kanboard-Benutzeroberfläche in Konflikt geraten.
* Die tatsächliche Benutzeroberflächensprache der Editoren ist festgelegt (entweder **Englisch** oder **Chinesisch**) und es sind **`keine Übersetzungen`** für sie verfügbar.',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Ein vollständig offline einsetzbarer JavaScript-Markdown-Editor.
* Konfiguriert, um alle **MD**-Syntax- und Vorschaufunktionen abzudecken. **GFM**-kompatibel.
* Unterstützt Seitenvorschau und verfügt über eine benutzerdefinierte Bearbeitungsleiste mit mehreren Werkzeugen.
* Wird mit drei Themen geliefert: `Hell`, `Gedimmt` und `Dunkel`.
* Implementiert Code-Syntax-Highlight durch **Highlight.js** für etwa 40 gängigste Sprachen.
* **`Keine Unterstützung`** für das Hochladen, Ziehen oder Einfügen von Bildern; Bilder sind **nur** über URLs verfügbar.
* **`Keine Unterstützung`** für Emoji-Syntax; Emojis-Eingabe **nur** über Betriebssystem-Verknüpfungen (z. B. « **Windows + .** » auf dem Windows oder « **Strg + Befehl + Leertaste** » auf dem Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Wählen Sie das Standardthema für EasyMDE aus :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Hell Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Gedimmt Theme',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Dunkel Theme',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️Englische Version !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Chinesische Version !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Ein auf einem Onlinedienst basierender Markdown-Editor und Notizentool.
* Deckt ein breites Spektrum an **MD**-Syntaxvarianten ab, ist jedoch für die Einhaltung von **GFM** konfiguriert.
* Unterstützt Seitenvorschau und mehrere Tools.
* ⚠ Nur einfaches helles Design !
* Unterstützt die Code-Syntax-Hervorhebung für eine Vielzahl von Sprachen.
* Unterstützt die Emoji-Syntax vollständig und auch die Eingabe über Betriebssystem-Verknüpfungen (z. B. « **Windows + .** » auf dem Windows oder « **Strg + Befehl + Leertaste** » auf dem Mac).
* Es gibt zusätzliche Funktionen wie **KaTeX**-Matheausdrücke, **Mermaid**-UML-Diagramme und andere Erweiterungen
standardmäßig unterstützt **`SIND ABER NICHT KOMPATIBEL`** mit dem standardmäßigen **MD**-Funktionssatz, der von Kanboard unterstützt wird!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Fügt den standardmäßigen **StackEdit**-Funktionen Designs und Anpassungen hinzu.
* Grundlegender Wechsel für `Hell` / `Dunkel` Thema, es gibt mehrere farbenfrohe Themen über Optionen für jeden Bereich – Bearbeitung und Vorschau.
* Ausgewählte Einstellungen werden lokal vom Browser gespeichert. Beim erneuten Öffnen des Editors wird die letzte Ansicht wiederhergestellt.
* Unterstützung für das Hochladen, Ziehen und Einfügen von Bildern **`ABER BEACHTEN`** Diese verwenden den lokalen Browserspeicher und nicht die Kanboard-Datenbank!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Rendering-Optionen einrichten',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Wählen Sie, ob benutzerdefiniertes Rendering für Markdown-Felder verwendet werden soll.
* Die Rendering-Funktion ist vollständig clientseitig implementiert, verwendet JavaScript und nutzt eine spezielle Editor-Visualisierung.
* Alle Markdown-Felder auf der Seite werden verarbeitet, einschließlich derjenigen, die dynamisch erstellt oder geändert werden. Das Laden der Seite kann etwas langsam sein, wenn es viele davon gibt.
* <span style="border-bottom: 2px solid red; padding: 2px">⚠ Wenn Sie das **`MarkdownPlus`**-Plugin installiert haben, führt die Aktivierung dieser Rendering-Funktion zu einem **`KONFLIKT oder ÜBERSCHREIBEN`** Funktionalität,
abhängig von der Reihenfolge, in der die Plugins geladen werden!</span>  
⚠️ Also **entscheide**, welches du am liebsten verwendest !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Markdown-Rendering mit EasyMDE aktivieren',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'gerenderte Markdown-Felder sehen aus wie das Vorschaufenster des EasyMDE-Editors.
* Das Renderthema wird unabhängig vom ausgewählten Thema für den EasyMDE-Editor konfiguriert.
* Darüber hinaus kann der Designhintergrund transparent sein.
* Und schließlich kann die Syntax des Hervorhebungscodes geändert oder deaktiviert werden (im eigentlichen EasyMDE-Editor ist sie auf `Highlight.js` festgelegt).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Theme für Markdown-Rendering auswählen :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Transparenten Hintergrund erzwingen',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Wählen Sie die Syntax des Hervorhebungscodes für das Markdown-Rendering aus :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'KEINE Highlight-Code-Syntax verwenden',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Highlight.js verwenden (neben EasyMDE enthalten)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'HighlightCodeSyntax-Plugin verwenden ( ⚠️ nur wenn installiert ! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ Das HighlightCodeSyntax-Plugin ist NICHT installiert !',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ BEACHTEN SIE, dass Ihre aktuellen Einstellungen mit der Funktionalität des MarkdownPlus-Plugins KONFLIKTIEREN oder diese ÜBERSCHREIBEN !',
);
