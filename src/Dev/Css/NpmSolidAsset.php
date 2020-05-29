<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmSolidAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@web';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $css = [
        'css/solid.css'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public array $publishOptions = [
        'only' => [
            'css/fontawesome.css',
            'css/solid.css',
            'webfonts/fa-solid*'
        ],
    ];
}
