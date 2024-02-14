<li <?= $this->app->checkMenuSelection('WysiwygMDEditorConfigController', 'show', 'WysiwygMDEditor')
      . $this->app->checkMenuSelection('WysiwygMDEditorConfigController', 'preview', 'WysiwygMDEditor') ?>>
    <?= $this->url->link(t('WysiwygMDEditor_NAME'), 'WysiwygMDEditorConfigController', 'show', array('plugin' => 'WysiwygMDEditor')) ?>
</li>
