<?php

return array(
    //
    // GENERAL
    //
     'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editores MD externos ao Kanboard para editar/visualizar convenientemente
                                             (e eventualmente renderizar) as áreas de texto de marcação na interface Kanboard.
                                             Cada editor pode permitir diferentes personalizações de funcionalidade, recursos de MD e temas de UI.',
    //
    // Template/config/settings
    //
     'WysiwygMDEditor_TITLE_SETTINGS' => 'Configurações do editor Wysiwyg MD',
     'WysiwygMDEditor_TITLE_PREVIEW' => 'Pré-visualização do Wysiwyg MD Editor',
     'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Visualização com configurações salvas',
     'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Alterar configurações',
     'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Contêiner de visualização',
     'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurar opções de edição',
     'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Escolha quais editores MD usar.
                                                 Habilitar um editor injetará um botão correspondente na barra de ferramentas de edição de cada área de texto de marcação.
                                                 Todos os editores abrem independentemente uns dos outros em modo de sobreposição de tela inteira para que não mexam na IU do Kanboard.
                                                 A interface real dos editores está em inglês, não há traduções disponíveis para eles.',
     'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Ativar um botão para',
     'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Um editor de markdown JavaScript totalmente offline.
                                                 Configurado para cobrir toda a sintaxe MD e recursos de visualização compatíveis com GFM.
                                                 Suporta visualização lateral e possui barra de edição personalizada com múltiplas ferramentas.
                                                 Fornecido com três temas: claro, esmaecido e escuro.
                                                 Implementa destaque de sintaxe de código por meio de HighlightJS para cerca de 40 linguagens mais comuns.
                                                 Não há suporte para upload, arrastar ou colar imagens, apenas através de URLs.
                                                 Não há suporte para sintaxe de emoji, apenas através de atalhos de emoji do sistema operacional (por exemplo, «WIN +.»).',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Selecione o tema padrão para EasyMDE:',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema claro',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema esmaecido',
     'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema escuro',
     'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Um editor de descontos baseado em serviço online e uma ferramenta de anotações.
                                                 Abrange uma ampla gama de variações de sintaxe MD, mas configurada para estar em conformidade com GFM.
                                                 Suporta visualização lateral, várias ferramentas, opções avançadas e personalizações.
                                                 Mudança básica para tema claro/escuro, existem vários temas coloridos por meio de opções para cada painel - edição ou visualização.
                                                 As preferências selecionadas são lembradas localmente pelo navegador; ao reabrir o editor, a última visualização será restaurada.
                                                 Suporta realce de sintaxe de código para uma infinidade de idiomas.
                                                 Suporte para upload, arrastar e colar imagens, MAS ESTEJA CIENTE de que elas estão usando o armazenamento local do navegador, não o banco de dados Kanboard!
                                                 Suporta totalmente sintaxe de emoji e entrada por meio de atalhos de emoji do sistema operacional (por exemplo, «WIN +.»).
                                                 Existem recursos extras, como expressões matemáticas KaTeX, diagramas Mermaid UML e outras extensões que são
                                                 suportados por padrão, MAS NÃO SÃO COMPATÍVEIS com o conjunto de recursos MD padrão suportado pelo Kanboard!',
     'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurar opções de renderização',
     'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => '(TODO)',
);
