<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\Core\Persistence\Legacy\Content\Query\CriterionHandler;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use Doctrine\DBAL\Query\QueryBuilder;
use eZ\Publish\Core\Persistence\Legacy\Content\Query\CriteriaConverter;

class ContentId extends Base
{
    /**
     * {@inheritdoc}
     */
    public function accept(Criterion $criterion): bool
    {
        return $criterion instanceof Criterion\ContentId;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(CriteriaConverter $converter, QueryBuilder $query, Criterion $criterion): string
    {
        return $this->operateInt($query, 'content.id', $criterion);
    }
}
