<li <?= $this->app->checkMenuSelection('WysiwygMDEditorConfigController', 'show', 'WysiwygMDEditor')
      . $this->app->checkMenuSelection('WysiwygMDEditorConfigController', 'preview', 'WysiwygMDEditor') ?>>
    <?= $this->url->link(t('Wysiwyg MD Editor'), 'WysiwygMDEditorConfigController', 'show', array('plugin' => 'WysiwygMDEditor')) ?>
</li>
