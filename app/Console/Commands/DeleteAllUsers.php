<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Note;

class DeleteAllUsers extends Command
{
    protected $signature = 'users:delete-all';
    protected $description = 'Tum kullanicilari veri tabanindan sil';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Note::query()->delete();
        User::query()->delete();
        $this->info('Tum kullanicilar silindi.');
    }
}
