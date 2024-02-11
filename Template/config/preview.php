<div class="page-header">
    <h2><?= t('WysiwygMDEditor_TITLE_PREVIEW') ?></h2>
</div>

<?= $this->url->icon('wrench', t('WysiwygMDEditor_LINK_SETTINGS_CHANGE'), 'ConfigController', 'show', array('plugin' => 'WysiwygMDEditor')) ?>

<form autocomplete="off">
    <br>
    <div><h3><?= t('WysiwygMDEditor_CONTAINER_PREVIEW') ?> #1</h3></div>
    <?= $this->form->textEditor('content-1', $values, $errors) ?>

    <br>
    <div><h3><?= t('WysiwygMDEditor_CONTAINER_PREVIEW') ?> #2</h3></div>
    <?= $this->form->textEditor('content-2', $values, $errors) ?>
</form>

<?php
print $this->asset->js('plugins/WysiwygMDEditor/AssetsMDE/stackedit/min.js');
print $this->asset->js('plugins/WysiwygMDEditor/AssetsMDE/stackedit/editor.js');
print $this->asset->js('plugins/WysiwygMDEditor/AssetsMDE/easymde/min.js');
print $this->asset->js('plugins/WysiwygMDEditor/AssetsMDE/easymde/editor.js');
print $this->asset->js('plugins/WysiwygMDEditor/AssetsMDE/highlight/min.js');
?>