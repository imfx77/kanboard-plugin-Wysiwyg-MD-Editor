<!DOCTYPE html>
<html lang="en-us">
<!-- ----------------- -->
<!-- @author  Im[F(x)] -->
<!-- ----------------- -->

<head>
<meta charset="UTF-8">
<title>EasyMDE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../../../../assets/css/vendor.min.css">
<link rel="stylesheet" href="../../vendor/Ionaru/easy-markdown-editor/easymde.min.css">
<link rel="stylesheet" href="../../vendor/Ionaru/easy-markdown-editor/stylesheet.min.css">
<link rel="stylesheet" href="../../Assets/easymde/theme.<?= $_GET['renderTheme'] ?>.css">
<link rel="stylesheet" href="../../Assets/easymde/container.css">

<?php

if ($_GET['useEmojiFont'] == 1) {
    // Emoji Font
    print '<link rel="stylesheet" href="../../Assets/symbols/emojis.css">';
}
if ($_GET['renderCodeHighlight'] == 1) {
    // Highlight.js
    print '<link rel="stylesheet" href="../../vendor/highlightjs/highlight.js/github-' . $_GET['renderTheme'] . '.min.css">';
}
if ($_GET['renderCodeHighlight'] == 2) {
    // HighlightCodeSyntax plugin
    print '<link rel="stylesheet" type="text/css" href="../../../../plugins/HighlightCodeSyntax/Assets/css/style.css">';
    print '<link rel="stylesheet" type="text/css" href="../../../../plugins/HighlightCodeSyntax/Assets/css/prism.css">';
}

?>
</head>

<body>
<textarea id="easymde-textarea" style="display: none"></textarea>
</body>

</html>
