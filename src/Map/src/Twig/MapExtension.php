<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Map\Twig;

use Symfony\UX\Map\Renderer\Renderers;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @author Hugo Alliaume <hugo@alliau.me>
 *
 * @internal
 */
final class MapExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('render_map', [Renderers::class, 'renderMap'], [
                'is_safe' => ['html'],
                'deprecated' => '2.21',
                'deprecating_package' => 'symfony/ux-map',
                'alternative' => 'ux_map',
            ]),
            new TwigFunction('ux_map', [Renderers::class, 'renderMap'], ['is_safe' => ['html']]),
        ];
    }
}