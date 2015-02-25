<?php

include(app_path().'/includes/Veritrans.php');

class ChargingController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//read json input
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$token_id = Input::get('token');
		$price = Input::get('price');
		
		Veritrans_Config::$serverKey = "VT-server-sTIr2MYh4e6v9eI2C4gbD31l";
		Veritrans_Config::$isProduction = false;
		
		
		$transaction_details = array(
		  'order_id'    => rand(),
		  'gross_amount'  => $price
		);
		
		$transaction_data = array(
		  'payment_type'      => 'credit_card',
		  'credit_card'       => array(
		    'token_id'  => $token_id
		    ),
		  'transaction_details'   => $transaction_details,
		  );
		try{
		        $result = Veritrans_VtDirect::charge($transaction_data);
		        $json = json_encode($result);
				return Response::json(array(
					'status' => 'success',
					'body' => $json
				));
		}catch(Exception $e){
		        return Response::json(array(
		        	'status' => 'fail',
		        	'body' => $e
		        ));
		}				
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
