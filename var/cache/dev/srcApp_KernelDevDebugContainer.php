<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPabbLZc\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPabbLZc/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPabbLZc.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPabbLZc\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPabbLZc\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PabbLZc',
    'container.build_id' => 'fd944cb9',
    'container.build_time' => 1555111823,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPabbLZc');
