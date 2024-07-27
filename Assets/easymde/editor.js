/**
 * @author  Im[F(x)]
 */

function WysiwygMDEditor_injectButtonWrapperEasyMDE() {

    const easymdeHtmlContainer = `
    <div class="easymde-iframe-container">
      <button class="easymde-close-button" title="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%">
          <path fill="#777" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
        </svg>
      </button>
      <iframe class="easymde-iframe"></iframe>
    </div>
    `;

    $('.text-editor-write-mode').each(function() {
        // check if button already injected
        if (this.querySelector('.easymde-button-wrapper')) return;

        const urlAssetsEasyMDE = '/plugins/WysiwygMDEditor/Assets/easymde/';
        const urlVendorHLJS = '/plugins/WysiwygMDEditor/vendor/highlightjs/highlight.js/';

        const buttonWrapper = document.createElement('span');
        buttonWrapper.className = 'easymde-button-wrapper';
        buttonWrapper.title = 'Edit with EasyMDE';
        buttonWrapper.style = 'margin: 0px 0px 0px 20px; cursor: pointer;';
        buttonWrapper.innerHTML = '<img height="24" width="24" style="vertical-align: bottom" '
                                + 'src="'+ urlAssetsEasyMDE + 'icon.svg">';
        const toolbarElement = this.querySelector('div');
        toolbarElement.insertBefore(buttonWrapper, toolbarElement.lastElementChild.nextSibling);

        const textareaElement = this.querySelector('textarea');

        let shouldInvalidateModal = (KB.modal.getForm()) ? true : false;

        $( buttonWrapper ).click(function() {
            let containerElement = document.createElement('div');
            containerElement.className = 'easymde-container';
            containerElement.innerHTML = easymdeHtmlContainer;
            document.body.appendChild(containerElement);
            document.body.className += ' easymde-no-overflow';

            let textedit = null;
            let easymde = null;

            function Close() {
                if (!easymde) return;

                easymde.toTextArea();

                // if textarea is in a modal form that needs invalidation
                if (shouldInvalidateModal) {
                    const modalForm = KB.modal.getForm();
                    if (modalForm && textareaElement.value !== textedit.value) {
                        modalForm.dispatchEvent(new Event('change'));
                        shouldInvalidateModal = false; // once is enough!
                    }
                }

                textareaElement.value = textedit.value;

                document.body.className = document.body.className.replace(/\seasymde-no-overflow\b/, '');
                document.body.removeChild(containerElement);

                containerElement = null;
                easymde = null;
            }

            $(".easymde-iframe").on("load", function() {
                const innerDoc = this.contentDocument || this.contentWindow.document;
                textedit = innerDoc.querySelector('#easymde-textarea');
                textedit.value = textareaElement.value;

                // create the editor
                function CreateEasyMDE() {
                    easymde = new EasyMDE({
                        element: textedit,
                        autoDownloadFontAwesome: false,
                        spellChecker: false,
                        forceSync: true,
                        autofocus: true,
                        maxHeight: (0.9 * containerElement.offsetHeight - 80) + 'px',
                        sideBySideFullscreen : false,
                        //lineNumbers: true,
                        insertTexts: {
                            horizontalRule: ["", "\n\n---\n\n"],
                            image: ["![](http://", ")"],
                            link: ["[", "](http://)"],
                            table: ["", "\n\n| Column 1 | Column 2 | Column 3 |\n| -------- | -------- | -------- |\n| Text     | Text      | Text     |\n\n"],
                        },
                        renderingConfig: {
                            singleLineBreaks: false,
                            codeSyntaxHighlighting: true,
                        },
                        styleSelectedText: false,
                        toolbar: [
                            "undo",
                            "redo",
                            "|",
                            "bold",
                            "italic",
                            "strikethrough",
                            "heading",
                            "|",
                            "code",
                            "quote",
                            "unordered-list",
                            "ordered-list",
                            "|",
                            "link",
                            "image",
                            "table",
                            "horizontal-rule",
                            "|",
                            {
                                name: "emojiPicker",
                                action: function emojiPicker(){
                                    innerDoc.getElementById("easymde-emoji-picker-btn").click();
                                },
                                className: "fa fa-smile-o",
                                title: "Emoji Picker",
                            },
                            {
                                name: "faiconsPicker",
                                action: function emojiPicker(){
                                    innerDoc.getElementById("easymde-faicons-input").click();
                                },
                                className: "fa fa-font-awesome",
                                title: "FontAwesome Icons Picker",
                            },
                            "|",
                            {
                                name: "themeLight",
                                action: function themeLight(){
                                    innerDoc.getElementById("theme-link").setAttribute('href', urlAssetsEasyMDE +  'theme.light.css');
                                    innerDoc.getElementById("highlight-link").setAttribute('href', urlVendorHLJS + 'github-light.min.css');
                                    // Update toolbar buttons
                                    easymde.toolbarElements.themeLight.classList.add('active');
                                    easymde.toolbarElements.themeDimmed.classList.remove('active');
                                    easymde.toolbarElements.themeDark.classList.remove('active');
                                },
                                className: "fa fa-circle-o",
                                title: "Theme Light",
                            },
                            {
                                name: "themeDimmed",
                                action: function themeDimmed(){
                                    innerDoc.getElementById("theme-link").setAttribute('href', urlAssetsEasyMDE + 'theme.dimmed.css');
                                    innerDoc.getElementById("highlight-link").setAttribute('href', urlVendorHLJS + 'github-dimmed.min.css');
                                    // Update toolbar buttons
                                    easymde.toolbarElements.themeLight.classList.remove('active');
                                    easymde.toolbarElements.themeDimmed.classList.add('active');
                                    easymde.toolbarElements.themeDark.classList.remove('active');
                                },
                                className: "fa fa-dot-circle-o",
                                title: "Theme Dimmed",
                            },
                            {
                                name: "themeDark",
                                action: function themeDark(){
                                    innerDoc.getElementById("theme-link").setAttribute('href', urlAssetsEasyMDE + 'theme.dark.css');
                                    innerDoc.getElementById("highlight-link").setAttribute('href', urlVendorHLJS + 'github-dark.min.css');
                                    // Update toolbar buttons
                                    easymde.toolbarElements.themeLight.classList.remove('active');
                                    easymde.toolbarElements.themeDimmed.classList.remove('active');
                                    easymde.toolbarElements.themeDark.classList.add('active');
                                },
                                className: "fa fa-circle",
                                title: "Theme Dark",
                            },
                            "|",
                            "preview",
                            "side-by-side",
                            //"fullscreen",
                            "|",
                            "guide",
                        ],
                        shortcuts: {
                            toggleStrikethrough: "Cmd-Alt-S",
                            drawTable: "Cmd-Alt-T",
                            emojiPicker: "Cmd-Alt-.",
                            themeLight: "Cmd-Alt-1",
                            themeDimmed: "Cmd-Alt-2",
                            themeDark: "Cmd-Alt-3",
                        },
                    });

                    easymde.toggleSideBySide();

                    // set the default theme
                    $.ajax({
                        cache: false,
                        type: "POST",
                        url: '/?controller=WysiwygMDEditorConfigController&action=getEasyMDEDefaultTheme&plugin=WysiwygMDEditor',
                        success: function(response) {
                            innerDoc.getElementById("theme-link").setAttribute('href', urlAssetsEasyMDE + 'theme.' + response + '.css');
                            innerDoc.getElementById("highlight-link").setAttribute('href', urlVendorHLJS + 'github-' + response + '.min.css');
                            // Update toolbar buttons
                            switch (response) {
                                case 'light':
                                    easymde.toolbarElements.themeLight.classList.add('active');
                                    break;
                                case 'dimmed':
                                    easymde.toolbarElements.themeDimmed.classList.add('active');
                                    break;
                                case 'dark':
                                    easymde.toolbarElements.themeDark.classList.add('active');
                                    break;
                            }
                        },
                        error: function(xhr,textStatus,e) {
                            alert('getEasyMDEDefaultTheme');
                            alert(e);
                        }
                    });
                }

                // create emoji picker
                function CreateEmojiPicker() {
                    new EmojiPicker({
                        localDocument: innerDoc,
                        trigger: [
                            {
                                selector: '.emojiPicker',
                                insertInto: '#easymde-emoji-input'
                            },
                            {
                                selector: '#easymde-emoji-picker-btn',
                                insertInto: '#easymde-emoji-input'
                            },
                        ],
                        closeButton: true,
                        softClose: true,
                    });
                }

                CreateEasyMDE();
                CreateEmojiPicker();

                $(this.contentWindow).on("resize", function() {
                    if (!easymde) return;

                    easymde.toTextArea();
                    easymde = null;

                    CreateEasyMDE();
                });

                // handle ESC
                $(innerDoc).keydown(function(event) {
                    if (event.keyCode != 27) return;

                    event.stopPropagation();

                    // firstly hide the faiconsPicker if open, rather than directly exit the editor
                    const faiconsPicker = document.querySelector('.howl-iconpicker-outer');
                    if (faiconsPicker && $(faiconsPicker).css('display') !== 'none') {
                        $(faiconsPicker).css('display', 'none');
                        return;
                    }

                    // secondly hide the emojiPicker if open, rather than directly exit the editor
                    const emojiPicker = innerDoc.querySelector('.fg-emoji-container');
                    if (emojiPicker && !$(emojiPicker).hasClass('fg-emoji-container-hidden')) {
                        $(emojiPicker).addClass('fg-emoji-container-hidden');
                        return;
                    }

                    // actually close EasyMDE
                    Close();
                });

                // handle emoji picker input
                $(innerDoc).find("#easymde-emoji-input").on("input", function(){
                    if(!easymde) return;
                    let cm = easymde.codemirror;
                    if (cm.getWrapperElement().lastChild.classList.contains('editor-preview-active')) return;

                    let startPoint = {}, endPoint = {};
                    Object.assign(startPoint, cm.getCursor('start'));
                    Object.assign(endPoint, cm.getCursor('end'));
                    cm.replaceSelection($(this).val());

                    $(this).val('');
                });

                // handle faicons picker input
                $(innerDoc).find("#easymde-faicons-input").faiconpicker(innerDoc);
                $(innerDoc).find("#easymde-faicons-input").on("input", function(){
                    if(!easymde) return;
                    let cm = easymde.codemirror;
                    if (cm.getWrapperElement().lastChild.classList.contains('editor-preview-active')) return;

                    let startPoint = {}, endPoint = {};
                    Object.assign(startPoint, cm.getCursor('start'));
                    Object.assign(endPoint, cm.getCursor('end'));
                    cm.replaceSelection($(this).val());

                    $(this).val('');
                });
            });

            $(".easymde-iframe").attr('src',
                '/plugins/WysiwygMDEditor/Template/editor/easymde.php'
            );

            $( ".easymde-close-button" ).click(function() {
                Close();
            });

        });

    });

}

$(function() {
    WysiwygMDEditor_injectButtonWrapperEasyMDE();

    const observerEasyMDE = new MutationObserver(function() {
        WysiwygMDEditor_injectButtonWrapperEasyMDE();
    });
    observerEasyMDE.observe(document, { subtree: true, childList: true });
});
