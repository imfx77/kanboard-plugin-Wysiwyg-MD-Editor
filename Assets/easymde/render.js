/**
 * @author  Im[F(x)]
 */

function injectRenderEasyMDE() {

    $('.WysiwygMDEditor-MarkdownTextContainer').each(function() {
        const markdownElement = $(this);
        const containerElement = markdownElement.parent();

        containerElement.addClass("easymde-no-overflow");
        const containerHeight = containerElement.height();

        var valueMarkdown = markdownElement.html();
        valueMarkdown = valueMarkdown.replaceAll('&lt;', '<');
        valueMarkdown = valueMarkdown.replaceAll('&gt;', '>');

        const valueRenderTheme = markdownElement.attr("renderTheme");
        const valueRenderTransparentBackground = (markdownElement.attr("renderTransparentBackground") == "1");
        const valueRenderCodeHighlight = markdownElement.attr("renderCodeHighlight");

        containerElement.html('<iframe class="easymde-iframe-embedded" style="display: none"></iframe>');

        $(".easymde-iframe-embedded", containerElement).on("load", function() {
            const innerDoc = this.contentDocument || this.contentWindow.document;
            let textedit = innerDoc.querySelector('#easymde-textarea');
            textedit.value = valueMarkdown;

            // create the editor
            let easymde = new EasyMDE({
                element: textedit,
                autoDownloadFontAwesome: false,
                spellChecker: false,
                renderingConfig: {
                    singleLineBreaks: false,
                    codeSyntaxHighlighting: (valueRenderCodeHighlight == 1),
                },
                styleSelectedText: false,
                toolbar: false,
                status: false,
            });

            easymde.togglePreview();

            if (valueRenderCodeHighlight == 2) {
                Prism.highlightAllUnder(innerDoc.querySelector('.EasyMDEContainer'));
            }

            function AdjustSizeAndStyle() {
                const editorWrap = innerDoc.querySelector('.CodeMirror-wrap');
                const editorPreview = innerDoc.querySelector('.editor-preview');

                if (valueRenderTransparentBackground) {
                    editorPreview.style.borderColor = "transparent";
                    editorWrap.style.borderColor = "transparent";

                    editorPreview.style.background = "none";
                    editorWrap.style.backgroundColor = "transparent";

                    $(innerDoc.querySelector('.CodeMirror-vscrollbar')).hide();
                    $(innerDoc.querySelector('.CodeMirror-scroll')).hide();
                }

                if (containerHeight != 0) {
                    editorWrap.style.height = containerHeight + "px";
                } else {
                    editorPreview.style.height = "auto";
                    $(editorWrap).height($(editorPreview).height() + 2);
                    containerElement.height($(editorPreview).outerHeight() + 2);
                }
            }

            $(this.contentWindow).on("resize", function() {
                AdjustSizeAndStyle();
            });

            function HandleDelayedImages() {
                const images = innerDoc.querySelectorAll("img:not([loading='lazy'])");
                if (images.length == 0) {
                    //console.log('none lazy images');
                    AdjustSizeAndStyle();
                    setTimeout(function() {
                        AdjustSizeAndStyle();
                    }, 100);
                    return;
                }

                let imagesLoaded = true;
                images.forEach(function(item) {
                    imagesLoaded &= item.complete;
                });
                if (imagesLoaded) {
                    //console.log('loaded lazy images');
                    AdjustSizeAndStyle();
                    setTimeout(function() {
                        AdjustSizeAndStyle();
                    }, 100);
                    return;
                }

                //console.log('loading...');
                setTimeout(function() {
                    HandleDelayedImages();
                }, 100);
            }

            AdjustSizeAndStyle();
            HandleDelayedImages();
        });

        $(".easymde-iframe-embedded", containerElement).show();
        $(".easymde-iframe-embedded", containerElement).attr('src',
            '/plugins/WysiwygMDEditor/Template/render/easymde.php'
            + '?renderTheme=' + valueRenderTheme
            + '&renderTransparentBackground=' + valueRenderTransparentBackground
            + '&renderCodeHighlight=' + valueRenderCodeHighlight
        );

    });
}

$(function() {
    injectRenderEasyMDE();

    const observerRenderEasyMDE = new MutationObserver(function() {
        injectRenderEasyMDE();
    });
    observerRenderEasyMDE.observe(document, { subtree: true, childList: true });
});
