<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ3uuy4m\appProdDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ3uuy4m/appProdDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJ3uuy4m.legacy');

    return;
}

if (!\class_exists(appProdDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJ3uuy4m\appProdDebugProjectContainer::class, appProdDebugProjectContainer::class, false);
}

return new \ContainerJ3uuy4m\appProdDebugProjectContainer(array(
    'container.build_hash' => 'J3uuy4m',
    'container.build_id' => 'a29eff27',
    'container.build_time' => 1519311650,
));
