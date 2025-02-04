<x-app-layout>
    <section id="leave_later">
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">ছুটির আবেদন ফরম</h2>
            <form action="{{ route('leave-application.store') }}" method="POST">
              @csrf
              <!-- Name Field -->
              <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700">শিক্ষার্থীর নাম</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" placeholder="আপনার নাম লিখুন">
              </div>
              @error('name')
                  <div class="text-red-700">{{ $message }}</div>
              @enderror
              <!-- Class Selection -->
              <div class="mb-4">
                <label for="class" class="block text-lg font-medium text-gray-700">শ্রেণি</label>
                <select id="class" name="class" value="{{ old('class') }}" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
                  <option value="">শ্রেণি নির্বাচন করুন</option>
                        <option value="ষষ্ঠ শ্রেণি">ষষ্ঠ শ্রেণি</option>
                        <option value="সপ্তম শ্রেণি">সপ্তম শ্রেণি</option>
                        <option value="অষ্টম শ্রেণি">অষ্টম শ্রেণি</option>
                        <option value="নবম শ্রেণি">নবম শ্রেণি</option>
                        <option value="দশম শ্রেণি">দশম শ্রেণি</option>
                        <option value="ইন্টার ১ম"> ইন্টার ১ম</option>
                        <option value="ইন্টার ২য়"> ইন্টার ২য়</option>
                </select>
              </div>
              @error('class')
                  <div class="text-red-700">{{ $message }}</div>
              @enderror

              <!-- Leave Start Date -->
              <div class="mb-4">
                <label for="start_date" class="block text-lg font-medium text-gray-700">ছুটির শুরুর তারিখ</label>
                <input type="date" id="start_date" value="{{ old('start_date') }}" name="start_date" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
              </div>
              @error('start_date')
                  <div class="text-red-700">{{ $message }}</div>
              @enderror

              <!-- Leave End Date -->
              <div class="mb-4">
                <label for="end_date" class="block text-lg font-medium text-gray-700">ছুটির শেষ তারিখ</label>
                <input type="date" id="end_date" value="{{ old('end_date') }}" name="end_date" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
              </div>
              @error('end_date')
                  <div class="text-red-700">{{ $message }}</div>
              @enderror
              <!-- Reason -->
              <div class="mb-4">
                <label for="reason" class="block text-lg font-medium text-gray-700">ছুটির কারণ</label>
                <textarea id="reason" name="reason" rows="4" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" placeholder="ছুটির কারণ লিখুন">{{ old('reason') }}</textarea>
              </div>
              @error('reason')
                  <div class="text-red-700">{{ $message }}</div>
              @enderror
              
              <!-- Submit Button -->
              <div class="text-center">
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                  আবেদন করুন
                </button>
              </div>
            </form>
          </div>
    </section>
    <section id="leave-info">
      <div class="container mx-auto p-4">
        @if($Leaves->isNotEmpty())
            <!-- গ্রিড কন্টেইনার -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($Leaves as $leave)
                    <!-- প্রতিটি কার্ড -->
                    <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
                        <div class="max-w-sm bg-white my-3 border p-3 border-gray-200 rounded-lg shadow dark:bg-white dark:border-gray-700">
                            <p class="text-lg"> Your Name: <span class="text-red-500"> {{ $leave->name }} </span> </p>
                            <p class="text-lg"> Your Class Name: <span class="text-red-500"> {{ $leave->class }} </span> </p>
                            <p class="text-lg"> Start Date: <span class="text-red-500"> {{ $leave->start_date }} </span> </p>
                            <p class="text-lg"> End Date: <span class="text-red-500"> {{ $leave->end_date }} </span> </p>
                            <p class="text-lg"> You Massage: </p>
                            <p class="text-red-500"> {{ $leave->reason }} </p> 
                            <div class="flex justify-end mt-4">
                              <button class="text-lg bg-black p-2 rounded-lg font-medium text-white">
                                  {{ $leave->status }}
                              </button>
                            </div> 
                        </div>
                        
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Leave Information Found For You</p>
        @endif
    </div>
    </section>
</x-app-layout>