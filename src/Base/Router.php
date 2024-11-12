<?php

namespace My\Portfolio\Base;

use Pecee\Http\Request;
use Pecee\SimpleRouter\Route\IRoute;
use Pecee\SimpleRouter\SimpleRouter;


class Router extends SimpleRouter
{

      public static function get(string $url, $callback, array $settings = null): IRoute
      {
            return static::match([Request::REQUEST_TYPE_GET], BASE_DIR . $url, $callback, $settings);
      }

      public static function post(string $url, $callback, array $settings = null): IRoute
      {
            return static::match([Request::REQUEST_TYPE_POST], BASE_DIR . $url, $callback, $settings);
      }
}
