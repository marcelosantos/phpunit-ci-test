<?php

class Info_test extends TestCase
{
	public function test_index()
	{
        try {
			$output = $this->request('GET', 'info/index');
		} catch (CIPHPUnitTestExitException $e) {
			$output = ob_get_clean();
		}
		$this->assertContains('information', $output);
	}

    public function test_list()
	{
        $output = $this->request('GET', 'info/list');
		$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
	}
}
