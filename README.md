<h1 name="user-content-readme-top" align="center">Wysiwyg MD Editor plugin for Kanboard</h1>

<p align="center">
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/v/release/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=brightgreen" alt="GitHub Latest Release (by date)" title="GitHub Latest Release (by date)">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/blob/master/LICENSE" title="Read License">
        <img src="https://img.shields.io/github/license/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
</p>
<p align="center">
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/downloads/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/total?style=for-the-badge&color=orange" alt="GitHub All Releases" title="GitHub All Downloads">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/directory-file-count/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=orange" alt="GitHub Repository File Count" title="GitHub Repository File Count">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/repo-size/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=orange" alt="GitHub Repository Size" title="GitHub Repository Size">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/languages/code-size/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=orange" alt="GitHub Code Size" title="GitHub Code Size">
    </a>
</p>
<p align="center">
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/stargazers" title="View Stargazers">
        <img src="https://img.shields.io/github/stars/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?logo=github&style=for-the-badge" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/discussions">
        <img src="https://img.shields.io/github/discussions/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=blue" alt="GitHub Discussions" title="Read Discussions">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/compare">
        <img src="https://img.shields.io/github/commits-since/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/latest?include_prereleases&style=for-the-badge&color=blue" alt="GitHub Commits Since Last Release" title="GitHub Commits Since Last Release">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/compare">
        <img src="https://img.shields.io/github/commit-activity/m/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=blue" alt="GitHub Commit Monthly Activity" title="GitHub Commit Monthly Activity">
    </a>
</p>
<p align="center">
    <a href="https://github.com/kanboard/kanboard" title="Kanboard - Kanban Project Management Software">
        <img src="https://img.shields.io/badge/Plugin%20for-kanboard-D40000?style=for-the-badge&labelColor=000000" alt="Kanboard">
    </a>
</p>

---

Integrates external MD editors into Kanboard in order to conveniently edit and preview
the markdown textareas, as well as render the markdown fields in the Kanboard interface.
Each editor may allow for different customizations of functionality, MD features, and UI themes.
Rendering can parametrize theme, code highlight, and background transparency.

✅ If you want a new language pack added or an existing one corrected, please, post a PR !

✅ If you like and use the plugin, please, give a ⭐ to this repository !

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## ⚠️ News

**Unfortunately**, `stackedit.net` the **English** version of the `StackEdit+` online app, was eventually taken down and for good.
Adopting this editor to embed in KB was an optimal choice I made amongst multiple editors, as it combined functionality flexibility and UI tweaks.
So when it was gone I was seriously puzzled how to replace it.
Actually, there are only 2 similar editors available, both with their respective pros and cons.

Well, tough call 😏 I couldn't decide between them, so went for integrating both 😁  
And left the choice to you, to consider which one fits you better.  
See why in the section just below.

### ✨ `Bad` news and `Good` news as of v.0.9.2 ! ✨

- ❌ `stackedit.net` is gone, sad 🙁
- ✔️ yet there are `stackedit.io` and `stackedit.cn` to replace it
- ❌ `stackedit.io` has basic features only
- ✔️ but `stackedit.io` is in **English**
- ❌ `stackedit.net` is in **Chinese**
- ✔️ but `stackedit.net` has extra features and themes

Overall:
- ✅ `stackedit.io` is simple and minimalistic yet fully functional, and does the work just great if you don't need extras and a fixed light theme is fine !  
- ✅ the **Chinese** texts of `stackedit.net` don't get too much in the way, as the UI has intuitive buttons and shortcuts, while being much more pleasant and caring on the eyes !  

So, you really need to try each of the editors for yourself !

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Features

### ✨ Font Awesome Icons Picker is available as of v.0.9.4 ! ✨

### ✨ Emoji Picker is available as of v.0.9.3 ! ✨

### ✨ Rendering options are available as of v.0.9.0 ! ✨

- Currently integrates the [EasyMDE](https://github.com/Ionaru/easy-markdown-editor), [StackEdit](https://github.com/benweet/stackedit) and [StackEdit+](https://github.com/mafgwo/stackedit-plus) markdown editors.
- All editors are configured to be [GFM](https://github.github.com/gfm/) compatible.
- Side preview is available, themes and various convenience options.
- Configurable buttons for editors to inject into the KB editing toolbar of markdown textareas.
- ✨ Option for custom rendering of markdown fields (using `EasyMDE` locally with JavaScript).
- ✨ Rendering can be parametrized with theme, code highlight, and background transparency.
- ✨ Configurable **Emoji Picker** button for editing toolbar of markdown textareas (also integrated into `EasyMDE`).
- ✨ Configurable **Font Awesome Icons Picker** button for editing toolbar of markdown textareas (also integrated into `EasyMDE`). Compatible with [Font Awesome 4.7.0](https://fontawesome.com/v4/icons/), since this is what Kanboard comes with.

For a better preview and feel of the actual editors visit:
- `EasyMDE` [Live Demo](https://stackblitz.com/edit/easymde/?file=index.html)
- `StackEdit` [Online App](https://stackedit.io/app#) (English)
- `StackEdit+` [Online App](https://stackedit.cn/app#) (Chinese)

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Screenshots

<details>
<summary><strong>
Configurable buttons of MD editors injected into the textarea editing toolbar.
</strong></summary>

![textarea editing toolbar injected buttons](Screenshots/textarea-editing-toolbar-injected-buttons.png "textarea editing toolbar with injected MD editors buttons")

</details>

<details>
<summary><strong>
Preview of Emoji Picker.
</strong></summary>

![preview easymde](Screenshots/preview-picker-emoji.png "preview emoji picker")

</details>

<details>
<summary><strong>
Preview of Font Awesome Icons Picker.
</strong></summary>

![preview easymde](Screenshots/preview-picker-faicons.png "preview faicons picker")

</details>

<details>
<summary><strong>
EasyMDE with side preview using the dimmed theme.
</strong></summary>

![preview easymde](Screenshots/preview-editor-easymde.png "preview easymde")

</details>

<details>
<summary><strong>
StackEdit+ with side preview using the default dark theme.
</strong></summary>

![preview stackedit plus](Screenshots/preview-editor-stackedit-plus.png "preview stackedit plus")

</details>

<details>
<summary><strong>
Example of task description tooltip rendered with EasyMDE.
</strong></summary>

![preview tooltip render](Screenshots/preview-render-tootip.png "preview tooltip render")

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Configure

Go to `Settings` &#10562; `Wysiwyg MD Editor`.

<details>
<summary><strong>
Setup Symbol Picker Options
</strong></summary>
Follow the explanations to configure and preview the symbol picker(s) of your preference.

![setup symbol picker options](Screenshots/setup-options-symbol-picker.png "setup symbol picker options")

</details>

<details>
<summary><strong>
Setup Editing Options
</strong></summary>
Follow the explanations to configure and preview the MD editor(s) of your preference.

![setup editing options](Screenshots/setup-options-editing.png "setup editing options")

</details>

<details>
<summary><strong>
Setup Rendering Options
</strong></summary>
This section allows you to enable and parametrize custom rendering of markdown fields that will override the original KB display.

![setup rendering options](Screenshots/setup-options-rendering.png "setup rendering options")

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Installation & Compatibility

<details>
<summary><strong>Installation</strong></summary>

- Install via the **Kanboard Plugin Directory** or see [INSTALL.md](INSTALL.md)
- Read the full [**Changelog**](changelog.md "See changes") to see the latest updates

</details>
<details>
<summary><strong>Compatibility</strong></summary>

- Requires [Kanboard](https://github.com/kanboard/kanboard "Kanboard - Kanban Project Management Software") ≥`1.2.33`
- **Other Plugins & Action Plugins**
  - Can utilize the `HighlightCodeSyntax` plugin (if installed) for rendering purposes.
  - May conflict with or override the functionality of the `MarkdownPlus` plugin when the rendering option is turned on.  
- **Core Files & Templates**
  - `0` Template override
  - _No database changes_

</details>
<details>
<summary><strong>Translations</strong></summary>

- Available translations for some common languages `DE`, `ES`, `FR`, `IT`, `PT`, `RU` - yet, they are _mechanically translated using Google Translate_ !
- _Translation for `en_US` is the default_ if there is no translation pack for the user selected language in KB.
- The actual UI language of the editors is fixed (either **English** or **Chinese**), and **`no translations`** are available for them.

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Authors & Contributors

- [Im[F(x)]](https://github.com/imfx77) - Author
- Contributors welcome _for translations_ !

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Credits & References

- [EasyMDE](https://github.com/Ionaru/easy-markdown-editor)
- [Highlight.js](https://github.com/highlightjs/highlight.js)
- [stackedit.js](https://github.com/benweet/stackedit.js)
- [StackEdit](https://github.com/benweet/stackedit)
- [StackEdit+](https://github.com/mafgwo/stackedit-plus)
- [FG Emoji Picker](https://github.com/woody180/vanilla-javascript-emoji-picker)
- [FA Icons Picker](https://github.com/aumkarthakur/simple-fontawesome-iconpicker)

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## License

- This project is distributed under the [MIT License](LICENSE "Read The MIT license")

<p align="right">[<a href="#user-content-readme-top">&#8593; Top</a>]</p>

---

<p align="center">
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/stargazers" title="View Stargazers">
        <img src="https://img.shields.io/github/stars/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?logo=github&style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/forks" title="See Forks">
        <img src="https://img.shields.io/github/forks/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?logo=github&style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/blob/master/LICENSE" title="Read License">
        <img src="https://img.shields.io/github/license/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/issues" title="Open Issues">
        <img src="https://img.shields.io/github/issues-raw/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/issues?q=is%3Aissue+is%3Aclosed" title="Closed Issues">
        <img src="https://img.shields.io/github/issues-closed/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/discussions" title="Read Discussions">
        <img src="https://img.shields.io/github/discussions/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=flat-square" alt="kanboard-plugin-Wysiwyg-MD-Editor">
    </a>
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/compare/" title="Latest Commits">
        <img alt="GitHub commits since latest release (by date)" src="https://img.shields.io/github/commits-since/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/latest?style=flat-square">
    </a>
</p>

<a name="user-content-readme-bottom"></a>
