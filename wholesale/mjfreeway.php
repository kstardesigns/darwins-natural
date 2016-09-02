<?php

class MJFreewayAPI {

	var $api_id = '21449385625761dcbaae84d2.76554686';
	var $api_key = '2374944035761dfbdeb14b2.55876098';
	var $api_version = 1;
	var $subscriber_alias = 'DarwinsNatural';	
	var $location_nid = 45;
	
	function __construct(  ) {}

	public function PlaceOrder($patient_nid, $first_name, $last_name, $email, $phone_number, $line_items) {
		try {

			$order_id = null;

			//var_dump($line_items);
			//var_dump($line_items['line_items']);

			// Add the line items to the order - MJ Freeway API: update_order
			foreach ($line_items['line_items'] as $item) {

				//var_dump($item);
				var_dump($item['sku']);
				//var_dump($item['qty']);
				
				$response = $this->update_order($order_id, $patient_nid, $first_name, $last_name, $email, $phone_number, $item['sku'], $item['qty']);

				//var_dump($response);

				if ($response == null || !$this->process_response_code($response->response_code)) {
				    throw new Exception('There was an error processing the line item. Bad response code.');
				}

				$response = json_decode($response);

				if ($response == null || $response->response_code == null) {
				    throw new Exception('There was an error processing the line item. Bad response code.');
				}

				if ($response->response_details->success) {
				    if (empty($order_id)) $order_id = $response->response_details->order_id;
				    if (empty($patient_nid)) {
				        $patient_nid = $response->response_details->patient_nid;
						$_SESSION['MJFreewayID'] = $patient_nid;
				    }
				} else {
				    throw new Exception('There was an error processing the line item. Not successful.');
				}
					
			}

			// Complete the order - MJ Freeway API: complete_order
			$response = $this->complete_order($order_id, $patient_nid);
			$response = json_decode($response);

			//var_dump($response);

			if ($response->response_code != null && !$this->process_response_code($response->response_code)) {
				throw new Exception('There was an error processing the order. Bad response code.');
			}

			if ($response != null && !$response->response_details->success) {
				throw new Exception('There was an error processing the order. Not successful.');
			}

			return $patient_nid;

		}
		catch (Exception $e) {
			//var_dump($e);
			return false;
		}
	}

	private function update_order($order_id, $patient_nid, $first_name, $last_name, $email, $phone_number, $product_sku, $qty) {
		return $this->make_api_call('update_order', $this->get_api_fields($this->get_line_item_fields($order_id, $patient_nid, $first_name, $last_name, $email, $phone_number, $product_sku, $qty)));
	}

	private function complete_order($order_id, $patient_nid) {
		return $this->make_api_call('complete_order', $this->get_api_fields($this->get_order_fields($order_id, $patient_nid)));
	}

	private function process_response_code($response_code) {

		// ERROR BADSKUID The product sku is invalid and does not exist on the system or is inactive. 
		if (substr( $response_code, 0, 5 ) === "ERROR") {
			return false;

			// TODO: Implement response code check
			//BADPATIENTID
			//The patient ID given was not a valid ID existing in the system.
			//BADORDERID
			//The Order ID given was not a valid ID existing in the system.
			//BADORDERPRODUCTID
			//The Order Product ID given was not a valid ID existing in the system.
			//BADFIRSTNAME
			//The first name is required if we do not have a patient_nid.
			//BADLASTNAME
			//The last name is required if we do not have a patient_nid.
			//BADEMAIL
			//The email is required if we do not have a patient_nid.
			//BADPHONENUMBER
			//The phone number is required if we do not have a patient_nid.
		}
		return true;
	}

	private function get_api_fields($data) {
		return array(
			'API_ID' => $this->api_id,
			'API_KEY' => $this->api_key,
			'location_nid' => $this->location_nid,
			'version' => $this->api_version,
			'data' => json_encode($data)
		);
	}

	private function get_line_item_fields($order_id, $patient_nid, $first_name, $last_name, $email, $phone_number, $product_sku, $qty) {
		if (empty($patient_nid)) {
			return array(
				'order_id' => $order_id,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'phone_number' => $phone_number,
				'product_sku' => $product_sku,
				'qty' => $qty,
				'order_source' => 'Online' // 'darwinsnatural.com'
			);
		} else {
			return array(
				'order_id' => $order_id,
				'patient_nid' => $patient_nid,
				'product_sku' => $product_sku,
				'qty' => $qty,
				'order_source' => 'Online' // 'darwinsnatural.com'
			);
		}
	}

	private function get_order_fields($order_id, $patient_nid) {
		return array(
			'order_id' => $order_id,
			'patient_nid' => $patient_nid,
			'payment_type' => 'cash',
			'register_id' => '',
			'order_source' => 'Online' // 'darwinsnatural.com'
		);
	}

	private function make_api_call($function, $fields) {

		//var_dump($fields);
										
		$mj_freeway_endpoint = "https://i2.gomjfreeway.com/{$this->subscriber_alias}/api/order/{$function}";

		//var_dump($mj_freeway_endpoint);

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $mj_freeway_endpoint );

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_STDERR, fopen(dirname(__FILE__).'/errorlog.txt', 'w'));

		//curl_setopt($ch, CURLINFO_HEADER_OUT, TRUE);
		//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		//        'Content-Type: application/json',
		//        'Cache-Control: no-cache'
		//));

		$response = curl_exec($ch);
		
		//var_dump(curl_getinfo($ch));		

		curl_close($ch);

		var_dump($response);

		//Upon successful receipt of the HTTP request, 
		//the API will return a JSON object named r
		//response_header containing the following 
		//additional details:
		//response_code, response_details
		return $response;
	}

}

?>