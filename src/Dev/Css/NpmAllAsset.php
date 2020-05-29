<?php

declare(strict_types=1);

namespace Yii\Extension\Fontawesome\Dev\Css;

use Yiisoft\Assets\AssetBundle;

final class NpmAllAsset extends AssetBundle
{
    public ?string $basePath = '@basePath';
    public ?string $baseUrl = '@web';
    public ?string $sourcePath = '@npm/@fortawesome/fontawesome-free/';

    public array $css = [
        'css/all.css'
    ];

    public array $depends = [
        NpmFontAwesomeAsset::class
    ];

    public $publishOptions = [
        'only' => [
            'css/all.css',
            'css/fontawesome.css',
            'webfonts/*'
        ],
    ];
}
