<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
		use WithFaker, RefreshDatabase;
		
		/** @test */
		public function a_user_can_create_a_project () 
		{
			$attributes = [
				'title' => $this->faker->sentence,
				'description' => $this->faker->paragraph
			];
			$this->post('/projects', $attributes);
			$this->assertDatabaseHas('projects', $attributes);
		}
}
