<?php

namespace TroisSix\MysqlPostfixAdminBundle\DependencyInjection;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class TroisSixMysqlPostfixAdminExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $config['connection']['driver'] = 'pdo_mysql';

        $container->setParameter('mysql_postfix_db_config', $config['connection']);

        $entityPaths = [__DIR__ . DIRECTORY_SEPARATOR . '../Entity'];

        $emConfigDefinition = $container->setDefinition('mysql_postfix_em_config', new Definition('Doctrine\ORM\Configuration'));
        $emConfigDefinition
            ->setPublic(true)
            ->setFactory(['Doctrine\ORM\Tools\Setup', 'createAnnotationMetadataConfiguration'])
            ->setArguments([ $entityPaths, false, null, null, false ])
        ;

        $emDefinition = $container->setDefinition('mysql_postfix_em', new Definition('Doctrine\ORM\EntityManager'));
        $emDefinition
            ->setPublic(true)
            ->setFactory(['Doctrine\ORM\EntityManager', 'create'])
            ->setArguments([$config['connection'], new Reference('mysql_postfix_em_config')])
        ;

        $container->setDefinition('mysql_postfix', new Definition(
            'TroisSix\MysqlPostfixAdminBundle\Service\MysqlPostfixService',
            [ new Reference('mysql_postfix_em') ]
        ));

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
