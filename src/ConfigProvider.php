<?php

declare(strict_types=1);

namespace FactorioItemBrowser\ExportData;

/**
 * The config provider of the export data library.
 *
 * @author BluePsyduck <bluepsyduck@gmx.com>
 * @license http://opensource.org/licenses/GPL-3.0 GPL v3
 */
class ConfigProvider
{
    /**
     * Returns the configuration of the library.
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return array_merge(
            require(__DIR__ . '/../config/dependencies.php')
        );
    }
}
