<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Resource\Model;

/**
 * @see ArchivableInterface
 */
trait ArchivableTrait
{
    /**
     * @var \DateTimeInterface|null
     */
    protected $archivedAt;

    /**
     * @return \DateTimeInterface|null
     */
    public function getArchivedAt(): ?\DateTimeInterface
    {
        return $this->archivedAt;
    }

    /**
     * @param \DateTimeInterface|null $archivedAt
     */
    public function setArchivedAt(?\DateTimeInterface $archivedAt): void
    {
        $this->archivedAt = $archivedAt;
    }
}
