/**
 * @author  Im[F(x)]
 */

function WysiwygMDEditor_injectButtonWrapperStackEdit() {

    $('.text-editor-write-mode').each(function() {
        // check if button already injected
        if (this.querySelector('.stackedit-button-wrapper')) return;

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'stackedit-button-wrapper';
        buttonWrapper.style = 'margin: 0px 0px 0px 20px; cursor: pointer;';
        buttonWrapper.title = 'Edit with StackEdit';
        buttonWrapper.innerHTML = '<img height="24" width="24" style="vertical-align: bottom" '
                                + 'src="'+ _WysiwygMDEditor_BaseAppDir_.baseAppDir +'plugins/WysiwygMDEditor/Assets/stackedit/icon.svg">';

        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        const textareaElement = this.querySelector('textarea');

        let shouldInvalidateModal = (KB.modal.getForm()) ? true : false;

        $( buttonWrapper ).click(function() {
            const stackedit = new Stackedit({ url: 'https://stackedit.io/app' }); // redirect to StackEdit

            stackedit.on('fileChange', function onFileChange(file) {
                // if textarea is in a modal form that needs invalidation
                if (shouldInvalidateModal) {
                    const modalForm = KB.modal.getForm();
                    if (modalForm) {
                        modalForm.dispatchEvent(new Event('change'));
                        shouldInvalidateModal = false; // once is enough!
                    }
                }

                textareaElement.value = file.content.text;
            });

            stackedit.openFile({
                name: 'Markdown with StackEdit',
                content: {
                    text: textareaElement.value,
                    properties: {
                        extensions: {
                            preset: 'default',
                            markdown: {
                                breaks: false
                            }
                        }
                    }
                }
            });

        });

    });

}

$(function() {
    WysiwygMDEditor_injectButtonWrapperStackEdit();

    const observerStackEdit = new MutationObserver(function() {
        WysiwygMDEditor_injectButtonWrapperStackEdit();
    });
    observerStackEdit.observe(document, { subtree: true, childList: true });
});
