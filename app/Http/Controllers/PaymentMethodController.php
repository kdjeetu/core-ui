<?php

namespace App\Http\Controllers;

use App\Models\Payment_Method;
use App\Http\Requests\StorePayment_MethodRequest;
use App\Http\Requests\UpdatePayment_MethodRequest;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods = Payment_Method::all();
        return view('dashboard.payment_methods.index', compact('payment_methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.payment_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePayment_MethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment_MethodRequest $request)
    {
        payment_method::create($request->all());
        return redirect()->route('payment_methods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_Method $payment_Method)
    {
        return view('dashboard.payment_methods.show', compact('payment_Method'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_Method $payment_Method)
    {
        return view('dashboard.payment_methods.edit', compact('payment_Method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePayment_MethodRequest  $request
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePayment_MethodRequest $request, Payment_Method $payment_Method)
    {
        $payment_Method->update($request->all());
        return redirect()->route('payment_methods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment_Method  $payment_Method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_Method $payment_Method)
    {
        $payment_Method->delete();
        return redirect()->route('payment_methods.index');
    }
}
