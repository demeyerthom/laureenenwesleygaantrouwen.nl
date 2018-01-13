<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\DbDumper\Databases\MySql;

class DumpDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dump-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dumps a database to sql for export elsewhere';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws \Spatie\DbDumper\Exceptions\CannotSetParameter
     * @throws \Spatie\DbDumper\Exceptions\CannotStartDump
     * @throws \Spatie\DbDumper\Exceptions\DumpFailed
     */
    public function handle()
    {
        MySql::create()
            ->setDbName(config('dump.database'))
            ->setUserName(config('dump.username'))
            ->setPassword(config('dump.password'))
            ->includeTables(config('dump.includeTables'))
            ->dumpToFile(config('dump.file'));
    }
}
