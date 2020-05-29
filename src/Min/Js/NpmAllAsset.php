<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Min\Js;

use Yiisoft\Assets\AssetBundle;

final class NpmAllAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@web';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $js = [
        'js/all.min.js'
    ];

    public array $publishOptions = [
        'only' => [
            'js/all.min.js',
            'js/fontawesome.min.js',
            'svgs/*'
        ],
    ];
}
