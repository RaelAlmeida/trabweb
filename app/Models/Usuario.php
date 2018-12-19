<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 19 Dec 2018 19:33:21 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property string $first_name
 * @property string $last_name
 * @property string $pais
 * @property string $estado
 * @property string $cidade
 * @property string $email
 * @property string $password
 * @property int $id
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'pais',
		'estado',
		'cidade',
		'email',
		'password'
	];
}
