<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Intègre des éditeurs MD externes dans Kanboard afin de facilement éditer et prévisualiser
                                         les zones de texte de démarque, ainsi que le rendu des champs de démarque dans l\'interface Kanboard.
                                         Chaque éditeur peut permettre différentes personnalisations de fonctionnalités, de fonctionnalités MD et de thèmes d\'interface utilisateur.
                                         Le rendu peut paramétrer le thème, la surbrillance du code et la transparence de l\'arrière-plan.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Paramètres de l\'éditeur Wysiwyg MD',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Aperçu de l\'éditeur Wysiwyg MD',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Aperçu avec paramètres enregistrés',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Modifier les paramètres',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Conteneur d\'aperçu',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurer les options d\'édition',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Choisissez les éditeurs MD à utiliser.
* L\'activation d\'un éditeur injectera un bouton correspondant dans la barre d\'outils d\'édition de chaque zone de texte markdown.
* Tous les éditeurs s\'ouvrent indépendamment les uns des autres en mode superposition plein écran afin de ne pas gâcher l\'interface utilisateur de Kanboard.
* L\'interface utilisateur actuelle des éditeurs est en **anglais**, **`aucune traduction`** n\'est disponible pour eux.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Activer un bouton pour',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un éditeur de démarques JavaScript entièrement hors ligne.
* Configuré pour couvrir toutes les fonctionnalités de syntaxe **MD** et d\'aperçu **Compatible GFM**.
* Prend en charge l\'aperçu latéral et dispose d\'une barre d\'édition personnalisée avec plusieurs outils.
* Fourni avec trois thèmes : `clair`, `grisé` et `sombre`.
* Implémente la mise en évidence de la syntaxe du code via **Highlight.js** pour environ 40 langages les plus courants.
* **`Pas de support`** pour le téléchargement, le glisser-coller d\'images; les images sont **uniquement** disponibles via des URL.
* **`Pas de support`** pour la syntaxe emoji; saisie des emojis **uniquement** via les raccourcis du système d\'exploitation (par exemple « **Windows + .** » sur Windows ou « **Contrôle + Commande + Espace** » sur Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Sélectionnez le thème par défaut pour EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Thème clair',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Thème grisé',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Thème sombre',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un éditeur de démarques basé sur un service en ligne et un outil de prise de notes.
* Couvre une large gamme de variations de syntaxe **MD** mais configuré pour se conformer à **GFM**.
* Prend en charge l\'aperçu latéral, plusieurs outils, des options riches et des personnalisations.
* Commutateur de base pour le thème `clair` / `sombre`, il existe plusieurs thèmes colorés via des options pour chaque volet - édition et aperçu.
* Les préférences sélectionnées sont mémorisées localement par le navigateur, à la réouverture de l\'éditeur, la dernière vue sera restaurée.
* Prend en charge la mise en évidence de la syntaxe du code pour une myriade de langues.
* Prise en charge du téléchargement, du glisser-coller d\'images **`MAIS ATTENTION`** celles-ci utilisent le stockage du navigateur local, pas la base de données Kanboard!
* Prend entièrement en charge la syntaxe emoji et également la saisie via les raccourcis du système d\'exploitation (par exemple « **Windows + .** » sur Windows ou « **Control + Command + Space** » sur Mac).
* Il existe des fonctionnalités supplémentaires telles que les expressions mathématiques **KaTeX**, les diagrammes UML **Mermaid** et d\'autres extensions qui sont
pris en charge par défaut **`MAIS NE SONT PAS COMPATIBLE`** avec l\'ensemble de fonctionnalités standard **MD** pris en charge par Kanboard !',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurer les options de rendu',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Choisissez si vous souhaitez utiliser le rendu personnalisé pour les champs de démarque.
* La fonctionnalité de rendu est entièrement implémentée côté client, elle utilise JavaScript et utilise une visualisation d\'éditeur spécifique.
* Tous les champs de démarque de la page seront traités, y compris ceux qui sont créés ou modifiés dynamiquement. Le chargement de la page peut être un peu lent s\'il y en a beaucoup.
* <span style="border-bottom: 2px solid red; padding: 2px">Si le plug-in **`MarkdownPlus`** est installé, l\'activation de cette fonctionnalité de rendu **`CONFLIT ou OVERRIDE`** sera Fonctionnalité,
selon l\'ordre dans lequel les plugins sont chargés !</span><br>⚠️ Alors, **décidez** lequel vous préférez utiliser !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Activer le rendu markdown avec EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Les champs de démarque rendus ressembleront au volet d\'aperçu de l\'éditeur EasyMDE.
* Le thème de rendu peut être configuré indépendamment du thème sélectionné pour l\'éditeur EasyMDE.
* De plus, l\'arrière-plan du thème peut être forcé à être transparent.
* Et enfin, la syntaxe du code de surbrillance peut être modifiée ou désactivée (dans l\'éditeur EasyMDE actuel, elle est fixée à `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Sélectionner le thème pour le rendu markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Forcer l\'arrière-plan transparent',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Sélectionnez la syntaxe du code de surbrillance pour le rendu markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'Ne PAS utiliser la syntaxe du code de surbrillance',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Utiliser Highlight.js (inclus avec EasyMDE )',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Utiliser le plugin HighlightCodeSyntax ( ⚠️ uniquement s\'il est installé ! )',
);
