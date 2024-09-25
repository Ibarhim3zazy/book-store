<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeTraitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a naw trait file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Traits/{$name}.php");

        if (File::exists($path)) {
            $this->error("Trait {$name} already exists!");
            return;
        }

        // Ensure the Traits directory exists
        if (!File::isDirectory(app_path('Traits'))) {
            File::makeDirectory(app_path('Traits'), 0755, true);
        }

        // Create the trait file with a default template
        $stub = "<?php\n\nnamespace App\Traits;\n\ntrait {$name}\n{\n    // Your methods here\n}\n";
        File::put($path, $stub);

        $this->line("\n<bg=blue> INFO </> Console command <options=bold>[{$path}]</> created successfully.\n");
    }
}
