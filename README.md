<div align="center">

# 📘 Learn2 with Git Sync

### Designed to accompany the Learn2 with Git Sync Skeleton

<p><em>A Grav theme for open documentation sites – easy to read, with Git-based open editing built in.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-theme-learn2-git-sync?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-theme-learn2-git-sync/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-theme-learn2-git-sync/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.0.2-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-learn2-git-sync/">demo</a></p>

<p>A free, open-source child theme of <a href="https://github.com/getgrav/grav-theme-learn2">Learn2</a>, the Grav documentation theme, built for <a href="https://getgrav.org">Grav CMS</a> with Markdown file-based content, a built-in Admin panel, and no database required. Used by the <a href="https://github.com/hibbitts-design/grav-skeleton-learn2-with-git-sync">Learn2 with Git Sync</a> skeleton package.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-learn2-git-sync/refs/heads/master/screenshots/screenshot.webp"><img alt="Documentation page with chapter navigation in the sidebar, an Edit this Page link, and previous and next arrows, in light mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-learn2-git-sync/refs/heads/master/screenshots/screenshot.webp" width="49%"></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-learn2-git-sync/refs/heads/master/screenshots/screenshot-dark.webp"><img alt="Documentation page with chapter navigation in the sidebar, an Edit this Page link, and previous and next arrows, in dark mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-learn2-git-sync/refs/heads/master/screenshots/screenshot-dark.webp" width="49%"></a>

<p>Learn2 with Git Sync – Documentation page in light mode (left) and dark mode (right)</p>

</div>

Learn2 with Git Sync adds what open, collaborative documentation sites need on top of the Learn2 theme: an "Edit this Page" link to each page's source in your Git repository, a choice of visual styles with Dark Mode, and shortcodes for rich content.

## What Sets It Apart

- **Open authoring with Git Sync** – an "Edit this Page" link to each page's Markdown source on GitHub, GitLab, or Bitbucket, worked out automatically from your Git Sync setup or a custom repository URL
- **Visual styles** – 2026 Refresh or Classic, with Dark Mode off, on, or following the visitor's system setting
- **Built for documentation** – chapter and docs page types, numbered sidebar navigation, previous and next page arrows, and reading history
- **Search** – instant search with SimpleSearch, plus tag-aware full-text search when the TNTSearch plugin is installed
- **Built-in shortcodes** – Google Slides, H5P, and PDF
- **Feeds and versioning** – Atom/RSS feeds and optional document versioning

## When is Learn2 with Git Sync a Good Candidate?

Learn2 with Git Sync is a good fit when you:

- Want an open documentation site built on Grav's Learn2 theme
- Value "Edit this Page" links so others can suggest and make improvements
- Want a choice of visual styles for your documentation

Other options might be better when you:

- Need only standard documentation without these extras – the [Learn2 theme](https://github.com/getgrav/grav-theme-learn2) is enough
- Need a full knowledge base with user accounts, comments, or approval workflows
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)

## Quick Start

The easiest way to get started is the [Learn2 with Git Sync](https://github.com/hibbitts-design/grav-skeleton-learn2-with-git-sync) skeleton package, which includes this theme already configured.

### Installing in an Existing Site
1. In the Admin Panel, go to **Themes → Add** and install **Learn2 Git Sync**, or from the root of your Grav site run `bin/gpm install learn2-git-sync`
2. The parent **Learn2** theme and required plugins are installed as dependencies

### Setting as the Default Theme
1. In the Admin Panel, go to **Themes**, select **Learn2 Git Sync**, and press **Activate**, or in `user/config/system.yaml` set the theme under `pages`:
   ```yaml
   pages:
     theme: learn2-git-sync
   ```
2. Clear the Grav cache (`bin/grav clearcache`)

> [!IMPORTANT]
> Before setting up Git Sync, remove any `README.md` file from your Grav site's `user` folder. This prevents a possible sync conflict when your new Git repository is created with its own default `README.md`.

> [!TIP]
> Make your customizations in a child theme (the skeleton package includes one called `mytheme`), so they are kept when Learn2 with Git Sync is updated.

## Theme Options

All options are available in the Admin Panel under **Themes → Learn2 Git Sync**.

- **Visual Style** – style (2026 Refresh or Classic) and Dark Mode (Off, On, or Auto (System))
- **Git Sync Link Options** – link position (top, bottom, or off), a custom Font Awesome icon, and a custom Git repository tree URL
- **Learn2 Theme Options** – document versioning, hide site title, top-level version, home URL, Google Analytics code, and default taxonomy category

## Requirements

- PHP >= 8.0.2
- Grav CMS 1.7 or 2.0
- The [Learn2 theme](https://github.com/getgrav/grav-theme-learn2) and required plugins, installed automatically as dependencies

## Support

### Contact and Support
- Share your feedback in the [Learn2 with Git Sync Survey](https://docs.google.com/forms/d/e/1FAIpQLSdOAQL_4m56zIvmTQMszTtS6U3pVQ0nZlaxnZfPspEy-i6eOg/viewform)
- Follow [@hibbittsdesign@mastodon.social](https://mastodon.social/@hibbittsdesign) on Mastodon for updates
- 👩🏻‍💻🧑🏻‍💻 Join the [Grav Discord](https://chat.getgrav.org) and often find me there
- Add a ⭐️ [star on GitHub](https://github.com/hibbitts-design/grav-theme-learn2-git-sync) to the Learn2 with Git Sync project repository
- For bugs or feature requests, [open an issue](https://github.com/hibbitts-design/grav-theme-learn2-git-sync/issues) on GitHub

### Professional Services

By leveraging his extensive UX design expertise and systems-oriented approach, Paul helps teams and individuals utilize open content in education and publication settings. Professional services include user experience and workflow consulting, premium support subscriptions, workshops, and custom development. Interested? Send a note to [paul@hibbittsdesign.org](mailto:paul@hibbittsdesign.org).

## License

MIT – Hibbitts Design
