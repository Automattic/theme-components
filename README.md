# [Components](http://components.underscores.me)

![beautiful screenshot](http://components.underscores.me/content/themes/components.underscores.me/screenshot.png)

---

**This project is retired, and not maintained.** Please [see this blog post for more information](https://themeshaper.com/2017/06/26/the-future-of-underscores-and-a-new-committer/) or head over to [Underscores](https://underscores.me/) for all your starter theme needs. Thank you to all of the contributors to the project! 

---

A library of shareable, reusable patterns for WordPress themes. Components allows you to generate different types of starter themes for taking your themes where you want them to go, faster.

This repository contains theme components – all the pieces of code that go into making a theme. The code that runs [the Components site](http://components.underscores.me) and generates the starter themes lives in a [different repo](https://github.com/Automattic/components.underscores.me).

Forked from [_s](https://github.com/Automattic/_s), Components creates a modular, pattern-based approach to theme
development. For more information, read [the wiki](https://github.com/Automattic/theme-components/wiki) or this [introductory post on ThemeShaper](https://themeshaper.com/2016/02/09/introducing-components/).

## Using Components

You'll notice this repository can't be activated and run as a WordPress theme. It's just the pieces for a theme. The best way to use it on your next project is to not download it directly from Github, but head over to [the Components site](http://components.underscores.me), fill out the form and generate the theme of your choice. The generator does all the hard work so you can get to theming!

## Developing for Components

If you want to start contributing to Components, we're happy to have you! Keep in mind, Components has two major repositories, plus a special development plugin that helps you contribute to the project:

* [Components](https://github.com/Automattic/theme-components): That's this one. It contains all the components or pieces that make up the themes.
* [Components site](https://github.com/Automattic/components.underscores.me): This contains the WordPress theme that runs the site for Components, and the generator that performs all the magic starter-theme generation.
* [Components Local Development](https://github.com/Automattic/theme-components-local-development): A plugin that enables testing a local copy of Components on a local copy of http://components.underscores.me/.

To start developing, follow these steps:

1. Place a local copy of [Components](https://github.com/Automattic/theme-components) in the root of your WordPress install. It should be named `theme-components`.
2. Upload the `theme-components-local-dev` directory to the `/wp-content/plugins/` directory.
3. Make sure you have the Components site theme active, and the latest master branch running.
4. Activate the plugin through the `Plugins` menu in WordPress.

From there, you can make changes to the local copy of Components in the root of your WordPress install, and the themes you create from your local WordPress install will reflect any changes you've made. You can test and commit code to the project. Just don’t forget to check out our [CONTRIBUTING](./.github/CONTRIBUTING.md) doc – it includes a few details that will make the process a lot smoother.

## Security

Need to report a security vulnerability? Go to [https://automattic.com/security/](https://automattic.com/security/) or directly to our security-bug-bounty site [https://hackerone.com/automattic](https://hackerone.com/automattic).

## Browser Support

We support the latest two versions of all major browsers, except Internet Explorer, where we currently support 11 and Edge.  (see [Browse Happy](http://browsehappy.com) for current latest versions).

## Troubleshooting

If you have any problems using Components, [please see the most common issues here](https://github.com/Automattic/theme-components/wiki/Troubleshooting).

## License

License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
