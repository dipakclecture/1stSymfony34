<?php


namespace Doctrine\Bundle\MongoDBBundle\CacheWarmer;

use Doctrine\Common\Proxy\AbstractProxyFactory;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

/**
 * The proxy generator cache warmer generates all document proxies.
 *
 * In the process of generating proxies the cache for all the metadata is primed also,
 * since this information is necessary to build the proxies in the first place.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class ProxyCacheWarmer implements CacheWarmerInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * This cache warmer is not optional, without proxies fatal error occurs!
     *
     * @return false
     */
    public function isOptional()
    {
        return false;
    }

    public function warmUp($cacheDir)
    {
        // we need the directory no matter the proxy cache generation strategy.
        $proxyCacheDir = $this->container->getParameter('doctrine_mongodb.odm.proxy_dir');
        if (!file_exists($proxyCacheDir)) {
            if (false === @mkdir($proxyCacheDir, 0775, true)) {
                throw new \RuntimeException(sprintf('Unable to create the Doctrine Proxy directory (%s)', dirname($proxyCacheDir)));
            }
        } else if (!is_writable($proxyCacheDir)) {
            throw new \RuntimeException(sprintf('Doctrine Proxy directory (%s) is not writable for the current system user.', $proxyCacheDir));
        }

        if (AbstractProxyFactory::AUTOGENERATE_NEVER !== $this->container->getParameter('doctrine_mongodb.odm.auto_generate_proxy_classes')) {
            return;
        }

        /* @var $registry \Doctrine\Common\Persistence\ManagerRegistry */
        $registry = $this->container->get('doctrine_mongodb');
        foreach ($registry->getManagers() as $dm) {
            /* @var $dm \Doctrine\ODM\MongoDB\DocumentManager */
            $classes = $this->getClassesForProxyGeneration($dm);
            $dm->getProxyFactory()->generateProxyClasses($classes);
        }
    }

    /**
     * @param DocumentManager $dm
     *
     * @return ClassMetadata[]
     */
    private function getClassesForProxyGeneration(DocumentManager $dm)
    {
        return array_filter($dm->getMetadataFactory()->getAllMetadata(), function (ClassMetadata $metadata) {
            return !$metadata->isEmbeddedDocument && !$metadata->isMappedSuperclass;
        });
    }
}
