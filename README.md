## Gravatar Helper

This is a really simple Gravatar helper class for use in any PHP project.
It can generate just image url or whole html image tag.

### Basic usage

Get image url (some optional parameters are omitted):

``` php
<?php
$imageUrl = GravatarHelper::GetImageUrl('kiaplayer@gmail.com', 50, 'mm');
```

Get html image tag (some optional parameters are omitted):

``` php
<?php
$imageTag = GravatarHelper::GetImageUrl('kiaplayer@gmail.com', 50, 'mm', array('height' => 50, 'width' => 50));
```

### Requirements

PHP 5

### Author

Ilya Krylov

### License

The MIT License (MIT)
