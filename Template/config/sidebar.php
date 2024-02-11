<li <?= $this->app->checkMenuSelection('ConfigController', 'show', 'WysiwygMDEditor')
      . $this->app->checkMenuSelection('ConfigController', 'preview', 'WysiwygMDEditor') ?>>
    <?= $this->url->link(t('WysiwygMDEditor_NAME'), 'ConfigController', 'show', array('plugin' => 'WysiwygMDEditor')) ?>
</li>
