<?php

return array(
    //
    // GENERAL
    //
    'WysiwygMDEditor_PLUGIN_DESCRIPTION' => 'Integra editores MD externos ao Kanboard para editar e visualizar convenientemente
                                         as áreas de texto de marcação, bem como renderizar os campos de marcação na interface Kanboard.
                                         Cada editor pode permitir diferentes personalizações de funcionalidade, recursos de MD e temas de UI.
                                         A renderização pode parametrizar o tema, o realce do código e a transparência do plano de fundo.',
    //
    // Template/config/settings
    //
    'WysiwygMDEditor_TITLE_SETTINGS' => 'Configurações do editor Wysiwyg MD',
    'WysiwygMDEditor_TITLE_PREVIEW' => 'Pré-visualização do Wysiwyg MD Editor',
    'WysiwygMDEditor_LINK_SETTINGS_PREVIEW' => 'Visualização com configurações salvas',
    'WysiwygMDEditor_LINK_SETTINGS_CHANGE' => 'Alterar configurações',
    'WysiwygMDEditor_CONTAINER_PREVIEW' => 'Contêiner de visualização',
    //
    // Template/config/settings/editing
    //
    'WysiwygMDEditor_SETTINGS_EDITING_OPTIONS' => 'Configurar opções de edição',
    'WysiwygMDEditor_SETTINGS_EDITING_DESCR' => 'Escolha quais editores MD usar.
* Habilitar um editor injetará um botão correspondente na barra de ferramentas de edição de cada área de texto de redução.
* Todos os editores abrem independentemente uns dos outros em modo de sobreposição de tela inteira para que não mexam na interface do Kanboard.
* A interface real dos editores está em **inglês**, **`nenhuma tradução`** está disponível para eles.',
    'WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON' => 'Ativar um botão para',
    'WysiwygMDEditor_SETTINGS_EASYMDE_DESCR' => 'Um editor de markdown JavaScript totalmente offline.
* Configurado para cobrir todos os recursos de sintaxe e visualização do **MD** compatível com **GFM**.
* Suporta visualização lateral e possui barra de edição personalizada com múltiplas ferramentas.
* Fornecido com três temas: `claro`, `esmaecido` e `escuro`.
* Implementa destaque de sintaxe de código por meio de **Highlight.js** para cerca de 40 linguagens mais comuns.
* **`Não há suporte`** para upload, arrastar ou colar imagens; as imagens **somente** estão disponíveis por meio de URLs.
* **`Sem suporte`** para sintaxe de emoji; entrada de emojis **apenas** por meio de atalhos do sistema operacional (por exemplo, « **Windows + .** » no Windows ou « **Control + Command + Espaço** » no Mac).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT' => 'Selecione o tema padrão para EasyMDE :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT' => 'Tema claro',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED' => 'Tema esmaecido',
    'WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK' => 'Tema escuro',
    'WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR' => 'Um editor de descontos baseado em serviço online e uma ferramenta de anotações.
* Abrange uma ampla variedade de variações de sintaxe do **MD**, mas configurada para estar em conformidade com o **GFM**.
* Suporta visualização lateral, múltiplas ferramentas, opções ricas e personalizações.
* Mudança básica para o tema `claro` / `escuro`, existem vários temas coloridos por meio de opções para cada painel - edição e visualização.
* As preferências selecionadas são lembradas localmente pelo navegador, ao reabrir o editor a última visualização será restaurada.
* Suporta realce de sintaxe de código para uma infinidade de idiomas.
* Suporte para upload, arrastar e colar imagens **`MAS ESTEJA CIENTE`** elas estão usando o armazenamento local do navegador, não o banco de dados Kanboard!
* Suporta totalmente a sintaxe de emoji e também a entrada por meio de atalhos do sistema operacional (por exemplo, « **Windows + .** » no Windows ou « **Control + Command + Espaço** » no Mac).
* Existem recursos extras como expressões matemáticas **KaTeX**, diagramas UML **Mermaid** e outras extensões que são
suportado por padrão **`MAS NÃO SÃO COMPATÍVEIS`** com o conjunto de recursos padrão **MD** que é suportado pelo Kanboard!',
    //
    // Template/config/settings/rendering
    //
    'WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS' => 'Configurar opções de renderização',
    'WysiwygMDEditor_SETTINGS_RENDERING_DESCR' => 'Escolha se deseja usar renderização personalizada para campos de redução.
* O recurso de renderização é implementado inteiramente no lado do cliente, usa JavaScript e utiliza uma visualização de editor específica.
* Todos os campos de markdown na página serão processados, incluindo aqueles que são criados ou alterados dinamicamente. O carregamento da página pode ser um pouco lento se houver muitos deles.
* <span style="border-bottom: 2px solid red; padding: 2px">Se você tiver o plug-in **`MarkdownPlus`** instalado, ativar esse recurso de renderização irá **`CONFLICTAR ou OVERRIDE`**. funcionalidade,
dependendo da ordem em que os plugins são carregados !</span><br>⚠ Então, **decida** qual você prefere usar !',
    'WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE' => 'Ativar renderização de markdown com EasyMDE',
    'WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR' => 'Os campos de markdown renderizados serão parecidos com o painel de visualização do editor EasyMDE.
* O tema de renderização pode ser configurado independentemente do tema selecionado para o editor EasyMDE.
* Além disso, o plano de fundo do tema pode ser forçado a ser transparente.
* E finalmente, a sintaxe do código de destaque pode ser alterada ou desabilitada (no editor EasyMDE real ela é fixada em `Highlight.js`).',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT' => 'Selecionar tema para renderização de redução :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE' => 'Forçar fundo transparente',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT' => 'Selecione a sintaxe do código de destaque para renderização de redução :',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE' => 'NÃO use sintaxe de código de destaque',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS' => 'Use Highlight.js (incluído junto com EasyMDE)',
    'WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN' => 'Use o plugin HighlightCodeSyntax ( ⚠ somente se instalado ! )',
);
