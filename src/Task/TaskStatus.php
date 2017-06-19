<?php

/*
 * This file is part of php-task library.
 *
 * (c) php-task
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Task;

/**
 * Container class for task status constants.
 */
final class TaskStatus
{
    const PLANNED = 'planned';
    const RUNNING = 'running';
    const COMPLETED = 'completed';
    const ABORTED = 'aborted';
    const FAILED = 'failed';
    const ABORTED = 'aborted';

    /**
     * Private constructor.
     */
    private function __construct()
    {
    }
}
