<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMrsmcej\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMrsmcej/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerMrsmcej.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerMrsmcej\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerMrsmcej\appProdProjectContainer(array(
    'container.build_hash' => 'Mrsmcej',
    'container.build_id' => '08c54b99',
    'container.build_time' => 1538909369,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerMrsmcej');
