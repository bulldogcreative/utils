# Utils

Just some handy functions that we find useful packaged in a very lightweight package.

## Functions

## Dump and Die

`dd` a simple implementation of die dump.

```php
<?php
Bulldog\dd($variable);
```

## Dump

`dump` var_dump, with `pre` tags if it is called from the browser.

```php
<?php
Bulldog\dump($variable);
```

## WriteLine

`WriteLine` writes a string to the console then the newline character.

```php
<?php
Bulldog\WriteLine("Hello, World!");
```

## PrintCode

`PrintCode` echos out an optional heading tag, then code wrapped in `pre` and `code` tags.

```php
<?php
Bulldog\PrintCode("Console.WriteLine", "C#");
```

## Slugify

`Slugify` creates a hyphenated version of a string that can be used for friendly URLs.

```php
<?php
Bulldog\Slugify("Article on the evolution of candy bars.");
```

## ShortHash

`ShortHash` creates a short hash using the first 10 characters of a **SHA512** hash.
It accepts an optional parameter for the length of the hash.

```php
<?php
Bulldog\ShortHash(time(), 5);
```
