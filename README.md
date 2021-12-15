# phpenv

Easily swith `php` version.

## Installation

### Oh My Zsh

```sh
git clone https://git.stefanwimmer128.eu/stefanwimmer128/phpenv.git $ZSH_CUSTOM/plugins/phpenv
```

Add to plugins in `.zshrc`:

```zsh
plugins=(phpenv)
```

### Zsh without Oh My Zsh, Bash

```sh
git clone https://git.stefanwimmer128.eu/stefanwimmer128/phpenv.git ~/.phpenv
```

Source `phpenv.sh`

```sh
source ~/.phpenv/phpenv.sh
```

## Usage

By setting the `PHPENV` environment variable you can define which php binary you want to use for the `php` command.

```sh
php --version # 8
PHPENV=php7.4 php --version # 7.4
```

You can define multiple options in `PHPENV` (divided by `:`):

```sh
PHPENV=php74:php7.4 php --version # 7.4
```

It tries calling `php74` first, and if not continues with `php7.4`.

## Swith php version per folder

By using [`direnv`](https://github.com/direnv/direnv) you can switch php version per folder by setting `PHPENV` in the `.envrc` file:

```sh
export PHPENV="php7.4:php74"
```

