<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXzx2cye\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXzx2cye/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXzx2cye.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXzx2cye\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXzx2cye\appProdProjectContainer([
    'container.build_hash' => 'Xzx2cye',
    'container.build_id' => 'a368d219',
    'container.build_time' => 1636986322,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXzx2cye');
