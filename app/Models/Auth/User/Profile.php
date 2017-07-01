<?php

namespace App\Models\Auth\Profile;

class Profile extends Model
{
    use Rolable,
        UserAttributes,
        UserScopes,
        UserRelations,
        Notifiable,
        SoftDeletes,
        Sortable;

    public $sortable = ['name', 'email', 'created_at', 'updated_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'address', 'city', 'state', 'zip', 'usertype', 'usersubtype', 'mortgaged', 'licenced', 'licence_nr', 'phone', 'password', 'active', 'confirmation_code', 'confirmed'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
	
}