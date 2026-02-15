<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Extend;

$config = require __DIR__ . '/config.php';

return [
    (new Extend\Frontend('forum'))
        ->content(function (\Flarum\Frontend\Document $document) use ($config) {
            $donatedAmount = $config['donated_amount'] ?? 0;
            if ($donatedAmount >= 7.0) {
                return;
            }

            $document->foot[] = '<p style="text-align:center;padding:8px 0;margin:0;font-size:13px;color:#666;">Powered by <a href="https://no-cost.site" target="_blank" rel="noopener" style="color:#4D698E;">no-cost.site</a></p>';
        }),
];
