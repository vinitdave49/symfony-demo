<?php

namespace Cloud\TwilioBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class CloudTwilioExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        //var_dump($config);

        $container->getDefinition('cloud_twilio.twilio_api')
            ->addArgument($config['sid'])
            ->addArgument($config['authToken'])
            ->addArgument($config['retryattempts'])
            ->addArgument($config['version']);

        $container->getDefinition('cloud_twilio.twilio_capability')
            ->addArgument($config['sid'])
            ->addArgument($config['authToken']);

        $container->getDefinition('cloud_twilio.twilio_taskrouter')
            ->addArgument($config['sid'])
            ->addArgument($config['authToken'])
            ->addArgument($config['workspaceSid'])
            ->addArgument($config['retryattempts']);

        $container->getDefinition('cloud_twilio.twilio_taskrouter_worker_capability')
            ->addArgument($config['sid'])
            ->addArgument($config['authToken'])
            ->addArgument($config['workspaceSid'])
            ->addArgument($config['workerSid']);

    }

    public function getAlias()
    {
        return 'cloud_twilio';
    }
}
