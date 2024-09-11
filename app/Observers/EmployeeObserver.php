<?php

namespace App\Observers;

use App\Models\Employee;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EmployeeObserver
{
    /**
     * Handle the Employee "created" event.
     */
    public function created(Employee $employee): void
    {
        Log::info(Employee::class, [
            'user_id' => Auth::id(),
            'original' => [],
            'changes' => $employee->getAttributes(),
        ]);
    }

    /**
     * Handle the Employee "updated" event.
     */
    public function updated(Employee $employee): void
    {
        Log::info(Employee::class, [
            'user_id' => Auth::id(),
            'original' => $employee->getOriginal(),
            'changes' => $employee->getChanges(),
        ]);
    }

    /**
     * Handle the Employee "deleted" event.
     */
    public function deleted(Employee $employee): void
    {
        $original = $employee->getOriginal();
        $changes = Arr::only($original, ['deleted_at']);

        Log::info(Employee::class, [
            'user_id' => Auth::id(),
            'original' => $original,
            'changes' => $changes,
        ]);
    }
}
