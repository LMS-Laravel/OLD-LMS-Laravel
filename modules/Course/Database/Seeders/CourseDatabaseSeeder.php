<?php namespace Modules\Course\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

use Modules\Course\Entities\Course;
use Modules\Course\Entities\Lesson;
use Modules\Course\Entities\Module;


class CourseDatabaseSeeder extends Seeder {


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		$this->courseSeeder();
		$this->moduleSeeder();
		$this->lessonSeeder();
	}

	private function courseSeeder()
	{
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			Course::create([
				'name'=> $faker->text(20),
				'description'=> $faker->text(300),
				'level'=> $faker->numberBetween(1, 3),
				'type' => $faker->numberBetween(0, 1),
				'teacher_id'=>1,
			]);
		}

	}

	private function moduleSeeder()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Module::create([
				'name' => $faker->text(20),
				'description' => $faker->text(100),
				'course_id' => $faker->numberBetween(1, 5)
			]);
		}
	}

	private function lessonSeeder()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Lesson::create([
				'title' => $faker->text(20),
				'content' => $faker->text(1000),
				'resource' => '06olHmcJjS0',
				'download' => $faker->url,
				'type' => $faker->numberBetween(0,1),
				'module_id' => $faker->numberBetween(1, 20),
				'teacher_id' => 1
			]);
		}
	}

}