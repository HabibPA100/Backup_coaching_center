<x-frontend-admin-app-layout>
    <div class="container mx-auto p-4">
        @if($LeaveTakes->isNotEmpty())
            <!-- গ্রিড কন্টেইনার -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($LeaveTakes as $leave)
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
                                <button class="text-lg bg-yellow-600 ms-4 p-2 rounded-lg font-medium text-white">
                                <a href="{{ route('admin-leave-list.edit', $leave->id) }}">Edit</a>
                                </button>
                            </div>
                        </div>
                        <form action="{{ route('admin-leave-list.destroy', $leave->id) }}" method="POST" style="display: inline-block; margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white font-bold px-4 py-2 rounded-t-md bg-red-700 btn-sm">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No Leave Information Found For You</p>
        @endif
    </div>
</x-frontend-admin-app-layout>