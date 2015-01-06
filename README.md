iTunes Plugin for CakePHP
======

The iTunes Plugin allows you to place search fields in your project to search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.
You can search for a variety of content; including apps, iBooks, movies, podcasts, music, music videos, audiobooks, and TV shows.
This plugin is based in The Search API.

Requirements
------------

* CakePHP 2.x
* PHP 5

Installation
------------

To install the plugin, place the files in a directory labelled "ITunes/" in your "app/Plugin/" directory.

Usage
-----

Controllers that will be using ITunes require the ITunes Component to be included.

```php
public $components = array('ITunes.ITunes');
```

Example #1

```php
$search = $this->ITunes->search('jack johnson');
````

Example #2

```php
$lookup = $this->ITunes->lookup(array('id' => '909253', 'entity' => 'album'));
````

See also for more details: <a href="https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html">iTunes Search API</a>.

License
-------

iTunes Plugin is offered under an [MIT license](http://www.opensource.org/licenses/mit-license.php).

Copyright
---------

2015 Rafael Queiroz

