# Adapter Pattern in PHP
This demonstrates how you can use the Adapter pattern to have 2 or more different interfaces communicate with each other.

### Example Usage
```php
<?php

// Require composer autoload file
require 'vendor/autoload.php';

// Import classes
use Acme\Book;
use Acme\Kindle;
use Acme\KindleAdapter;
use Acme\Person;

// Instantiate object
$person = new Person;

// Read from Book
$person->read(new Book);

// Read from Kindle
$person->read(new KindleAdapter(new Kindle));
```
