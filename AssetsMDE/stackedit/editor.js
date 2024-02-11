$(function() {

    $('.text-editor-write-mode').each(function() {
        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'stackedit-button-wrapper';
        buttonWrapper.title = 'Edit with StackEdit+';
        buttonWrapper.innerHTML = '<img height="24" width="24" src="'+ location.origin +'/plugins/WysiwygMDEditor/AssetsMDE/stackedit/icon.svg">';

        const textareaElement = this.querySelector('textarea');
        textareaElement.parentNode.insertBefore(buttonWrapper, textareaElement.nextSibling);

        $( buttonWrapper ).click(function() {
            const stackedit = new Stackedit({ url: 'https://stackedit.net/app' }); // redirect to StackEdit+

            stackedit.on('fileChange', function onFileChange(file) {
              textareaElement.value = file.content.text;
            });

            stackedit.openFile({
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

});