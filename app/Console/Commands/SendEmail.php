<?php

namespace App\Console\Commands;

use App\Jobs\SendAuthMail;
use App\Models\User;
use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'envio:enviarEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviando e-mail para usuario';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::find(1);
        SendAuthMail::dispatch($user);

        return Command::SUCCESS;
    }
}
