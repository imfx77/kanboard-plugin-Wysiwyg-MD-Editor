$(function() {
    const span = document.createElement('span');
    span.className = 'stackedit-button-wrapper';
    span.title = 'Edit with StackEdit+';
    span.innerHTML = '<img height="24" width="24" src="plugins/WysiwygMDEditor/AssetsMDE/stackedit/icon.svg">';

    const textareaEl = document.querySelector( "#txtarea-edit" );
    textareaEl.parentNode.insertBefore(span, textareaEl.nextSibling);

    $( ".stackedit-button-wrapper" ).click(function() {
        const stackedit = new Stackedit({ url: 'https://stackedit.net/app' }); // redirect to StackEdit+

        stackedit.on('fileChange', function onFileChange(file) {
          textareaEl.value = file.content.text;
        });

        stackedit.openFile({
          name: 'Markdown with StackEdit+',
          content: {
            text: textareaEl.value,
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
