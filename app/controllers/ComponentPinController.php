<?php

class ComponentPinController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$values = Value::all();

		return Response::json($values);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$params = Input::only(['component', 'pin', 'value']);

		$value = Value::create($params);

		return Response::json($value);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$value = Value::find($id);

		return Response::json($value);
	}


}
