<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQNYo1Tr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQNYo1Tr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQNYo1Tr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQNYo1Tr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQNYo1Tr\App_KernelDevDebugContainer([
    'container.build_hash' => 'QNYo1Tr',
    'container.build_id' => 'a0ab33f4',
    'container.build_time' => 1594809953,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQNYo1Tr');
