<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJyuxhat\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJyuxhat/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJyuxhat.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJyuxhat\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJyuxhat\appProdProjectContainer(array(
    'container.build_hash' => 'Jyuxhat',
    'container.build_id' => 'a7d19aa1',
    'container.build_time' => 1539379576,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJyuxhat');
