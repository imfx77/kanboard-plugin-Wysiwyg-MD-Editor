<p align="center">
    <a href="https://github.com/imfx77/kanboard-plugin-Wysiwyg-MD-Editor/releases">
        <img src="https://img.shields.io/github/v/release/imfx77/kanboard-plugin-Wysiwyg-MD-Editor?style=for-the-badge&color=brightgreen" alt="GitHub Latest Release (by date)" title="GitHub Latest Release (by date)">
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

<h4 name="user-content-readme-top">(work in progress ...)</h4>
<h1 name="user-content-readme-top">Wysiwyg MD Editor plugin for Kanboard</h1>

Integrates external MD editors into Kanboard in order to conveniently edit/preview
(and eventually render) the markdown textareas in the Kanboard interface.
Each editor may allow for different customizations of functionality, MD features, and UI themes.

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#screenshots">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Features

- Currently integrates the [EasyMDE](https://github.com/Ionaru/easy-markdown-editor) and [StackEdit+](https://github.com/mafgwo/stackedit-plus) markdown editors
- Both editors are configured to be [GFM](https://github.github.com/gfm/) compatible
- Side preview is available, themes and various convenience options
- Configurable buttons to inject into the KB editing toolbar of markdown textareas

For a better preview and feel of the actual editors visit:
- `EasyMDE` [Live Demo](https://stackblitz.com/edit/easymde/?file=index.html)
- `StackEdit+` [Online App](https://stackedit.net/app#) 

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#features">&#8592; Previous</a>] [<a href="#usage">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Screenshots

**Configurable buttons of MD editors injected into the textarea editing toolbar.**  

![textarea editing toolbar injected buttons](Screenshots/textarea-editing-toolbar-injected-buttons.png "textarea editing toolbar with injected MD editors buttons")

**EasyMDE with side preview using the dimmed theme.**  

![easymde preview](Screenshots/easymde-preview.png "easymde preview")

**StackEdit+ with side preview using the default dark theme.**  

![stackedit plus preview](Screenshots/stackedit-plus-preview.png "stackedit plus preview")

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#features">&#8592; Previous</a>] [<a href="#installation--compatibility">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Usage

Go to `Settings` &#10562; `Wysiwyg MD Editor`

Follow the explanations to configure and preview the MD editor(s) of your preference.

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#screenshots">&#8592; Previous</a>] [<a href="#authors--contributors">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

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
  - _No known issues_
- **Core Files & Templates**
  - `0` Template override
  - _No database changes_

</details>
<details>
    <summary><strong>Translations</strong></summary>

- _`en_US` translation available ONLY_
- More translations might be mechanically added in the future using Google Translate

</details>

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#usage">&#8592; Previous</a>] [<a href="#license">&#8594; Next</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Authors & Contributors

- [Im[F(x)]](https://github.com/imfx77) - Author
- Contributors welcome _for translations_ !

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#installation--compatibility">&#8592; Previous</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## Credits & References

- [EasyMDE](https://github.com/Ionaru/easy-markdown-editor)
- [Highlight.js](https://github.com/highlightjs/highlight.js)
- [StackEdit+](https://github.com/mafgwo/stackedit-plus)
- [stackedit.js](https://github.com/benweet/stackedit.js)

<p align="right">[<a href="#user-content-readme-bottom">&#8595; Bottom</a>] [<a href="#installation--compatibility">&#8592; Previous</a>] [<a href="#user-content-readme-top">&#8593; Top</a>]</p>

## License

- This project is distributed under the [MIT License](LICENSE "Read The MIT license")

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
<p align="right">[<a href="#user-content-readme-top">&#8593; Top</a>]</p>
<a name="user-content-readme-bottom"></a>
