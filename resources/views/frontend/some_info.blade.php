<x-app-layout>
    <x-slot name="header">
        <img 
            src="{{ asset('frontend/images/profile/cover.webp') }}" 
            alt="A beautiful example image" 
            class="rounded-lg shadow-md w-full max-w-md mx-auto"
            />
    </x-slot>
    <x-slot name="welcome">
        Welcome <span class="text-3xl"> &#128075; </span> <span class="text-red-700"> <p class="text-3xl"> &hearts; &hearts; {{ Auth::user()->name }} &hearts; &hearts; </p> </span> 
    </x-slot>
    <div class="py-12">
        <div class="container mx-auto p-6">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-blue-500 text-white text-center py-6">
                    <h1 class="text-4xl font-bold">About Us</h1>
                    <p class="mt-2 text-lg">Learn more about Backup Coaching Center</p>
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">About Backup Coaching Center</h2>
                    <p class="text-gray-700 text-lg md:text-1xl lg:text-2xl leading-relaxed mb-4">
                        ১. কোচিং সেন্টারের নাম:
                           ব্যাকআপ কোচিং সেন্টার <br>

                        ২. অবস্থান:
                        ঢাকা বিভাগের গোপালগঞ্জ জেলার কাশিয়ানী থানার ফুকরা বাজার বাস স্ট্যান্ডের পাশে। <br>

                        ৩. প্রতিষ্ঠার সাল:
                        ২০১৬ সালে এই কোচিং সেন্টারটি প্রতিষ্ঠিত হয়। <br>

                        ৪. ক্লাসের সময়সূচি:
                        ক্লাসের সময় ব্যাচ অনুযায়ী নির্ধারিত হয়। প্রতিদিন বিভিন্ন সময়ে ব্যাচের ক্লাস পরিচালিত হয়। <br>

                        ৫. ছুটির দিন:
                        শুধুমাত্র শুক্রবার সাপ্তাহিক ছুটি। এছাড়া অন্য কোনো নির্ধারিত ছুটি নেই। <br>

                        ৬. শিক্ষকের পরিচিতি:
                        ব্যাকআপ কোচিং সেন্টারের একমাত্র শিক্ষক হলেন রনক ইসলাম লস্কর। তিনি ২০১৬ সাল থেকে এই কোচিং পরিচালনা করছেন। এর আগে তিনি প্রাইভেট পড়াতেন। তার দীর্ঘ অভিজ্ঞতা এবং কঠোর পরিশ্রমের মাধ্যমে কোচিং সেন্টারটি সাফল্যের সাথে পরিচালিত হচ্ছে। <br>

                        ৭. শিক্ষার্থীর শ্রেণি:
                        ক্লাস সিক্স থেকে ইন্টারমিডিয়েট (দ্বিতীয় বর্ষ) পর্যন্ত শিক্ষার্থীদের এখানে পাঠদান করা হয়। <br>

                        ৮. পরীক্ষার পদ্ধতি:
                        প্রতিমাসে এবং প্রতি সপ্তাহে নিয়মিত পরীক্ষা নেওয়া হয়। পাশাপাশি, মডেল টেস্ট এবং কুইজ টেস্টের মতো বিশেষ পরীক্ষাও আয়োজন করা হয়। <br>

                        ৯. যোগাযোগ: <br>

                        মোবাইল নম্বর: 01629676568 / 01741257011 <br>

                        ইমেইল: backupcoachingcenter@gmail.com  <br>


                        ১০. বিশেষ ক্লাস:
                        যদি বিশেষ কোনো ক্লাস, যেমন লাইভ ক্লাস, আয়োজন করা হয়, তবে শিক্ষার্থীদের তা যথাসময়ে জানিয়ে দেওয়া হবে। <br>

                        ১১. শিক্ষার পরিবেশ:
                        কোচিং সেন্টারটি শিক্ষার্থীদের জন্য একটি নিরিবিলি এবং শিক্ষামূলক পরিবেশ নিশ্চিত করে, যেখানে শিক্ষার্থীরা তাদের পাঠ্যবিষয়ে আরও দক্ষতা অর্জন করতে পারে। <br>

                         <br>
                    </p>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">আমাদের বৈশিষ্ট্য</h3>
                    <ul class="list-disc pl-5 text-gray-700 mb-4 text-lg md:text-1xl lg:text-2xl">
                        <li>অভিজ্ঞ ও প্রশিক্ষিত শিক্ষক দল</li>
                        <li>আধুনিক ক্লাসরুম সুবিধা</li>
                        <li>ছাত্রদের জন্য ব্যক্তিগত পরামর্শ সেবা</li>
                        <li>নিয়মিত মডেল টেস্ট এবং ফলাফল বিশ্লেষণ</li>
                        <li>অভিভাবকদের সঙ্গে নিয়মিত যোগাযোগ</li>
                    </ul>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">আমাদের লক্ষ্য</h3>
                    <p class="text-gray-700 leading-relaxed text-lg md:text-1xl lg:text-2xl">
                        ব্যাকআপ কোচিং সেন্টারের প্রধান লক্ষ্য হলো শিক্ষার্থীদের একাডেমিকভাবে সাফল্য অর্জনে সহায়তা করা এবং তাদের সামগ্রিক উন্নয়ন নিশ্চিত করা।
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>