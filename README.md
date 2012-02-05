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

PHP 5 (because of using http_build_query()).

### Author

Ilya Krylov

### License

The MIT License (MIT)

Copyright (c) 2012 Ilya Krylov

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
