<?php

namespace App\Policies;

use App\Models\User;

class ReportPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function browse(User $user, Report $report)
    {
        return $user->hasRole('coach'); // or any other logic
    }

}
