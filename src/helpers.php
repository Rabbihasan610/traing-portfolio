<?php

if (!function_exists('dd')) {
      function dd(...$args): void
      {
            foreach ($args as $arg) {
                  var_dump($arg);
            }
            exit(1);
      }
}

if (!function_exists('dump')) {
      function dump(...$args): void
      {
            foreach ($args as $arg) {
                  var_dump($arg);
            }
      }
}

if (!function_exists('view')) {
      function view(string $path, array $data = []): string
      {
            extract($data);
            ob_start();
            include_once __DIR__ . '/../Views/' . $path . '.php';
            return ob_get_clean();
      }
}
