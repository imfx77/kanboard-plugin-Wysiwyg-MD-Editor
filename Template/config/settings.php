<style>
.fieldset-WysiwygMDEditor {border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;}
.fieldset-WysiwygMDEditor legend {cursor: pointer;}
.fieldset-accordion-show {opacity: 1; max-height: 5000px; transition: .3s ease-in-out;}
.fieldset-accordion-hide {opacity: 0; max-height: 0; overflow: hidden; transition: .3s ease-in-out;}
.icon-WysiwygMDEditor {border: none; padding-right: 10px; padding-left: 10px;}
.descr-WysiwygMDEditor {border: none; width: 100%; padding-left: 10px;}
details summary {cursor: pointer;}
</style>

<?= $this->asset->js('plugins/WysiwygMDEditor/Assets/settings.js') ?>

<div class="page-header">
    <h2><?= t('WysiwygMDEditor_TITLE_SETTINGS') ?></h2>
</div>

<?= $this->url->icon('desktop', t('WysiwygMDEditor_LINK_SETTINGS_PREVIEW'), 'WysiwygMDEditorConfigController', 'preview', array('plugin' => 'WysiwygMDEditor')) ?>

<form method="post" action="<?= $this->url->href('WysiwygMDEditorConfigController', 'save', array('plugin' => 'WysiwygMDEditor')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <div class="descr-WysiwygMDEditor markdown"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_DESCR')) ?></div>
    <div class="icon-WysiwygMDEditor"><img src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Screenshots/textarea-editing-toolbar-injected-buttons.png"></div>

    <!-------------------------------------------------------------------------------------------------------->
    <!-- SYMBOL PICKER OPTIONS -->
    <fieldset class="fieldset-WysiwygMDEditor">
        <legend>&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>&nbsp;&nbsp;<?= t('WysiwygMDEditor_SETTINGS_SYMBOLPICKER_OPTIONS') ?>&nbsp;</legend>
        <div class="fieldset-WysiwygMDEditor-container fieldset-accordion-hide">
        <div class="descr-WysiwygMDEditor markdown"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_SYMBOLPICKER_DESCR')) ?></div>

        <!---------------------------------->
        <!-- EMOJI PICKER -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_emojipicker',
                t('WysiwygMDEditor_SETTINGS_ENABLE_BUTTON') . ' Emoji Picker ',
                1,
                isset($values['WysiwygMDEditor_enable_emojipicker']) ? $values['WysiwygMDEditor_enable_emojipicker'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <div style="font-size: 2em">😀</div>
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/woody180/vanilla-javascript-emoji-picker" target="_blank" title="<?= t('Opens in a new window') ?>"> Emoji Picker <i class="fa fa-external-link"></i></a>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_EMOJIPICKER_DESCR')) ?></div>
                    </details>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <!---------------------------------->
        <!-- FAICONS PICKER -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_faiconspicker',
                t('WysiwygMDEditor_SETTINGS_ENABLE_BUTTON') . ' Font Awesome Icons Picker ',
                1,
                isset($values['WysiwygMDEditor_enable_faiconspicker']) ? $values['WysiwygMDEditor_enable_faiconspicker'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <div style="font-size: 3em"><i class="fa fa-font-awesome" aria-hidden="true"></i></div>
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/aumkarthakur/simple-fontawesome-iconpicker" target="_blank" title="<?= t('Opens in a new window') ?>"> Font Awesome Icons Picker <i class="fa fa-external-link"></i></a>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_FAICONSPICKER_DESCR')) ?></div>
                    </details>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <?= $this->modal->submitButtons() ?>
        </div>
    </fieldset>
    <!-------------------------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------------------------->
    <!-- EDITING OPTIONS -->
    <fieldset class="fieldset-WysiwygMDEditor">
        <legend>&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>&nbsp;&nbsp;<?= t('WysiwygMDEditor_SETTINGS_EDITING_OPTIONS') ?>&nbsp;</legend>
        <div class="fieldset-WysiwygMDEditor-container fieldset-accordion-hide">
        <div class="descr-WysiwygMDEditor markdown"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_EDITING_DESCR')) ?></div>

        <!---------------------------------->
        <!-- EASYMDE -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_easymde',
                t('WysiwygMDEditor_SETTINGS_ENABLE_BUTTON') . ' EasyMDE ',
                1,
                isset($values['WysiwygMDEditor_enable_easymde']) ? $values['WysiwygMDEditor_enable_easymde'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/easymde/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" title="<?= t('Opens in a new window') ?>"> EasyMDE <i class="fa fa-external-link"></i></a>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_EASYMDE_DESCR')) ?></div>
                    </details>

                    <?php
                    if (!isset($values['WysiwygMDEditor_easymde_default_theme'])) {
                        $values['WysiwygMDEditor_easymde_default_theme'] = 'dimmed';
                    }
                    ?>

                    <?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT'), 'WysiwygMDEditor_easymde_default_theme') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_default_theme', array(
                        'light'  => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT'),
                        'dimmed' => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED'),
                        'dark'   => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK'),
                    ), $values) ?>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <!---------------------------------->
        <!-- STACKEDIT -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_stackedit',
                t('WysiwygMDEditor_SETTINGS_ENABLE_BUTTON') . ' StackEdit ',
                1,
                isset($values['WysiwygMDEditor_enable_stackedit']) ? $values['WysiwygMDEditor_enable_stackedit'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/stackedit/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/benweet/stackedit" target="_blank" title="<?= t('Opens in a new window') ?>"> StackEdit <i class="fa fa-external-link"></i></a>
                    <b> <?= t('WysiwygMDEditor_SETTINGS_STACKEDIT_ENGLISH_VERSION') ?> </b>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR')) ?></div>
                    </details>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <!---------------------------------->
        <!-- STACKEDIT PLUS -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_stackedit_plus',
                t('WysiwygMDEditor_SETTINGS_ENABLE_BUTTON') . ' StackEdit+ ',
                1,
                isset($values['WysiwygMDEditor_enable_stackedit_plus']) ? $values['WysiwygMDEditor_enable_stackedit_plus'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/stackedit-plus/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/mafgwo/stackedit-plus" target="_blank" title="<?= t('Opens in a new window') ?>"> StackEdit+ <i class="fa fa-external-link"></i></a>
                    <b> <?= t('WysiwygMDEditor_SETTINGS_STACKEDIT_CHINESE_VERSION') ?> </b>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_STACKEDIT_PLUS_DESCR')) ?></div>
                    </details>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <?= $this->modal->submitButtons() ?>
        </div>
    </fieldset>
    <!-------------------------------------------------------------------------------------------------------->

    <!-------------------------------------------------------------------------------------------------------->
    <!-- RENDERING OPTIONS -->
    <fieldset class="fieldset-WysiwygMDEditor">
        <legend>&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i>&nbsp;&nbsp;<?= t('WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS') ?>&nbsp;</legend>
        <div class="fieldset-WysiwygMDEditor-container fieldset-accordion-hide">
        <div class="descr-WysiwygMDEditor markdown"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_RENDERING_DESCR')) ?></h3></div>

        <!---------------------------------->
        <!-- EASYMDE -->
        <div>
            <?= $this->form->checkbox(
                'WysiwygMDEditor_enable_easymde_rendering',
                t('WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE'),
                1,
                isset($values['WysiwygMDEditor_enable_easymde_rendering']) ? $values['WysiwygMDEditor_enable_easymde_rendering'] == 1 : 0
            ) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/easymde/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor markdown">
                    <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" title="<?= t('Opens in a new window') ?>"> EasyMDE <i class="fa fa-external-link"></i></a>
                    <br>
                    <details>
                    <summary><?= t('WysiwygMDEditor_SETTINGS_DETAILS_SUMMARY') ?></summary>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR')) ?></div>
                    </details>

                    <?php
                    if (!isset($values['WysiwygMDEditor_easymde_render_theme'])) {
                        $values['WysiwygMDEditor_easymde_render_theme'] = 'dimmed';
                    }
                    ?>

                    <?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT'), 'WysiwygMDEditor_easymde_render_theme') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_render_theme', array(
                        'light'  => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT'),
                        'dimmed' => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED'),
                        'dark'   => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK'),
                    ), $values) ?>

                    <br><?= $this->form->checkbox(
                        'WysiwygMDEditor_easymde_render_transparent_background',
                        t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE'),
                        1,
                        isset($values['WysiwygMDEditor_easymde_render_transparent_background']) ? $values['WysiwygMDEditor_easymde_render_transparent_background'] == 1 : 0
                    ) ?>

                    <?php
                    if (!isset($values['WysiwygMDEditor_easymde_render_code_highlight'])) {
                        $values['WysiwygMDEditor_easymde_render_code_highlight'] = 1;
                    }
                    ?>

                    <br><?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT'), 'WysiwygMDEditor_easymde_render_code_highlight') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_render_code_highlight', array(
                        0 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE'),
                        1 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS'),
                        2 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN'),
                    ), $values) ?>
                </td>
            </tr></table>
        </div>
        <!---------------------------------->

        <?= $this->modal->submitButtons() ?>
        </div>
    </fieldset>
    <!-------------------------------------------------------------------------------------------------------->

</form>
