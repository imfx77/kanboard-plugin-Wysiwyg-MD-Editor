/**
 * @author  Im[F(x)]
 */

function injectButtonWrapperStackEdit() {

    $('.text-editor-write-mode').each(function() {
        // check if button already injected
        if (this.querySelector('.stackedit-button-wrapper')) return;

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'stackedit-button-wrapper';
        buttonWrapper.style = 'margin: 0px 0px 0px 20px; cursor: pointer;';
        buttonWrapper.title = 'Edit with StackEdit';
        buttonWrapper.innerHTML = '<img height="24" width="24" style="vertical-align: bottom" '
                                + 'src="'+ location.origin +'/plugins/WysiwygMDEditor/Assets/stackedit/icon.svg">';

        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        const textareaElement = this.querySelector('textarea');

        $( buttonWrapper ).click(function() {
            const stackedit = new Stackedit({ url: 'https://stackedit.io/app' }); // redirect to StackEdit

            stackedit.on('fileChange', function onFileChange(file) {
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
    injectButtonWrapperStackEdit();

    const observerStackEdit = new MutationObserver(function() {
        injectButtonWrapperStackEdit();
    });
    observerStackEdit.observe(document, { subtree: true, childList: true });
});
