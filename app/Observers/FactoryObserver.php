<?php

namespace App\Observers;

use App\Models\Factory;
use App\Models\UserActivity;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FactoryObserver
{
    /**
     * Handle the Factory "created" event.
     */
    public function created(Factory $factory): void
    {
        Log::info(Factory::class, [
            'user_id' => Auth::id(),
            'original' => [],
            'changes' => $factory->getAttributes(),
        ]);
    }

    /**
     * Handle the Factory "updated" event.
     */
    public function updated(Factory $factory): void
    {
        Log::info(Factory::class, [
            'user_id' => Auth::id(),
            'original' => $factory->getOriginal(),
            'changes' => $factory->getChanges(),
        ]);
    }

    /**
     * Handle the Factory "deleted" event.
     */
    public function deleted(Factory $factory): void
    {
        $original = $factory->getOriginal();
        $changes = Arr::only($original, ['deleted_at']);

        Log::info(Factory::class, [
            'user_id' => Auth::id(),
            'original' => $original,
            'changes' => $changes,
        ]);
    }
}
