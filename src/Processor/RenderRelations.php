<?php
declare(strict_types=1);
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Cycle\Schema\Processor;

use Cycle\Schema\Registry;
use Cycle\Schema\Definition\Entity;
use Cycle\Schema\ProcessorInterface;

/**
 * Render indexes and foreign keys defined by entity relations.
 */
class RenderRelations implements ProcessorInterface
{
    public function compute(Registry $builder, Entity $entity)
    {
        if (!$builder->hasTable($entity)) {
            return;
        }

        foreach ($builder->getRelations($entity) as $name => $relation) {
            dump($relation);
        }
    }
}