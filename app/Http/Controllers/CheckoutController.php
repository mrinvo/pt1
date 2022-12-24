<?php

namespace App\Http\Controllers;
use Paytabscom\Laravel_paytabs\Facades\paypage;


use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function view_checkout_page(){
        return view('checkout');
    }

    public function initiate_payment(Request $request){

        $cart_id = $request->cart_id;
        $cart_amount = $request->cart_amount;
        $cart_description = $request->cart_description;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $street1 = $request->street1;
        $city = $request->city;
        $state = $request->state;
        $country = $request->country;
        $zip = $request->zip;
        $ip = $request->ip();
        $same_as_billing = true;
        $return = route('home');
        $callback = route('call_back');
        $language = 'ar';

        $pay = paypage::sendPaymentCode('all')
        ->sendTransaction('auth')
        ->sendCart($cart_id, $cart_amount, $cart_description)
        ->sendCustomerDetails($name, $email, $phone, $street1, $city, $state, $country, $zip, $ip)
        ->sendShippingDetails($same_as_billing, $name = null, $email = null, $phone = null, $street1= null, $city = null, $state = null, $country = null, $zip = null, $ip = null)
        ->sendHideShipping($on = true)
        ->sendURLs($return, $callback)
        ->sendLanguage($language)
        ->sendFramed($on = false)
        ->create_pay_page(); // to initiate payment page

        return $pay;
    }

    public function call_back(Request $request){
        dd($request);
    }

    public function query($tran_ref){

        $transaction = Paypage::queryTransaction($tran_ref);

        dd($transaction);

    }

    public function capture(){
        $capture = Paypage::capture('TST2235801417581','1','15','capture description');
        return $capture;
    }

    public function void(){
        $void = Paypage::void('TST2235801417580','1','30','capture description');
        return $void;
    }

    public function refund(){
        $refund = Paypage::refund('TST2235701417543','1','15','refund_reason');

        return $refund;
    }
}
