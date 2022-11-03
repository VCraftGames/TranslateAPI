# TranslateAPI
A library for PocketMine-MP to translate messages!

<details>
<summary>Table of Contents</summary>

- [Introduction](#introduction)
- [API](#api)
    - [TranslateAPI](#translateapi)
- [Install](#install)
    - [As composer dependency](#as-composer-dependency)
    - [As virion](#as-virion)
- [License](#license)

</details>

# Introduction

TranslateAPI is a library for PocketMine-MP.
It is used to translate messages.

# API

## TranslateAPI
To translate messages, you need to use the `TranslateAPI` class.

```php
use TranslateAPI\TranslateAPI;

$from = "en";
$to = "ja";
$message = "Hello, World!";
$translated = TranslateAPI::translate($from, $to, $message);
```
The `$translate` will be returned `TranslateResult` class.
To get translated message from `TranslateResult`, use `getText()` method.

```php
$translated = TranslateAPI::translate($from, $to, $message);
$translatedMessage = $translated->getText();
```

To get from language and to language, use `getFrom()` and `getTo()` method.

```php
$translated = TranslateAPI::translate($from, $to, $message);
$fromLanguage = $translated->getFrom();
$toLanguage = $translated->getTo();
```

# Install

## As composer dependency
If you want to download as package of composer . New to Composer? Read the [introduction](https://getcomposer.org/doc/00-intro.md).
```bash
$ composer require vcraftgames/translateapi
```

## As virion
You can also install this library as a virion.
```bash
$ git clone https://github.com/VCraftGames/TranslateAPI.git
```

If you use Poggit to build your plugin, you can add it to your .poggit.yml like so:
```yaml
projects:
  YourPlugin:
    libs:
      - src: VCraftGames/TranslateAPI/TranslateAPI
        version: ^1.0.0
```

# License
TranslateAPI is licensed under the [MIT License](LICENSE).