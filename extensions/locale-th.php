<?php

declare(strict_types=1);

use Pig\CodingAgent\Extensions\ExtensionApi;

/**
 * Thai (ไทย) for pig's web UI.
 *
 * The strings live in `th.json` beside this package — the same Telegram-style key-value file
 * the language settings can import by hand — and this extension registers them, so
 * `pig install` is the whole setup. Keys the pack does not have fall back to English.
 */
return function (ExtensionApi $pi): void {
    $file = dirname(__DIR__) . '/th.json';
    $data = json_decode((string) file_get_contents($file), true, flags: JSON_THROW_ON_ERROR);
    unset($data['_meta']);

    $pi->registerLocale('th', 'ไทย', $data);
};
