<style>
.fieldset-WysiwygMDEditor {border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;}
.icon-WysiwygMDEditor {border: none; padding-right: 10px; padding-left: 30px;}
.descr-WysiwygMDEditor {border: none; width: 100%;}
</style>

<div class="page-header">
    <h2><?= t('WysiwygMDEditor_TITLE_SETTINGS') ?></h2>
</div>

<?= $this->url->icon('desktop', t('WysiwygMDEditor_LINK_SETTINGS_PREVIEW'), 'ConfigController', 'preview', array('plugin' => 'WysiwygMDEditor')) ?>

<form method="post" action="<?= $this->url->href('ConfigController', 'save', array('plugin' => 'WysiwygMDEditor')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <?= $this->modal->submitButtons() ?>
    <fieldset class="fieldset-WysiwygMDEditor">
        <legend><?= t('WysiwygMDEditor_SETTINGS_EDITING_OPTIONS') ?></legend>
        <div><?= t('WysiwygMDEditor_SETTINGS_EDITING_DESCR') ?></div>
        <br>
        <div class="icon-WysiwygMDEditor"><img src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Screenshots/textarea-editing-toolbar-injected-buttons.png"></div>

        <div>
            <?= $this->form->checkbox('WysiwygMDEditor_enable_easymde', t('WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON').' EasyMDE ',
             1, isset($values['WysiwygMDEditor_enable_easymde']) ? $values['WysiwygMDEditor_enable_easymde'] == 1 : 0) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/easymde/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor">
                    <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" title="<?= t('Opens in a new window') ?>"> EasyMDE <i class="fa fa-external-link"></i></a>
                    <br><?= t('WysiwygMDEditor_SETTINGS_EASYMDE_DESCR') ?>
                </td>
            </tr></table>
        </div>

        <div>
            <?= $this->form->checkbox('WysiwygMDEditor_enable_stackedit', t('WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON').' StackEdit+ ',
             1, isset($values['WysiwygMDEditor_enable_stackedit']) ? $values['WysiwygMDEditor_enable_stackedit'] == 1 : 0) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/stackedit/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor">
                    <a href="https://github.com/mafgwo/stackedit-plus" target="_blank" title="<?= t('Opens in a new window') ?>"> StackEdit+ <i class="fa fa-external-link"></i></a>
                    <br><?= t('WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR') ?>
                </td>
            </tr></table>
        </div>

        <?= $this->modal->submitButtons() ?>
    </fieldset>

    <fieldset class="fieldset-WysiwygMDEditor">
        <legend><?= t('WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS') ?></legend>
        <div><?= t('WysiwygMDEditor_SETTINGS_RENDERING_DESCR') ?></h3><div>

        <?= $this->modal->submitButtons() ?>
    </fieldset>

</form>
