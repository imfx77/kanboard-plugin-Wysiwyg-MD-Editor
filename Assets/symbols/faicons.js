/**
 * @author  Im[F(x)]
 */

function WysiwygMDEditor_injectButtonWrapperFAIconsPicker() {

    $('.text-editor-write-mode').each(function() {
        const textareaElement = this.querySelector('textarea');

        // check if button already injected
        if (this.querySelector('.faicons-picker-button-wrapper-' + textareaElement.name)) return;

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'faicons-picker-button-wrapper-' + textareaElement.name;
        buttonWrapper.style = 'margin: 0px 10px 0px 0px; cursor: pointer;';
        buttonWrapper.title = 'FontAwesome Icons Picker';
        buttonWrapper.innerHTML = '<i class="fa fa-font-awesome" aria-hidden="true"></i>';

        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        const idFAIconsPicker = 'faicons-picker-input-' + textareaElement.name;
        const inputFAIconsPicker = document.createElement('input');
        inputFAIconsPicker.id = idFAIconsPicker;
        inputFAIconsPicker.type = 'text';
        inputFAIconsPicker.style = 'display: none;';

        this.insertBefore(inputFAIconsPicker, textareaElement);

        // handle clicks on button wrapper forward to hidden input
        $(buttonWrapper).click(function() {
            inputFAIconsPicker.click();
        });

        // handle faicons picker input
        $(inputFAIconsPicker).faiconpicker();
        $(inputFAIconsPicker).on("input", function(){
            if (textareaElement.selectionStart || textareaElement.selectionStart == "0") {
                const startPos = textareaElement.selectionStart;
                const endPos = textareaElement.selectionEnd;
                textareaElement.value = textareaElement.value.substring(0, startPos) + $(this).val() + textareaElement.value.substring(endPos, textareaElement.value.length);

                textareaElement.selectionStart = startPos + $(this).val().length;
                textareaElement.selectionEnd = textareaElement.selectionStart;

            } else {
                textareaElement.value += $(this).val();
            }
            $(this).val('');

            // if textarea is in a modal form that needs invalidation
            const modalForm = KB.modal.getForm();
            if (modalForm) {
                modalForm.dispatchEvent(new Event('change'));
            }
        });
    });
}

$(function() {
    WysiwygMDEditor_injectButtonWrapperFAIconsPicker();

    const observerFAIconsPicker = new MutationObserver(function () {
        WysiwygMDEditor_injectButtonWrapperFAIconsPicker();
    });
    observerFAIconsPicker.observe(document, { subtree: true, childList: true });
});
