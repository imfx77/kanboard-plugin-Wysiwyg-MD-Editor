/**
 * @author  Im[F(x)]
 */

function injectButtonWrapperEmojiPicker() {
    let emojipicker = null;
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
        let emojipicker = new EmojiPicker({
            trigger: triggerEmojiPicker,
            closeButton: true,
            autoClose: true,
        });

        // handle ESC
        $(document).keydown(function (event) {
            if (event.keyCode != 27) return;

            const emojiPicker = document.querySelector('.fg-emoji-container');
            if (emojiPicker && !$(emojiPicker).hasClass('fg-emoji-container-hidden')) {
                event.stopPropagation();
                $(emojiPicker).addClass('fg-emoji-container-hidden');
                return;
            }
        });
        // handle modal close
        KB.on('modal.close', function () {
            $(".fg-emoji-container").addClass('fg-emoji-container-hidden');
        });
    }
}

$(function() {
    injectButtonWrapperEmojiPicker();

    const observerEmojiPicker = new MutationObserver(function () {
        injectButtonWrapperEmojiPicker();
    });
    observerEmojiPicker.observe(document, { subtree: true, childList: true });
});
