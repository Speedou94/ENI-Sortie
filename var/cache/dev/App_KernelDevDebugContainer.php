<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerESHDRE6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerESHDRE6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerESHDRE6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerESHDRE6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerESHDRE6\App_KernelDevDebugContainer([
    'container.build_hash' => 'ESHDRE6',
    'container.build_id' => 'c5cf8a63',
    'container.build_time' => 1663929051,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerESHDRE6');
