<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['question', 'answer'];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * Set the question.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setQuestionAttribute($value)
	{
		$this->attributes['question'] = ucfirst($value);
	}

	/**
	 * Set the answer.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setAnswerAttribute($value)
	{
		$this->attributes['answer'] = ucfirst($value);
	}
}
