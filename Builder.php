<?php

class Nutrition_Facts_Builder
{
	private $serving_size;
	private $servings;
	private $calories = 0;
	private $fat = 0;
	private $sodium = 0;
	private $carbohydrate = 0;

	public function __construct($serving_size, $servings)
	{
		$this->serving_size = $serving_size;
		$this->servings = $servings;
	}

	public function calories($val)
	{
		$this->calories = $val;
		return $this;
	}

	public function fat($val)
	{
		$this->fat = $val;
		return $this;
	}

	public function sodium($val)
	{
		$this->sodium = $val;
		return $this;
	}

	public function carbohydrate($val)
	{
		$this->carbohydrate = $val;
		return $this;
	}

	public function build()
	{
		return [
			'serving_size' => $this->serving_size,
			'servings' => $this->servings,
			'calories' => $this->calories,
			'fat' => $this->fat,
			'sodium' => $this->sodium,
			'carbohydrate' => $this->carbohydrate,
		];
	}
}