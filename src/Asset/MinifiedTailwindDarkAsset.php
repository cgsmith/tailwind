<?php

declare(strict_types=1);

namespace Yii\Extension\Tailwind\Asset;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class MinifiedTailwindDarkAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/tailwindcss/dist';

    public array $css = [
        'tailwind-dark.min.css',
    ];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**tailwind-dark.min.css',
            ),
        ];
    }
}
