@extends('layouts.app')
<button class="poibtn btn btn-md m-0 mb-3" data-toggle="modal" data-target="#bkashModal">Pay with Bkash</button>

<div class="modal top fade" id="bkashModal">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body bkash-body p-0">
                    <img src="/bkash_payment_logo.png" class="img-fluid" alt="">

                   <div class="bkash-card m-3 p-4">
                       <p class="text-white">Merchant Id: snackys.com</p>
                       <p class="text-white">Invoice No. XXXXXX</p>
                       {{-- <p class="text-white">Amount: {{ $total }}</p> --}}
                   </div>
                   <div class="p-4">
                   <p class="text-center text-white"> Your bkash Number</p>
                   <input type="text" class="form-control bkash-input" placeholder="e.g.01XXXXXXXX" id="">
                   <div class="d-flex justify-content-between mx-3 mt-2">
                       <button class="btn text-white">Proceed</button>
                       <button class="btn text-white" data-dismiss="modal">close</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
 <style>
.bkash-body{
    background-color: #e3156f;
}
.bkash-card{
    color: white!important;
    border-radius: 20px;
    box-shadow: 0px 10px 20px 0px rgba(8, 6, 89, 0.1);
}
.bkash-input{
    background: ghostwhite!important;
}
</style>
