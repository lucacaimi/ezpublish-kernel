<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\InMemory\UserTest class
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Repository\Tests\Service\InMemory;
use eZ\Publish\Core\Repository\Tests\Service\UserBase as BaseUserServiceTest,
    eZ\Publish\Core\Repository\Repository,
    eZ\Publish\Core\IO\InMemoryHandler as InMemoryIoHandler,
    eZ\Publish\Core\Persistence\InMemory\Handler as InMemoryPersistenceHandler;

/**
 * Test case for User Service using InMemory storage class
 *
 */
class UserTest extends BaseUserServiceTest
{
    protected function getRepository( array $serviceSettings )
    {
        return new Repository( new InMemoryPersistenceHandler(), new InMemoryIOHandler(), $serviceSettings );
    }
}
