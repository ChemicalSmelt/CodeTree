<?php

namespace App\Policies;

use App\Models\User;
use App\Models\node;
use Illuminate\Auth\Access\HandlesAuthorization;

class nodePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\node  $node
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, node $node)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\node  $node
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, node $node)
    {
        //
        return $node->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\node  $node
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, node $node)
    {
        //
        return $this->update($user, $node);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\node  $node
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, node $node)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\node  $node
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, node $node)
    {
        //
    }
}
