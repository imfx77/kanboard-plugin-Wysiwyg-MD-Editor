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

## Features

### ✨ Rendering options are available as of v.0.9.0 ! ✨

- Currently integrates the [EasyMDE](https://github.com/Ionaru/easy-markdown-editor) and [StackEdit+](https://github.com/mafgwo/stackedit-plus) markdown editors
- Both editors are configured to be [GFM](https://github.github.com/gfm/) compatible
- Side preview is available, themes and various convenience options
- Configurable buttons to inject into the KB editing toolbar of markdown textareas
- ✨ Option for custom rendering of markdown fields (using `EasyMDE` locally with JavaScript). ✨
- ✨ Rendering can be parametrized with theme, code highlight, and background transparency. ✨

For a better preview and feel of the actual editors visit:
- `EasyMDE` [Live Demo](https://stackblitz.com/edit/easymde/?file=index.html)
- `StackEdit+` [Online App](https://stackedit.net/app#)

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Screenshots

**Configurable buttons of MD editors injected into the textarea editing toolbar.**

![textarea editing toolbar injected buttons](Screenshots/textarea-editing-toolbar-injected-buttons.png "textarea editing toolbar with injected MD editors buttons")

**EasyMDE with side preview using the dimmed theme.**

![preview easymde](Screenshots/preview-easymde.png "preview easymde")

**StackEdit+ with side preview using the default dark theme.**

![preview stackedit plus](Screenshots/preview-stackedit-plus.png "preview stackedit plus")

**Example of task description tooltip rendered with EasyMDE.**

![preview tooltip render](Screenshots/preview-tootip-render.png "preview tooltip render")

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Usage

Go to `Settings` &#10562; `Wysiwyg MD Editor`

Follow the explanations in `Setup Editing Options` to configure and preview the MD editor(s) of your preference.

![setup editing options](Screenshots/setup-editing-options.png "setup editing options")

The section `Setup Rendering Options` allows you to enable and parametrize custom rendering of markdown fields that will override the original KB display.

![setup rendering options](Screenshots/setup-rendering-options.png "setup rendering options")

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

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Authors & Contributors

- [Im[F(x)]](https://github.com/imfx77) - Author
- Contributors welcome _for translations_ !

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Credits & References

- [EasyMDE](https://github.com/Ionaru/easy-markdown-editor)
- [Highlight.js](https://github.com/highlightjs/highlight.js)
- [StackEdit+](https://github.com/mafgwo/stackedit-plus)
- [stackedit.js](https://github.com/benweet/stackedit.js)

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
