<?php

return array(
    //
    // GENERAL
    //
     'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editor MD esterni in Kanboard per poter modificare/visualizzare in anteprima comodamente
                                             (ed eventualmente renderizzare) le aree di testo markdown nell\'interfaccia Kanboard.
                                             Ciascun editor può consentire diverse personalizzazioni di funzionalità, caratteristiche MD e temi dell\'interfaccia utente.',
    //
    // Template/config/settings
    //
     'WysiwygMDEditor_TITLE_SETTINGS' => 'Impostazioni dell\'editor Wysiwyg MD',
     'WysiwygMDEditor_TITLE_PREVIEW' => 'Anteprima dell\'editor Wysiwyg MD',
     'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Anteprima con impostazioni salvate',
     'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Modifica impostazioni',
     'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Contenitore di anteprima',
     'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Imposta opzioni di modifica',
     'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Scegli quali editor MD utilizzare.
                                                 L\'abilitazione di un editor inserirà un pulsante corrispondente nella barra degli strumenti di modifica di ciascuna area di testo markdown.
                                                 Tutti gli editor si aprono indipendentemente l\'uno dall\'altro in modalità overlay a schermo intero in modo da non interferire con l\'interfaccia utente di Kanboard.
                                                 L\'interfaccia utente effettiva degli editor è in inglese, per loro non sono disponibili traduzioni.',
     'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Abilita un pulsante per',
     'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un editor markdown JavaScript drop-in completamente offline.
                                                 Configurato per coprire tutta la sintassi MD e le funzionalità di anteprima compatibili con GFM.
                                                 Supporta l\'anteprima laterale e dispone di una barra di modifica personalizzata con più strumenti.
                                                 Fornito con tre temi: chiaro, attenuato e scuro.
                                                 Implementa l\'evidenziazione della sintassi del codice tramite HighlightJS per circa 40 lingue più comuni.
                                                 Nessun supporto per il caricamento, il trascinamento o l\'incollamento delle immagini, solo tramite URL.
                                                 Nessun supporto per la sintassi delle emoji, solo tramite le scorciatoie emoji del sistema operativo (ad esempio «WIN + .»).',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Seleziona il tema predefinito per EasyMDE:',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema chiaro',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema oscurato',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema scuro',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un editor di markdown basato su un servizio online e uno strumento per prendere appunti.
                                                 Copre un\'ampia gamma di variazioni della sintassi MD ma configurato per essere conforme a GFM.
                                                 Supporta anteprima laterale, strumenti multipli, opzioni avanzate e personalizzazioni.
                                                 Interruttore di base per tema chiaro/scuro, sono disponibili più temi colorati tramite opzioni per ciascun riquadro: modifica o anteprima.
                                                 Le preferenze selezionate vengono ricordate localmente dal browser, alla riapertura dell\'editor verrà ripristinata l\'ultima visualizzazione.
                                                 Supporta l\'evidenziazione della sintassi del codice per una miriade di lingue.
                                                 Supporto per il caricamento, il trascinamento e l\'incollaggio delle immagini, MA ATTENZIONE, questi utilizzano la memoria del browser locale, non il DB Kanboard!
                                                 Supporta pienamente la sintassi delle emoji e l\'input tramite le scorciatoie emoji del sistema operativo (ad esempio «WIN + .»).
                                                 Ci sono funzionalità extra come le espressioni matematiche KaTeX, i diagrammi UML Sirena e altre estensioni
                                                 supportati per impostazione predefinita MA NON SONO COMPATIBILI con il set di funzionalità MD standard supportato da Kanboard!',
     'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Imposta opzioni di rendering',
     'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(DA FARE)',
);
