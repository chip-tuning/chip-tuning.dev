<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['question', 'answer'];

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
