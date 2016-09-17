<?php

class Info_test extends TestCase
{
	public function test_index()
	{
		//$output = $this->request('GET', URL . '/info');
		//$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
		$output = $this->request('GET', '/');
		$this->assertContains('data information', $output);
	}
}
