<?php

class ComponentPinController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($component)
	{
		$values = Value::where('component', '=', $component)->get();

		return Response::json($values);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($component, $pin)
	{
		$value = Input::get('value');

		$val = Value::create([
			'component' => $component,
			'pin' => $pin,
			'value' => $value
		]);

		return Response::json($val);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($component, $pin)
	{
		$value = Value::where('component', '=', $component)->where('pin', '=', $pin)->firstOrFail();

		return Response::json($value);
	}


}
