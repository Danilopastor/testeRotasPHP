<?php

namespace Marcelo\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManageFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $isDevMode = false;

        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir],
            $isDevMode
    );
        return EntityManager::create($connection, $config);
    }
}