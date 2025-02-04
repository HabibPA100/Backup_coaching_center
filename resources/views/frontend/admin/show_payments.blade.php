<x-frontend-admin-app-layout>
    <div>
        <div class="container mx-auto p-4">
            @if($Payments->isNotEmpty())
                <!-- গ্রিড কন্টেইনার -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($Payments as $payment)
                        <!-- প্রতিটি কার্ড -->
                        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
                            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow p-3">
                                <p class="text-lg"> পেমেন্টের পরিমাণঃ- <mark>{{ $payment->paymentAmount }} টাকা</mark> </p>
                                <p class="text-lg"> বেজ নাম্বারঃ- <mark> {{ $payment->batchNumber }} </mark></p>
                                <p class="text-lg"> পেমেন্ট নাম্বারঃ:- <mark> {{ $payment->paymentNumber }} </mark> </p>
                                <p class="text-lg"> শিক্ষার্থীর নামঃ- <mark> {{ $payment->studentName }} </mark> </p>
                                <p class="text-lg"> ক্লাসের নামঃ- <mark> {{ $payment->className }} </mark> </p>
                                <p class="text-lg"> মাসের নামঃ- <mark> {{ $payment->month }} </mark> </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">No Salary Data Found</p>
            @endif
        </div>
    </div>
</x-frontend-admin-app-layout>