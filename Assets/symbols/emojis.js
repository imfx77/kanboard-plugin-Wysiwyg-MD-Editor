/**
 * @author  Im[F(x)]
 */

function WysiwygMDEditor_injectButtonWrapperEmojiPicker() {
    let insertedButtonWrapper= false;
    let triggerEmojiPicker = [];

    $('.text-editor-write-mode').each(function() {
        const textareaElement = this.querySelector('textarea');

        triggerEmojiPicker.push({
            selector: '.emoji-picker-button-wrapper-' + textareaElement.name,
            insertInto: 'textarea[name="' + textareaElement.name + '"]',
        });

        // check if button already injected
        if (this.querySelector('.emoji-picker-button-wrapper-' + textareaElement.name)) return;

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'emoji-picker-button-wrapper-' + textareaElement.name;
        buttonWrapper.style = 'margin: 0px 10px 0px 0px; cursor: pointer;';
        buttonWrapper.title = 'Emoji Picker';
        buttonWrapper.innerHTML = '😀';

        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        insertedButtonWrapper = true;

        // if textarea is in a modal form that needs invalidation
        $(textareaElement).on("input", function(){
            const modalForm = KB.modal.getForm();
            if (modalForm) {
                modalForm.dispatchEvent(new Event('change'));
            }
        });
    });

    if (insertedButtonWrapper) {
        // create emoji picker
        new EmojiPicker({
            trigger: triggerEmojiPicker,
            closeButton: true,
        });

        // handle ESC
        $(document).keydown(function (event) {
            if (event.keyCode != 27) return;

            const emojiPicker = document.querySelector('.fg-emoji-picker-container-outer');
            if (emojiPicker && !$(emojiPicker).hasClass('fg-emoji-picker-container-outer-hidden')) {
                event.stopPropagation();
                $(emojiPicker).addClass('fg-emoji-picker-container-outer-hidden');
            }
        });
        // handle modal close
        KB.on('modal.close', function () {
            $(".fg-emoji-picker-container").addClass('fg-emoji-picker-container-hidden');
        });
    }
}

$(function() {
    WysiwygMDEditor_injectButtonWrapperEmojiPicker();

    const observerEmojiPicker = new MutationObserver(function () {
        WysiwygMDEditor_injectButtonWrapperEmojiPicker();
    });
    observerEmojiPicker.observe(document, { subtree: true, childList: true });
});
