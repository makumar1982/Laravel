<?php

class ContactController extends BaseController {
public $request='';
	public function getcontact()
	{
		return View::make('hello');
	}

}