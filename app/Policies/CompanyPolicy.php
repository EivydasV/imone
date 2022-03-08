<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Company;

use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function delete(User $user, Company $company)
    {
        dd($user);
        return $user->id === $company->user_id;
    }
}
