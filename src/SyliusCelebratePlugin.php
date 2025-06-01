<?php

namespace Barth\SyliusCelebratePlugin;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SyliusCelebratePlugin extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.php');
    }

    public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->prependExtensionConfig('sylius_twig_hooks', [
            'hooks' => [
                'sylius_shop.order.thank_you' => [
                    'celebrate' => [
                        'template' => '@SyliusCelebratePlugin/celebrate.html.twig',
                    ]
                ],
                'sylius_admin.order.show.content' => [
                    'celebrate' => [
                        'template' => '@SyliusCelebratePlugin/celebrate.html.twig',
                    ]
                ],
            ],
        ]);
    }
}
