<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editor MD esterni in Kanboard per poter modificare e visualizzare in anteprima comodamente
                                         le aree di testo markdown, nonché il rendering dei campi markdown nell\'interfaccia Kanboard.
                                         Ciascun editor può consentire diverse personalizzazioni di funzionalità, caratteristiche MD e temi dell\'interfaccia utente.
                                         Il rendering può parametrizzare il tema, l\'evidenziazione del codice e la trasparenza dello sfondo.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Impostazioni dell\'editor Wysiwyg MD',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Anteprima dell\'editor Wysiwyg MD',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Anteprima con impostazioni salvate',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Modifica impostazioni',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Contenitore di anteprima',
    //
    // Template/config/settings/common
    //
    'WysiwygMDEditor_SETTINGS_ENABLE_BUTTON' => 'Abilita un pulsante per',
    'WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY' => 'Vedi dettagli ...',
    'WysiwygMDEditor_SETTINGS_DESCR' => 'Questo plugin integra selettori di simboli ed editor MD esterni come pulsanti aggiuntivi nella barra degli strumenti della vista di modifica.',
    //
    // Template/config/settings/symbol-pickers
    //
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_OPTIONS' => 'Imposta le opzioni del selettore simboli',
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_DESCR' => 'Scegli quale selettore di simboli utilizzare.
* L\'abilitazione di un selettore di simboli inserirà un pulsante corrispondente nella barra degli strumenti di modifica di ciascuna area di testo markdown.
* I selettori si aprono in modo mutuamente esclusivo, in modalità sovrapposizione trasparente a schermo intero (o modale), in modo che ce ne sia solo uno attivo alla volta.
* Tutti i selettori sono trascinabili, è conveniente spostarli per vedere il contenuto sottostante.',
    'WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR' => 'Un selettore di emoji JavaScript vanilla completamente offline.
* ⚠ Le emoticon **NON** sono basate su immagini ma sono piuttosto simboli Unicode, quindi il loro aspetto dipende dal browser e dalla piattaforma !
* Ha categorie e ricerca.
* Si sovrappone all\'area di testo di modifica e può essere trascinato.
* Facendo clic sulle icone emoji si inserisce e sostituisce la selezione di testo corrente.',
    'WysiwygMDEditor_SETTINGS_FAICONSPICKER_DESCR' => 'Un selettore completamente offline per le icone `Font Awesome`, implementato con **jQuery**.
* ⚠ Il selettore è **SOLO** compatibile con `Font Awesome 4.7.0`, questa è la versione utilizzata dall\'ultima versione di Kanboard !
* ⚠ Le icone inserite sono in realtà tag `<i>`, quindi affinché possano essere visualizzate correttamente il renderer MD scelto deve consentire l\'HTML non elaborato !
* Ha la ricerca.
* Si sovrappone all\'area di testo di modifica e può essere trascinato.
* Facendo clic sulle icone Font Awesome si inserisce e sostituisce la selezione di testo corrente.',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Imposta opzioni di modifica',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Scegli quali editor MD utilizzare.
* L\'abilitazione di un editor inserirà un pulsante corrispondente nella barra degli strumenti di modifica di ciascuna area di testo markdown.
* Tutti gli editor si aprono indipendentemente l\'uno dall\'altro in modalità overlay a schermo intero in modo da non interferire con l\'interfaccia utente di Kanboard.
* La lingua effettiva dell\'interfaccia utente degli editor è fissa (**inglese** o **cinese**) e **`non sono disponibili traduzioni`** per loro.',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un editor markdown JavaScript drop-in completamente offline.
* Configurato per coprire tutta la sintassi **MD** e le funzionalità di anteprima compatibile con **GFM**.
* Supporta l\'anteprima laterale e dispone di una barra di modifica personalizzata con più strumenti.
* Fornito con tre temi: `chiaro`, `oscurato` e `scuro`.
* Implementa l\'evidenziazione della sintassi del codice tramite **Highlight.js** per circa 40 lingue più comuni.
* **`Nessun supporto`** per caricare, trascinare o incollare le immagini; le immagini sono **solo** disponibili tramite URL.
* **`Nessun supporto`** per la sintassi delle emoji; input di emoji **solo** tramite scorciatoie del sistema operativo (ad esempio « **Windows + .** » su Windows o « **Control + Comando + Spazio**» su Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Seleziona il tema predefinito per EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema chiaro',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema oscurato',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema scuro',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️Versione inglese !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Versione cinese !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un editor di markdown basato su un servizio online e uno strumento per prendere appunti.
* Copre un\'ampia gamma di variazioni della sintassi **MD** ma configurato per essere conforme a **GFM**.
* Supporta l\'anteprima laterale e più strumenti.
* ⚠ Solo tema luce di base !
* Supporta l\'evidenziazione della sintassi del codice per una miriade di lingue.
* Supporta completamente la sintassi delle emoji e anche l\'input tramite scorciatoie del sistema operativo (ad esempio « **Windows + .** » su Windows o « **Control + Comando + Spazio**» su Mac).
* Sono presenti funzionalità extra come le espressioni matematiche **KaTeX**, i diagrammi UML **Mermaid** e altre estensioni che sono
supportati per impostazione predefinita **`MA NON SONO COMPATIBILI`** con il set di funzionalità standard **MD** supportato da Kanboard!',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Aggiunge temi e personalizzazioni oltre alle funzionalità standard di **StackEdit**.
* Interruttore di base per il tema `chiaro` / `scuro`, sono disponibili più temi colorati tramite opzioni per ciascun riquadro: modifica e anteprima.
* Le preferenze selezionate vengono ricordate localmente dal browser, alla riapertura dell\'editor verrà ripristinata l\'ultima visualizzazione.
* Supporto per il caricamento, il trascinamento e l\'incollaggio delle immagini **`MA ATTENZIONE`** queste utilizzano la memoria del browser locale, non il DB Kanboard!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Imposta opzioni di rendering',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Scegli se utilizzare il rendering personalizzato per i campi markdown.
* La funzionalità di rendering è implementata interamente lato client, utilizza JavaScript e utilizza una visualizzazione dell\'editor specifica.
* Verranno elaborati tutti i campi di markdown della pagina, compresi quelli creati o modificati dinamicamente. Il caricamento della pagina potrebbe essere un po\' lento se ce ne sono molti.
* <span style="border-bottom: 2px solid red; padding: 2px">⚠ Se hai installato il plugin **`MarkdownPlus`**, abilitando questa funzione di rendering **`CONFLICT or OVERRIDE`** è funzionalità,
a seconda dell\'ordine in cui i plugin vengono caricati!</span>  
⚠️ Quindi, **decidi** quale preferisci utilizzare !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Abilita rendering markdown con EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'I campi markdown visualizzati appariranno come il riquadro di anteprima dell\'editor EasyMDE.
* Il tema di rendering viene configurato indipendentemente dal tema selezionato per l\'editor EasyMDE.
* Inoltre, è possibile forzare lo sfondo del tema a essere trasparente.
* Infine, la sintassi del codice evidenziato può essere modificata o disabilitata (nell\'attuale editor EasyMDE è fissata su `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Seleziona tema per il rendering markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Forza sfondo trasparente',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Seleziona la sintassi del codice evidenziato per il rendering markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'NON utilizzare la sintassi del codice evidenziato',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Utilizza Highlight.js (incluso insieme a EasyMDE)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Utilizza il plugin HighlightCodeSyntax ( ⚠️ solo se installato ! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ Il plugin HighlightCodeSyntax NON è installato !',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ ATTENZIONE che le tue impostazioni attuali CONFLITTO o OVERRIDE la funzionalità del plugin MarkdownPlus !',
);
