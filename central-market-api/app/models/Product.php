<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';

	protected $hidden = array('deleted_at');

	public $timestamps = true;
}