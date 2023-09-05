<?php

declare(strict_types=1);

namespace Owl\Component\File\Factory;

use Owl\Component\File\Model\FileInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Owl\Component\File\Model\UploaderInterface;

/**
 * @template T of FileInterface
 *
 * @extends FactoryInterface<T>
 */
interface FileFactoryInterface extends FactoryInterface
{
    public function createForSubjectWithUploader(string $parentName, ?UploaderInterface $reviewer): FileInterface;
}
