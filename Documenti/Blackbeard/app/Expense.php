<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['date', 'amount', 'description', 'name', 'category_id'];

    public function category() {
        
		return $this->belongsTo('App\Category');
	}

	public function categoryName() {
		return $this->category->name;
	}

}
