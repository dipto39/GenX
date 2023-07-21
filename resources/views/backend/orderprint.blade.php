@extends('backend.layouts.main')

@section('content')
<div class="printData p-4 w-full overflow-auto h-full pb-20">
    <div class="mb-20" style="row-gap: 0px;">
        <div class="col-lg-12" style="width: 100%;">
            <div class="card" style="box-shadow: none;">
                <div class="card-body">
                    <div class="invoice-title flex justify-between">
                        <div class="mb-4"><img src="{{asset('/assets/logo/logo.png')}}" alt="logo" height="20"></div>
                        <h4 class="float-end font-size-16">Order # GX-345665</h4>
                        
                    </div>
                    <hr>
                    <div class="flex justify-between pt-3" style="row-gap: 0px;">
                        <div class="col-6">
                            <address><strong>Bill To:</strong><br>fasd<br>dasf, fdasf<br>asdfa, Afghanistan<br>213</address>
                        </div>
                        <div class="text-end col-6">
                            <address><strong>Shipped To:</strong><br>fasd<br>dasf, fdasf<br>asdfa, Afghanistan<br>213
                            </address>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="mt-3 col-6">
                            <address><strong>Payment Method:</strong><br><br></address>
                        </div>
                        <div class="mt-3 text-end col-6">
                            <address><strong>Order Date:</strong><br><br></address>
                        </div>
                    </div>
                    <div class="py-8">
                        <h3 class="font-size-15 fw-bold">Order summary</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b">
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th class="text-center">Unit Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-end">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td style="max-width: 300px;">Asus Zenbook Flip Intel Core i7
                                        1165G7 2.80GHZ, 16GB RAM, 1TB SSD, 13.3" UHD 4K Flip Touch With Stylus Pen,
                                        Windows 10 Home, Eng-Arabic Keyboard, Black | UX371EA-HL003T</td>
                                    <td class="text-center">AED 6615.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">AED 6615.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">Sub Total</td>
                                    <td class="text-end">AED 6615.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="border-0 text-end"><strong>Shipping Fee</strong></td>
                                    <td class="border-0 text-end">AED 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="border-0 text-end"><strong>Tax</strong></td>
                                    <td class="border-0 text-end">AED 2646.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="border-0 text-end"><strong>Discount</strong></td>
                                    <td class="border-0 text-end">AED 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="border-0 text-end"><strong>Total</strong></td>
                                    <td class="border-0 text-end">
                                        <h4 class="m-0">AED 9261.00</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right mt-10 cursor-pointer" onclick="handlePrint()">
                        <div class="">
                            <a class="me-2 bg-blue-400 text-white px-4 py-2">
                                <i class="fa fa-print me-1"></i> 
                                <span class="tw-font-medium">Print</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
     const handlePrint = () => {
            var printDiv = document.querySelector('.printData');
                var printWindow = window.open('', '', 'left=0, top=0, width=800, height=500, toolbar=0, scrollbars=0, status=0');
                printWindow.document.write(printDiv.innerHTML);
                printWindow.document.close();
                printWindow.focus();
                printWindow.print();
         }
</script>
@endsection
