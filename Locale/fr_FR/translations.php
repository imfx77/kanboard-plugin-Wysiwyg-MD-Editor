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
    // Template/config/settings/common
    //
    'WysiwygMDEditor_SETTINGS_ENABLE_BUTTON' => 'Activer un bouton pour',
    'WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY' => 'Voir les détails ...',
    'WysiwygMDEditor_SETTINGS_DESCR' => 'Ce plugin intègre des sélecteurs de symboles et des éditeurs MD externes sous forme de boutons supplémentaires dans la barre d\'outils de la vue d\édition.',
    //
    // Template/config/settings/symbol-pickers
    //
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_OPTIONS' => 'Configurer les options du sélecteur de symboles',
    'WysiwygMDEditor_SETTINGS_SYMBOLPICKER_DESCR' => 'Choisissez les sélecteurs de symboles à utiliser.
* L\'activation d\'un sélecteur de symboles injectera un bouton correspondant dans la barre d\'outils d\'édition de chaque zone de texte markdown.
* Les sélecteurs s\'ouvrent mutuellement, en mode superposition transparent plein écran (ou modal), de sorte qu\'il n\'y en a qu\'un seul actif à la fois.
* Tous les sélecteurs peuvent être déplacés, il est pratique de les déplacer afin de voir le contenu en dessous.',
    'WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR' => 'Un sélecteur d\'emoji JavaScript vanille entièrement hors ligne.
* ⚠ Les émoticônes ne sont **PAS** basées sur des images mais sont plutôt des symboles Unicode, leur apparence dépend donc du navigateur et de la plateforme !
* A des catégories et une recherche.
* Superpose la zone de texte d\'édition et peut être déplacée.
* Cliquer sur les icônes emoji insère et remplace la sélection de texte actuelle.',
    'WysiwygMDEditor_SETTINGS_EMOJIFONT_ENABLE' => 'Imposer l\'utilisation de la police Emoji interne',
    'WysiwygMDEditor_SETTINGS_EMOJIFONT_DESCR' => 'Le plugin fournit une police Emoji explicite (basée sur Mozilla Twemoji) si nécessaire pour remplacer les présentations d\'emoji existantes.
* Son utilisation garantira que les emojis auront la même apparence dans tous les navigateurs sur toutes les plateformes.
* De plus, aucun emoji ne sera manquant ou mal affiché en raison de versions incomplètes ou anciennes des polices fournies par le navigateur ou le système.
* ⚠ D\'autre part, comme cette option remplacera la chaîne de priorité des polices par défaut, les textes sur les pages de la base de connaissances pourraient avoir un aspect différent !
* ⚠ Lorsqu\'elle est activée, la police sera utilisée dans toutes les pages normales, les vues d\'édition et de rendu d\'EasyMDE, quel que soit le paramètre du sélecteur d\'emoji !
* ⚠ La modification de cette option nécessite un rechargement explicite de la page pour prendre effet !',
    'WysiwygMDEditor_SETTINGS_FAICONSPICKER_DESCR' => 'Un sélecteur entièrement hors ligne pour les icônes `Font Awesome`, implémenté avec **jQuery**.
* ⚠ Le sélecteur est **UNIQUEMENT** compatible avec `Font Awesome 4.7.0`, c\'est la version utilisée par la dernière version de Kanboard !
* ⚠ Les icônes insérées sont en fait des balises `<i>`, donc pour qu\'elles s\'affichent correctement, le moteur de rendu MD que vous avez choisi doit autoriser le HTML brut !
* A une recherche.
* Superpose la zone de texte d\'édition et peut être déplacée.
* Cliquer sur les icônes Font Awesome insère et remplace la sélection de texte actuelle.',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurer les options d\'édition',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Choisissez les éditeurs MD à utiliser.
* L\'activation d\'un éditeur injectera un bouton correspondant dans la barre d\'outils d\'édition de chaque zone de texte markdown.
* Tous les éditeurs s\'ouvrent indépendamment les uns des autres en mode superposition plein écran afin de ne pas gâcher l\'interface utilisateur de Kanboard.
* La langue réelle de l\'interface utilisateur des éditeurs est fixe (soit **anglais**, soit **chinois**), et **`aucune traduction`** n\'est disponible pour eux.',
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
    'WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION' => '⚠️Version anglaise !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION' => '⚠️Version chinoise !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un éditeur de démarques basé sur un service en ligne et un outil de prise de notes.
* Couvre une large gamme de variations de syntaxe **MD** mais configuré pour se conformer à **GFM**.
* Prend en charge l\'aperçu latéral et plusieurs outils.
* ⚠ Thème lumineux de base uniquement !
* Prend en charge la mise en évidence de la syntaxe du code pour une myriade de langues.
* Prend entièrement en charge la syntaxe emoji et également la saisie via les raccourcis du système d\'exploitation (par exemple « **Windows + .** » sur Windows ou « **Control + Command + Space** » sur Mac).
* Il existe des fonctionnalités supplémentaires telles que les expressions mathématiques **KaTeX**, les diagrammes UML **Mermaid** et d\'autres extensions qui sont
pris en charge par défaut **`MAIS NE SONT PAS COMPATIBLE`** avec l\'ensemble de fonctionnalités standard **MD** pris en charge par Kanboard !',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR' => 'Ajoute des thèmes et des personnalisations en plus des fonctionnalités standard **StackEdit**.
* Commutateur de base pour le thème `clair` / `sombre`, il existe plusieurs thèmes colorés via des options pour chaque volet - édition et aperçu.
* Les préférences sélectionnées sont mémorisées localement par le navigateur, à la réouverture de l\'éditeur, la dernière vue sera restaurée.
* Prise en charge du téléchargement, du glisser-coller d\'images **`MAIS ATTENTION`** celles-ci utilisent le stockage du navigateur local, pas la base de données Kanboard!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurer les options de rendu',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Choisissez si vous souhaitez utiliser le rendu personnalisé pour les champs de démarque.
* La fonctionnalité de rendu est entièrement implémentée côté client, elle utilise JavaScript et utilise une visualisation d\'éditeur spécifique.
* Tous les champs de démarque de la page seront traités, y compris ceux qui sont créés ou modifiés dynamiquement. Le chargement de la page peut être un peu lent s\'il y en a beaucoup.
* <span style="border-bottom: 2px solid red; padding: 2px">⚠ Si le plug-in **`MarkdownPlus`** est installé, l\'activation de cette fonctionnalité de rendu **`CONFLIT ou OVERRIDE`** sera Fonctionnalité,
selon l\'ordre dans lequel les plugins sont chargés !</span>  
⚠️ Alors, **décidez** lequel vous préférez utiliser !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Activer le rendu markdown avec EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Les champs de démarque rendus ressembleront au volet d\'aperçu de l\'éditeur EasyMDE.
* Le thème de rendu est configuré indépendamment du thème sélectionné pour l\'éditeur EasyMDE.
* De plus, l\'arrière-plan du thème peut être forcé à être transparent.
* Et enfin, la syntaxe du code de surbrillance peut être modifiée ou désactivée (dans l\'éditeur EasyMDE actuel, elle est fixée à `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Sélectionner le thème pour le rendu markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Forcer l\'arrière-plan transparent',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Sélectionnez la syntaxe du code de surbrillance pour le rendu markdown :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'Ne PAS utiliser la syntaxe du code de surbrillance',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Utiliser Highlight.js (inclus avec EasyMDE )',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Utiliser le plugin HighlightCodeSyntax ( ⚠️ uniquement s\'il est installé ! )',
    //
    // Warnings
    //
    'WysiwygMDEditor_WARNING_HLCS_PLUGIN_NOT_INSTALLED' => '⚠️ Le plugin HighlightCodeSyntax n\'est PAS installé !',
    'WysiwygMDEditor_WARNING_MDPLUS_PLUGIN_OVERRIDE_CONFLICT' => '⚠️ SOYEZ CONSCIENT que vos paramètres actuels CONFLIT ou OVERRIDE la fonctionnalité du plugin MarkdownPlus !',
);
