<?php

namespace SammyKariuki\Pesaway;

class Pesaway
{
    /**
     * The common part of the PesaWay API endpoints
     * @var string $base_url
     */
    private $base_url;
    /**
     * The consumer key
     * @var string $consumer_key
     */
    public $consumer_key;
    /**
     * The consumer key secret
     * @var string $consumer_secret
     */
    public $consumer_secret;
    /**
     * The MPesa Paybill number
     * @var int $paybill
     */
    public $paybill;
    /**
     * The Lipa Na MPesa paybill number
     * @var int $lipa_na_mpesa
     */
    
    
	
	
	/**
     * Construct method
     *
     * Initializes the class with an array of API values.
     *
     * @param array $config
     * @return void
     * @throws exception if the values array is not valid
     */

    public function __construct()
    {
        $this->base_url = 'https://engine.pesaway.com/api/epayments/';
        
		//Base URL for the API endpoints. This is basically the 'common' part of the API endpoints
         
		$this->consumer_key = config('mpesa.consumer_key'); 	//App Key. This is supplied by PesaWay
         
		$this->consumer_secret = config('mpesa.consumer_secret'); 					//App Secret Key. This is supplied by PesaWay
        $this->paybill =config('mpesa.paybill'); 									//The paybill/till/lipa na mpesa number that is integrated by PesaWay
       
    }
	
	private function submit_request($url, $data)
    { // Returns cURL response
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: Bearer '.$access_token));

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
    }
	
	public function pay_bill($amount, $phone, $order_id)
    {
        //this function will set b2c credentials
        $this->setCred();
        $request_data = array
            'amount' => $amount,
            'order_id' => $order_id,
            'phone_number' => $phone,
            'consumer_key' => $remarks,
            'consumer_secret' => $this->consumer_key
        );
        $data = json_encode($request_data);
        $url = $this->base_url.'process-checkout-payment/';
        $response = $this->submit_request($url, $data);
        return $response;
    }
	
	public function verify_payment($amount, $phone, $payment_receipt)
    {
        //this function will set b2c credentials
        $this->setCred();
        $request_data = array
            'amount' => $amount,
            'payment_receipt' => $payment_receipt,
			'paybill_number' => $this->paybill,
            'phone_number' => $phone,
            'consumer_key' => $remarks,
            'consumer_secret' => $this->consumer_key
        );
        $data = json_encode($request_data);
        $url = $this->base_url.'process-checkout-payment/';
        $response = $this->submit_request($url, $data);
        return $response;
    }


}
