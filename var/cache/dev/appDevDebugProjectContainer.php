<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerItvwsiz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerItvwsiz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerItvwsiz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerItvwsiz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerItvwsiz\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Itvwsiz',
    'container.build_id' => 'd16eec2d',
    'container.build_time' => 1519376454,
));
