<?php

namespace App\Console\Commands;

use App\WithoutTableName;
use App\WithTableName;
use Artisan;
use Illuminate\Console\Command;

class BenchmarkTableTests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'benchmark:table-names {amount?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    	$argument = $this->argument('amount');
        $amount = $argument ? intval($argument) : 1000;

	    Artisan::call('migrate:refresh');

	    $timeToCreateWithTable = $this->createEntries(WithTableName::class, $amount);
	    $this->info("Created ". $amount .' entries with table name in '. $timeToCreateWithTable .' seconds');

	    $timeToDeleteWithTable = $this->deleteEntries(WithTableName::class);
		$this->info("Deleted them in ". $timeToDeleteWithTable .' seconds');

	    Artisan::call('migrate:refresh');

	    $timeToCreateWithoutTableName = $this->createEntries(WithoutTableName::class, $amount);
	    $this->info("Created ". $amount .' entries without table name in '. $timeToCreateWithoutTableName .' seconds');

	    $timeToDeleteWithoutTableName = $this->deleteEntries(WithoutTableName::class);
	    $this->info("Deleted them in ". $timeToDeleteWithoutTableName .' seconds');

	    Artisan::call('migrate:refresh');
    }

	/**
	 * @param $class
	 * @param $amount
	 *
	 * @return mixed
	 */
	private function createEntries($class, $amount) {
	    $start = microtime(true);

	    for ($i = 0; $i < $amount; $i ++) {
		    $class::create();
	    }

	    $end = microtime(true);

	    return $this->formatTime($end - $start);
    }

	/**
	 * @param $class
	 *
	 * @return mixed
	 */
	private function deleteEntries($class) {
		$start = microtime(true);

		$class::chunk(100, function ($chunk) {
			$chunk->each(function ($item) {
				$item->delete();
			});
		});

		$end = microtime(true);

		return $this->formatTime($end - $start);
    }

    private function formatTime($time) {
    	return number_format($time, 6);
    }
}
