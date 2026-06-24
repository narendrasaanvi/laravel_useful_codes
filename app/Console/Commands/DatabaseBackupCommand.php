<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DatabaseBackupCommand extends Command
{
    protected $signature = 'backup:database';
    protected $description = 'Take database backup';

    public function handle()
    {
        $filename = storage_path(
            'app/backups/db_backup_' . date('Y_m_d_H_i_s') . '.sql'
        );

        $command = sprintf(
            'mysqldump -u%s -p%s %s > %s',
            env('DB_USERNAME'),
            env('DB_PASSWORD'),
            env('DB_DATABASE'),
            $filename
        );

        exec($command);

        $this->info('Database backup created successfully.');
    }
}
