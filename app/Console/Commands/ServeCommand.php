<?php

namespace App\Console\Commands;

use Illuminate\Support\Collection;
use Symfony\Component\Process\Process;

class ServeCommand extends \Illuminate\Foundation\Console\ServeCommand
{
    /**
     * Start a new server process.
     */
    protected function startProcess($hasEnvironment)
    {
        $passthroughVariables = static::$passthroughVariables;

        // Windows environment keys are case-insensitive. Preserve system keys
        // such as "SystemRoot" even when the framework list uses "SYSTEMROOT".
        if ('\\' === DIRECTORY_SEPARATOR) {
            $allowed = array_map('strtolower', $passthroughVariables);

            $environment = (new Collection($_ENV))->mapWithKeys(function ($value, $key) use ($allowed, $hasEnvironment) {
                if ($this->option('no-reload') || ! $hasEnvironment) {
                    return [$key => $value];
                }

                return in_array(strtolower((string) $key), $allowed, true) ? [$key => $value] : [$key => false];
            });
        } else {
            $environment = (new Collection($_ENV))->mapWithKeys(function ($value, $key) use ($passthroughVariables, $hasEnvironment) {
                if ($this->option('no-reload') || ! $hasEnvironment) {
                    return [$key => $value];
                }

                return in_array($key, $passthroughVariables, true) ? [$key => $value] : [$key => false];
            });
        }

        $process = new Process(
            $this->serverCommand(),
            public_path(),
            $environment->merge(['PHP_CLI_SERVER_WORKERS' => $this->phpServerWorkers])->all(),
        );

        $this->trap(fn () => [SIGTERM, SIGINT, SIGHUP, SIGUSR1, SIGUSR2, SIGQUIT], function ($signal) use ($process) {
            if ($process->isRunning()) {
                $process->stop(10, $signal);
            }

            exit;
        });

        $process->start($this->handleProcessOutput());

        return $process;
    }
}
