<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEikdc5d\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEikdc5d/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerEikdc5d.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerEikdc5d\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerEikdc5d\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Eikdc5d',
    'container.build_id' => 'a928299a',
    'container.build_time' => 1520170729,
));
