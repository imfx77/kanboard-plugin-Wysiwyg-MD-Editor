<?php

return array(
    //
    // GENERAL
    //
     'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integriert externe MD-Editoren in Kanboard, um eine bequeme Bearbeitung/Vorschau zu ermöglichen
                                             (und schließlich rendern) die Markdown-Textbereiche in der Kanboard-Oberfläche.
                                             Jeder Editor ermöglicht möglicherweise unterschiedliche Anpassungen der Funktionalität, MD-Funktionen und UI-Themen.',
    //
    // Template/config/settings
    //
     'WysiwygMDEditor_TITLE_SETTINGS' => 'Wysiwyg MD Editor Einstellungen',
     'WysiwygMDEditor_TITLE_PREVIEW' => 'Wysiwyg MD Editor Vorschau',
     'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Vorschau mit gespeicherten Einstellungen',
     'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Einstellungen ändern',
     'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Vorschaucontainer',
     'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Bearbeitungs-Optionen einrichten',
     'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Wählen Sie aus, welche MD-Editoren verwendet werden sollen.
                                                 Durch die Aktivierung eines Editors wird eine entsprechende Schaltfläche in die Bearbeitungssymbolleiste jedes Markdown-Textbereichs eingefügt.
                                                 Alle Editoren werden unabhängig voneinander im Vollbild-Overlay-Modus geöffnet, damit sie nicht mit der Kanboard-Benutzeroberfläche in Konflikt geraten.
                                                 Die eigentliche Benutzeroberfläche der Editoren ist auf Englisch, es sind keine Übersetzungen für sie verfügbar.',
     'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Eine Schaltfläche aktivieren für',
     'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Ein vollständig offline einsetzbarer JavaScript-Markdown-Editor.
                                                 Konfiguriert, um alle MD-Syntax- und Vorschaufunktionen abzudecken. GFM-kompatibel.
                                                 Unterstützt die Seitenvorschau und verfügt über eine benutzerdefinierte Bearbeitungsleiste mit mehreren Werkzeugen.
                                                 Lieferung mit drei Themen: hell, gedimmt und dunkel.
                                                 Implementiert Code-Syntax-Highlight durch HighlightJS für etwa 40 gängigste Sprachen.
                                                 Keine Unterstützung für das Hochladen, Ziehen oder Einfügen von Bildern, nur über URLs.
                                                 Keine Unterstützung für die Emoji-Syntax, nur über OS-Emoji-Verknüpfungen (z. B. «WIN + .»).',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Wählen Sie das Standardthema für EasyMDE aus:',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Light Theme',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Abgeblendetes Theme',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Dunkles Theme',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Ein auf einem Onlinedienst basierender Markdown-Editor und Notizentool.
                                                 Deckt ein breites Spektrum an MD-Syntaxvarianten ab, ist jedoch für die Einhaltung von GFM konfiguriert.
                                                 Unterstützt Seitenvorschau, mehrere Tools, umfangreiche Optionen und Anpassungen.
                                                 Grundlegender Wechsel für Hell-/Dunkel-Design. Es gibt mehrere farbenfrohe Designs über Optionen für jeden Bereich – Bearbeiten oder Vorschau.
                                                 Ausgewählte Einstellungen werden lokal vom Browser gespeichert. Beim erneuten Öffnen des Editors wird die letzte Ansicht wiederhergestellt.
                                                 Unterstützt die Code-Syntax-Hervorhebung für eine Vielzahl von Sprachen.
                                                 Unterstützung für das Hochladen, Ziehen und Einfügen von Bildern. Beachten Sie jedoch, dass diese den lokalen Browserspeicher und nicht die Kanboard-Datenbank verwenden!
                                                 Unterstützt die Emoji-Syntax und die Eingabe über OS-Emoji-Verknüpfungen (z. B. «WIN + .») vollständig.
                                                 Es gibt zusätzliche Funktionen wie KaTeX-Matheausdrücke, Mermaid UML-Diagramme und andere Erweiterungen
                                                 werden standardmäßig unterstützt, SIND ABER NICHT KOMPATIBEL mit dem Standard-MD-Funktionssatz, der von Kanboard unterstützt wird!',
     'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Rendering-Optionen einrichten',
     'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(TODO)',
);
