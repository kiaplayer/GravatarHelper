<?php

class GravatarHelper {

  const PUBLIC_API_URL = 'http://www.gravatar.com/avatar/';
  const SECURE_API_URL = 'https://secure.gravatar.com/avatar/';

  /**
   * @static
   * @param string $email
   * @param int $size
   * @param string $defaultImage ( 404 | mm | identicon | monsterid | wavatar | retro | custom url )
   * @param string $rating ( g | pg | r | x )
   * @param boolean $isSecured
   * @return string image url
   */
  public static function GetImageUrl($email, $size, $defaultImage, $rating = 'g', $isSecured = false) {

    $result = ($isSecured ? self::SECURE_API_URL : self::PUBLIC_API_URL).md5(strtolower(trim($email)));
    $result .= '?'.http_build_query(array('s' => (int)$size, 'd' => urlencode($defaultImage), 'r' => $rating));
    return $result;

  }

  /**
   * @static
   * @param string $email
   * @param int $size
   * @param string $defaultImage ( 404 | mm | identicon | monsterid | wavatar | retro | custom url )
   * @param array $htmlOptions
   * @param string $rating ( g | pg | r | x )
   * @param boolean $isSecured
   * @return string image tag
   */
  public static function GetImageTag($email, $size, $defaultImage, $htmlOptions = array(), $rating = 'g', $isSecured = false) {

    $tagAttributes = '';
    $htmlOptions['src'] = self::GetImageUrl($email, $size, $defaultImage, $rating, $isSecured);
    foreach ($htmlOptions as $attributeName => $attributeValue) {
      $tagAttributes .= ' '.$attributeName.'="'.$attributeValue.'"';
    }
    return '<img '.$tagAttributes.' />';

  }

}
