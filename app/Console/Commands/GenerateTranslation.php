<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateTranslation extends Command
{
    protected $signature = 'translation:generate {locale}';
    protected $description = 'Generate a translation file for the given locale';

    public function handle()
    {
        $locale = $this->argument('locale');
        $path = lang_path($locale . '/messages.php');

        if (!File::exists(lang_path($locale))) {
            File::makeDirectory(lang_path($locale));
        }

        File::put($path, "<?php\nreturn [];\n");
        $this->info("Translation file created for: $locale");
    }
}