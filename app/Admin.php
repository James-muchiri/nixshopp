<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tel_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];







    public function isSuperAdmin() : bool
    {
        return (bool) $this->is_super_admin;
    }

    /**
     * Create admin.
     *
     * @param array $details
     * @return array
     */
    public function createSuperAdmin(array $details) : self
    {
        $user = new self($details);

        // if (! $this->superAdminExists()) {
        //    
        // }
        $user->is_super_admin = 1;
        $user->save();

        return $user;
    }

    /**
     * Checks if super admin exists
     *
     * @return integer
     */
    public function superAdminExists() : int
    {
        return self::where('is_super_admin', 1)->count();
    }



    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }
    /**
     * Checks if User has access to $permissions.
     */
    public function hasAccess(array $permissions) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;
            }
        }
        return false;
    }
    /**
     * Checks if the user belongs to role.
     */
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
    public function getRoleNames()
    {
        return $this->roles->pluck('name');
    }



}
