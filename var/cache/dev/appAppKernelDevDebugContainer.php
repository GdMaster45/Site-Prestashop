<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3cqhwOp\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3cqhwOp/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3cqhwOp.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\Container3cqhwOp\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \Container3cqhwOp\appAppKernelDevDebugContainer([
    'container.build_hash' => '3cqhwOp',
    'container.build_id' => 'ed9693a9',
    'container.build_time' => 1721290435,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3cqhwOp');
