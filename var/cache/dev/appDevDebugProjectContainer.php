<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJydgsie\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJydgsie/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJydgsie.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJydgsie\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJydgsie\appDevDebugProjectContainer([
    'container.build_hash' => 'Jydgsie',
    'container.build_id' => '0bb01aa8',
    'container.build_time' => 1558977534,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJydgsie');
