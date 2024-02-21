<?php

return array(
    //
    // GENERAL
    //
     'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Intègre des éditeurs MD externes dans Kanboard afin de facilement éditer/prévisualiser
                                             (et éventuellement restituer) les zones de texte markdown dans l\'interface Kanboard.
                                             Chaque éditeur peut permettre différentes personnalisations de fonctionnalités, de fonctionnalités MD et de thèmes d\'interface utilisateur.',
    //
    // Template/config/settings
    //
     'WysiwygMDEditor_TITLE_SETTINGS' => 'Paramètres de l\'éditeur Wysiwyg MD',
     'WysiwygMDEditor_TITLE_PREVIEW' => 'Aperçu de l\'éditeur Wysiwyg MD',
     'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Aperçu avec paramètres enregistrés',
     'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Modifier les paramètres',
     'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Conteneur d\'aperçu',
     'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurer les options d\'édition',
     'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Choisissez les éditeurs MD à utiliser.
                                                 L\'activation d\'un éditeur injectera un bouton correspondant dans la barre d\'outils d\'édition de chaque zone de texte markdown.
                                                 Tous les éditeurs s\'ouvrent indépendamment les uns des autres en mode superposition plein écran afin de ne pas gâcher l\'interface utilisateur de Kanboard.
                                                 L\'interface utilisateur actuelle des éditeurs est en anglais, aucune traduction n\'est disponible pour eux.',
     'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Activer un bouton pour',
     'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Un éditeur de démarques JavaScript entièrement hors ligne.
                                                 Configuré pour couvrir toutes les syntaxes MD et les fonctionnalités d\'aperçu compatibles GFM.
                                                 Prend en charge l\'aperçu latéral et dispose d\'une barre d\'édition personnalisée avec plusieurs outils.
                                                 Livré avec trois thèmes : clair, tamisé et sombre.
                                                 Implémente la mise en évidence de la syntaxe du code via HighlightJS pour environ 40 langages les plus courants.
                                                 Aucune prise en charge du téléchargement, du glisser-coller d\'images, uniquement via les URL.
                                                 Pas de prise en charge de la syntaxe emoji, uniquement via les raccourcis emoji du système d\'exploitation (par exemple «WIN + .»).',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Sélectionnez le thème par défaut pour EasyMDE :',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Thème clair',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Thème grisé',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Thème sombre',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Un éditeur de démarques basé sur un service en ligne et un outil de prise de notes.
                                                 Couvre un large éventail de variations de syntaxe MD mais configuré pour se conformer à GFM.
                                                 Prend en charge l\'aperçu latéral, plusieurs outils, des options riches et des personnalisations.
                                                 Commutateur de base pour le thème clair/sombre, il existe plusieurs thèmes colorés via des options pour chaque volet - édition ou aperçu.
                                                 Les préférences sélectionnées sont mémorisées localement par le navigateur, à la réouverture de l\'éditeur, la dernière vue sera restaurée.
                                                 Prend en charge la mise en évidence de la syntaxe du code pour une myriade de langues.
                                                 Prise en charge du téléchargement, du glisser-coller des images MAIS ATTENTION, ceux-ci utilisent le stockage du navigateur local, pas la base de données Kanboard!
                                                 Prend entièrement en charge la syntaxe emoji et la saisie via les raccourcis emoji du système d\'exploitation (par exemple «WIN + .»).
                                                 Il existe des fonctionnalités supplémentaires telles que les expressions mathématiques KaTeX, les diagrammes Mermaid UML et d\'autres extensions qui sont
                                                 pris en charge par défaut MAIS NE SONT PAS COMPATIBLES avec l\'ensemble de fonctionnalités MD standard pris en charge par Kanboard!',
     'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurer les options de rendu',
     'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(TODO)',
);
