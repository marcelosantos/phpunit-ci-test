<?php

class User_test extends TestCase
{
	public function test_index()
	{
        try {
			$output = $this->request('GET', 'user/index');
		} catch (CIPHPUnitTestExitException $e) {
			$output = ob_get_clean();
		}
		$this->assertEquals(
			'[{"id":1,"name":"John","email":"john@example.com","fact":"Loves coding"},{"id":2,"name":"Jim","email":"jim@example.com","fact":"Developed on CodeIgniter"},{"id":3,"name":"Jane","email":"jane@example.com","fact":"Lives in the USA","0":{"hobbies":["guitar","cycling"]}}]',
			$output
		);
		$this->assertResponseCode(200);
	}

}
