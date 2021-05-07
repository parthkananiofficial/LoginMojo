<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Log;

trait LogTrait
{

    public function log_start_task($task)
    {
        try {
            $this->timings[$task]['start'] = microtime(true);
            if (!isset($this->timings[$task]['total']))
                $this->timings[$task]['total'] = 0;
        } catch (\Throwable $exception) {
        }
    }
    public function log_stop_task($task)
    {
        $this->timings[$task]['total'] += microtime(true) - $this->timings[$task]['start'];
    }
    public function log_print_timings($timings, $header = "")
    {
        $total_time = 0;
        foreach ($timings as $timing) {
            $total_time += $timing['total'];
        }
        //print the log started
        $message = "\n";
        $message .= "- - - - - - - - - - - - - - " . $header . " Performance- - - - - - - - - - - - - - - - -\n";
        $message .= "- Sec  -  %  - - - - - - - Activity- - - - - - - - - - - - - - - - - - - -\n";
        foreach ($timings as $task => $timing) {
            $percent = $timing['total'] / $total_time * 100;
            $message .= sprintf('%05d', $timing['total']) . " | " . number_format($percent, 2) . " | " . "TASK : " . $task . "\n";
        }
        $message .= "- - - - - - - - - - - Time taken in seconds : " . number_format($total_time, 2) . " - - - - - - - - - - \n";
        $message .= "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
        Log::debug($message);
    }
}
