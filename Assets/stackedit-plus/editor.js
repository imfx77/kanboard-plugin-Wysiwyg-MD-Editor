/**
 * @author  Im[F(x)]
 */

function injectButtonWrapperStackEditPlus() {

    $('.text-editor-write-mode').each(function() {
        // check if button already injected
        if (this.querySelector('.stackeditplus-button-wrapper')) return;

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'stackeditplus-button-wrapper';
        buttonWrapper.style = 'margin: 0px 0px 0px 20px; cursor: pointer;';
        buttonWrapper.title = 'Edit with StackEdit+';
        buttonWrapper.innerHTML = '<img height="24" width="24" style="vertical-align: bottom" '
                                + 'src="'+ location.origin +'/plugins/WysiwygMDEditor/Assets/stackedit-plus/icon.svg">';

        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        const textareaElement = this.querySelector('textarea');

        let shouldInvalidateModal = (KB.modal.getForm()) ? true : false;

        $( buttonWrapper ).click(function() {
            const stackeditPlus = new Stackedit({ url: 'https://stackedit.cn/app' }); // redirect to StackEdit+

            stackeditPlus.on('fileChange', function onFileChange(file) {
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

            stackeditPlus.openFile({
                name: 'Markdown with StackEdit+',
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
    injectButtonWrapperStackEditPlus();

    const observerStackEditPlus = new MutationObserver(function() {
        injectButtonWrapperStackEditPlus();
    });
    observerStackEditPlus.observe(document, { subtree: true, childList: true });
});
