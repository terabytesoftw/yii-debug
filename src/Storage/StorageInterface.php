<?php

declare(strict_types=1);

namespace Yiisoft\Yii\Debug\Storage;

use Yiisoft\Yii\Debug\Collector\CollectorInterface;

/**
 * Debug data storage responsibility is to store debug data from collectors added
 */
interface StorageInterface
{
    /**
     * Add collector to get debug data from
     * @param CollectorInterface $collector
     */
    public function addCollector(CollectorInterface $collector): void;

    public function getData(): array;

    /**
     * Flush data from collectors into storage
     */
    public function flush(): void;
}
