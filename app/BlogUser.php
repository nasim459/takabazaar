<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BlogUser extends Authenticatable
{
    use Notifiable;
    protected $table = 'blogusers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'user_email', 'user_pass', 'user_image', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_pass', 'remember_token',
    ];

    public function getAuthPassword() {
        return $this->user_pass;
    }

    public function getAuthEmail() {
        return $this->user_email;
    }


    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        // Check if the user is a root account
        if ($this->have_role->name == 'Root') {
            return true;
        }

        if (is_array($roles)) {
            foreach ($roles as $need_role) {
                if ($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }

    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role) == strtolower($this->have_role->name)) ? true : false;
    }

    private function getUserRole()
    {
        return $this->role()->getResults();
    }
}
