<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2bf26pz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2bf26pz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2bf26pz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2bf26pz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container2bf26pz\appDevDebugProjectContainer(array(
    'container.build_hash' => '2bf26pz',
    'container.build_id' => 'dca03703',
    'container.build_time' => 1552154290,
), __DIR__.\DIRECTORY_SEPARATOR.'Container2bf26pz');
