<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWh1uw4n\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWh1uw4n/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWh1uw4n.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWh1uw4n\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWh1uw4n\appProdProjectContainer([
    'container.build_hash' => 'Wh1uw4n',
    'container.build_id' => '4d1dfd4a',
    'container.build_time' => 1581115409,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWh1uw4n');