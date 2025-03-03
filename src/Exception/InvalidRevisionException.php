<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SimpleThings\EntityAudit\Exception;

class InvalidRevisionException extends AuditException
{
    /**
     * @param int|string $revision
     */
    public function __construct($revision)
    {
        parent::__construct(null, null, $revision, \sprintf('No revision "%s" exists.', $revision));
    }
}
