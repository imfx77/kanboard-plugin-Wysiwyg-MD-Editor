const styleContent = `
.easymde-no-overflow {
  overflow: hidden;
}

.easymde-container {
  background-color: rgba(160, 160, 160, 0.5);
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 9999;
}

.easymde-iframe-container {
  background-color: transparent;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  height: 98%;
  width: 98%;
  max-width: 1920px;
  border-radius: 2px;
}

.easymde-iframe {
  position: absolute;
  height: 100%;
  width: 100%;
  border: 0;
  border-radius: 2px;
}

.easymde-close-button {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 10000;
  box-sizing: border-box !important;
  width: 38px !important;
  height: 36px !important;
  margin: 4px !important;
  padding: 0 4px !important;
  text-align: center !important;
  vertical-align: middle !important;
  text-decoration: none !important;
}

`;

let createStyle = () => {
  const styleEl = document.createElement('style');
  styleEl.type = 'text/css';
  styleEl.innerHTML = styleContent;
  document.head.appendChild(styleEl);
  createStyle = () => {}; // Create style only once
};

const containerHtml = `
<div class="easymde-iframe-container">
  <button class="easymde-close-button" title="Close">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%">
      <path fill="#777" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
    </svg>
  </button>
  <iframe class="easymde-iframe"></iframe>
</div>
`;

$(function() {
    const span = document.createElement('span');
    span.className = 'easymde-button-wrapper';
    span.title = 'Edit with EasyMDE';
    span.innerHTML = '<img height="24" width="24" src="plugins/WysiwygMDEditor/AssetsMDE/easymde/icon.svg">';

    const textareaEl = document.querySelector( "#txtarea-edit" );
    textareaEl.parentNode.insertBefore(span, textareaEl.nextSibling);

    $( ".easymde-button-wrapper" ).click(function() {
        createStyle();

        var containerEl = document.createElement('div');
        containerEl.className = 'easymde-container';
        containerEl.innerHTML = containerHtml;
        document.body.appendChild(containerEl);
        document.body.className += ' easymde-no-overflow';

        var textedit = null;
        var easymde = null;

        $(".easymde-iframe").on("load", function() {
            var innerDoc = this.contentDocument || this.contentWindow.document;
            textedit = innerDoc.querySelector('#easymde-textarea');
            textedit.value = textareaEl.value;

            function CreateEasyMDE() {
                easymde = new EasyMDE({
                    element: textedit,
                    spellChecker: false,
                    forceSync: true,
                    autofocus: true,
                    previewImagesInEditor: true,
                    maxHeight: (0.9 * containerEl.offsetHeight - 80) + 'px',
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
                            name: "themeLight",
                            action: function themLight(editor){
                                innerDoc.getElementById("theme-link").setAttribute('href', "theme-light.css");
                            },
                            className: "fa fa-circle-o",
                            title: "Theme Light",
                        },
                        {
                            name: "themeGrey",
                            action: function themeGrey(editor){
                                innerDoc.getElementById("theme-link").setAttribute('href', "theme-grey.css");
                            },
                            className: "fa fa-dot-circle-o",
                            title: "Theme Grey",
                        },
                        {
                            name: "themeDark",
                            action: function themeDark(editor){
                                innerDoc.getElementById("theme-link").setAttribute('href', "theme-dark.css");
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
                        themeLight: "Cmd-Alt-1",
                        themeGrey: "Cmd-Alt-2",
                        themeDark: "Cmd-Alt-3",
                    },
                });

                easymde.toggleSideBySide();
            }

            CreateEasyMDE();

            $(this.contentWindow).on("resize", function() {
                if (!easymde) return;

                easymde.toTextArea();
                easymde = null;

                CreateEasyMDE();
            });

            $(innerDoc).keydown(function(event) {
              if (event.keyCode != 27) return;

              easymde.toTextArea();
              textareaEl.value = textedit.value;

              document.body.className = document.body.className.replace(/\seasymde-no-overflow\b/, '');
              document.body.removeChild(containerEl);

              containerEl = null;
              easymde = null;
            });
        });

        $(".easymde-iframe").attr('src', 'plugins/WysiwygMDEditor/AssetsMDE/easymde/wrapper.html');

        $( ".easymde-close-button" ).click(function() {
          easymde.toTextArea();
          textareaEl.value = textedit.value;

          document.body.className = document.body.className.replace(/\seasymde-no-overflow\b/, '');
          document.body.removeChild(containerEl);

          containerEl = null;
          easymde = null;
        });

    });

});
