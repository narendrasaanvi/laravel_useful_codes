# Database Backup Command

This Laravel command creates a database backup and stores it in the storage/app/backups directory.

## Command

```bash
php artisan backup:database
```

## Scheduled Execution

The command is scheduled in `routes/console.php`:

```php
Schedule::command('backup:database')->dailyAt('02:00');
```

## Backup Location

```
storage/app/backups
```

## Features

- Automatic database backup
- Timestamped backup files
- Can be executed manually
- Supports Laravel Scheduler
