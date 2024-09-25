<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeHelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:helper {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a naw Helper file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Helpers/{$name}.php");

        if (File::exists($path)) {
            $this->error("Helper {$name} already exists!");
            return;
        }

        // Ensure the Helpers directory exists
        if (!File::isDirectory(app_path('Helpers'))) {
            File::makeDirectory(app_path('Helpers'), 0755, true);
        }

        // Create the trait file with a default template
        $stub = "<?php\n\nfunction functionName() {\n    // Your code here\n}";
        File::put($path, $stub);

        $this->line("\n<bg=blue> INFO </> Console command <options=bold>[{$path}]</> created successfully.\n");
    }
}
