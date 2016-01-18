# Contributing

Hey there! Thanks for wanting to contribute the Theme Pattern Library—you rock!

## Creating an issue

If you find a bug or would like something added to the library, create a new issue! To create a new issue:

1. **Search** existing issues first to ensure your issue hasn't already been reported.
2. **Create** the issue. If it's a bug, provide steps to recreate the issue. (Attaching a video or screenshot is a great way to visually show what you're seeing. If your issue is an enhancement, attach a mockup or sketch to explain your idea.
3. **Pull Request** If you have found a bug and can fix it, attach a pull request to your issue! See below for more details on submitting PRs.

## Feature requests

Feature requests are welcome. Think about whether your idea
fits with the [scope and aims of the project](https://github.com/Automattic/theme-pattern-library/wiki/History).
It's up to *you* to make a strong case to convince the project's
developers of the merits of this feature. Please provide as much
detail and context as possible.

## Pull requests

Good pull requests—patches, improvements, new features—are a great
help. They should remain focused in scope and shouldn't contain unrelated
commits.

Please adhere to the coding conventions used throughout the project with 
regard to indentation, accurate comments, etc. The pattern library follows
the [WordPress coding conventions](https://make.wordpress.org/core/handbook/best-practices/coding-standards/).

Follow this process if you'd like your work considered for inclusion in the
project:

1. [Fork](http://help.github.com/fork-a-repo/) the project, clone your fork,
   and configure the remotes:

   ```bash
   # Clone your fork of the repo into the current directory
   git clone https://github.com/<your-username>/theme-pattern-library
   # Navigate to the newly cloned directory
   cd theme-pattern-library
   # Assign the original repo to a remote called "upstream"
   git remote add upstream https://github.com/Automattic/theme-pattern-library
   ```

2. If you cloned a while ago, get the latest changes from upstream:

   ```bash
   git checkout <dev-branch>
   git pull upstream <dev-branch>
   ```

3. Create a new feature branch (off the main project development branch) to
   contain your feature, change, or fix:

   ```bash
   git checkout -b <topic-branch-name>
   ```

4. Commit your changes in logical chunks. Please adhere to these [git commit
   message guidelines](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)
   or your code is unlikely be merged into the main project. Use Git's
   [interactive rebase](https://help.github.com/articles/interactive-rebase)
   feature to tidy up your commits, if necessary, before making them public.

5. Locally merge (or rebase) the upstream development branch into your topic branch:

   ```bash
   git pull [--rebase] upstream <dev-branch>
   ```

6. Push your feature branch up to your fork:

   ```bash
   git push origin <topic-branch-name>
   ```

7. [Open a Pull Request](https://help.github.com/articles/using-pull-requests/)
    with a clear title and description.

## Conventions of commit messages

Addding files on repo

```bash
git commit -m "Add filename"
```

Updating files on repo

```bash
git commit -m "Update filename, filename2, filename3"
```

Removing files on repo

```bash
git commit -m "Remove filename"
```

Renaming files on repo

```bash
git commit -m "Rename filename"
```

Fixing errors and issues on repo

```bash
git commit -m "Fixed #issuenumber Message about this fix"
```

Adding features on repo

```bash
git commit -m "Add Feature: nameoffeature Message about this feature"
```

Updating features on repo

```bash
git commit -m "Update Feature: nameoffeature Message about this update"
```

Removing features on repo

```bash
git commit -m "Remove Feature: nameoffeature Message about this"
```

**IMPORTANT**: By submitting a patch, you agree to allow the project owner to
license your work under the same license as that used by the project.

Thanks for helping make the theme pattern library better!
