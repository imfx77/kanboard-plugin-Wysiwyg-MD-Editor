<div class="page-header">
    <h2><?= t('WysiwygMDEditor_TITLE_SETTINGS') ?></h2>
</div>

<?= $this->url->icon('desktop', t('WysiwygMDEditor_LINK_SETTINGS_PREVIEW'), 'ConfigController', 'preview', array('plugin' => 'WysiwygMDEditor')) ?>

<form method="post" action="<?= $this->url->href('ConfigController', 'save', array('plugin' => 'WysiwygMDEditor')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <?= $this->modal->submitButtons() ?>
</form>
