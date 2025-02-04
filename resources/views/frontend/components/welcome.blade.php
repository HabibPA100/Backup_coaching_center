@if (session('welcome_message'))
    <!-- Overlay Background -->
    <div id="welcome-message-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
        <!-- Message Card -->
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <h2 class="text-xl text-center font-bold mb-4 text-gray-800">আস-সালামু আলাইকুম ওয়া-রাহমাতুল্লাহি ওয়া-বারাকাতুহ। </h2>
            <p class="text-center text-green-800">আপনার প্রতি মহান আল্লাহ্‌র পক্ষ্য থেকে শান্তি, দয়া ও বরকত বর্ষিত হোক।</p>
            <p class="text-gray-600 mb-6 text-center">Hello  <span class="text-2xl text-red-600">{{ session('welcome_message') }}</span>  Welcome To BackUp!</p>
            <div class="flex justify-end">
                <button id="close-message-btn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Ok
                </button>
            </div>            
        </div>
    </div>

    <!-- Script to Close the Message -->
    <script>
        document.getElementById('close-message-btn').addEventListener('click', function () {
            document.getElementById('welcome-message-overlay').style.display = 'none';
        });
    </script>
@endif
