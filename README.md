# Utils

Just some handy functions that we find useful packaged in a very lightweight package.

## Functions

## Dump and Die

`dd` a simple implementation of die dump.

```php
<?php
dd($variable);
```

## Dump

`dump` var_dump, with `pre` tags if it is called from the browser.

```php
<?php
dump($variable);
```

## WriteLine

`WriteLine` writes a string to the console then the newline character.

```php
<?php
WriteLine("Hello, World!");
```

## PrintCode

`PrintCode` echos out an optional heading tag, then code wrapped in `pre` and `code` tags.

```php
<?php
PrintCode("Console.WriteLine", "C#");
```

## Slugify

`Slugify` creates a hyphenated version of a string that can be used for friendly URLs.

```php
<?php
Slugify("Article on the evolution of candy bars.");
```

## ShortHash

`ShortHash` creates a short hash using the first 10 characters of a **SHA512** hash.
It accepts an optional parameter for the length of the hash.

```php
<?php
ShortHash(time(), 5);
```

