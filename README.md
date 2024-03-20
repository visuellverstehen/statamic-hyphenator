# Hyphenator

A Statamic addon that provides a `hyphenate` modifier to add hyphens to text. Uses [phpSyllable](https://github.com/vanderlee/phpSyllable/) for the hyphenate logic, and currently only supports German and English.

## Installation

The addon currently can only installed from the repository, so you need to add the following line to your `require` list in `composer.json`:

```json
"visuellverstehen/statamic-hyphenator": "dev-main"
```

And the following snippet to the `repositories` part of `composer.json`:

```json
{
  "type": "vcs",
  "url": "https://github.com/visuellverstehen/statamic-hyphenator"
}
```

## More about us

- [www.visuellverstehen.de](https://visuellverstehen.de)

## License
The MIT license (MIT). Please take a look at the [license file](LICENSE) for more information.
