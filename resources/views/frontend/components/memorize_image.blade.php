<div class="container mx-auto p-4">
    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- All new post above-->
@if($Memorizes->isNotEmpty())
@foreach ($Memorizes as $memorize)
      <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
        <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            @if ($memorize->image)
                <div class="h-48">
                    <img src="{{ asset('storage/' . $memorize->image) }}" 
                         alt="Post Image" 
                         class="w-full h-full p-2">
                </div>
            @endif
            <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $memorize->title }} </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center break-words max-w-md mx-auto">
                        {{ $memorize->description }}
                    </p>
            </div>
        </div>
      </div>
@endforeach
@else
      <p class="text-center text-red-800 font-bold"> No New Data Found For You</p>
@endif
<!-- card one-->
      <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
        <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_1.jpg') }}" alt="Memorize" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">"Mask of the Traitor" ! </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">বন্ধুর বিশ্বাসঘাতকতা এবং শত্রুর করুনা উভয়টাই ধ্বংসের কারণ। হে! জীবন, তুমি দুর্বল। তুমি বুঝতে পারবে না কে বন্ধু আর কে শত্রু। কারণ বিশ্বাসীরা যখন ঘুমায় তখন বিশ্বাসঘাতকরা জেগে ওঠে। সন্দেহ এবং সংশয় যখন কমে যায় তখন সতর্কতা দূরে সরে যায়। বিশ্বাসঘাতকের মুখ আপনাকে এমন ভাবে আশ্বস্ত করবে, আপনি কখনোই উপলব্ধি করতে পারবেন না। যে হাতটা তুমি তুলে ছিলে সেটাই তোমাকে আঘাত করবে তুমি জানো না। বিশ্বাসঘাতকতা প্রেম এবং আবেগের মাঝে লুকিয়ে থাকে যা আপনি এড়িয়ে চলতে পারবেন না। হে উচ্চাকাঙ্ক্ষী তুমি যদি বিশ্বাসে অন্ধ হয়ে থাকো তুমি বিশ্বাসঘাতকতা কখনো দেখতে পাবে না!!! হে উচ্চাকাঙ্ক্ষী তুমি যদি বিশ্বাসে অন্ধ হয়ে থাকো তুমি বিশ্বাসঘাতকতা কখনো দেখতে পাবেনা।</p>
            </div>
        </div>
      </div>
<!-- card two-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_2.jpg') }}" alt="Memorize" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What is the meaning of love?</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> হে ! প্রেম ! তোমার পূর্বপুরুষ ছিল আগুন। তোমার জমিনের ধোঁয়া এবং শিকড়ের বাতাস। জল ঘূর্নীতে পরিণত হয়েছে এবং মাটির ছাইয়ে পরিণত হয়েছে। তোমার ঘ্রাণের আগুন বাতাসের সাথে মিশে গেছে । আর শিরিন ছাড়া প্রতিটি জায়গাই বিসুটুনের ধ্বংসাবশেষ এর মত। ফরহাদ ছাড়া প্রতিটি পাহাড়ই বাতাসে খরের মতো। আমাদের পূর্বপুরুষদের প্রজন্মেও দুঃখ ছিল। আমাদের উত্তরাধিকারেও চিরন্তন দুঃখ । আমাদের ধুলো বাতাসে তোমার গন্ধ । শুধু তুমি থাকবে । যখন আমরা সবাই চলে যাব। </p>
                </div>
            </div>
        </div>
<!-- card three-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_3.jpg') }}" alt="Memorize" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> The battle between truth and lies </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> সত্য ও মিথ্যা দুই বন্ধু ছিল একদিন মিথ্যা ইচ্ছা করলো যে সে সত্য বলবে, তাই সে সত্যকে বলল আজকের আবহাওয়াটা কি সুন্দর ! সত্য দেখল এটা তো সত্যিই সুন্দর। অতঃপর মিথ্যা সত্যকে বলল চলো বন্ধু আমরা একটু বাহিরে ঘুরতে যাই। সত্য বলল ঠিক আছে চলো ; তারা উভয়েই পথ চলতেছিল এমন সময় মিথ্যা বলল আজকের রোদ টা খুব মিষ্টি। সত্য দেখল এটা তো আসলেই মিষ্টি তার মানে মিথ্যা আবারো সত্য বলেছে। কিছুদূর এগিয়ে যাওয়ার পর মিথ্যা সত্যকে বলল চলো বন্ধু একটু নদীর পাড়ে গিয়ে বসি অতঃপর তারা উভয়েই নদীর পাড়ে গিয়ে বসলো। মিথ্যা সত্যকে বলল নদীর পানি কত সচ্ছ! সত্য দেখল এটা তো সত্য। তারপর মিথ্যা সত্য কে বলল চলো বন্ধু আমরা দুজনে কিছুক্ষণ নদীতে সাঁতার কাটি। যেই কথা সেই কাজ, উভয়েই নদীতে সাঁতার কাটা শুরু করল তারা খুব আনন্দের সাথেই নদীতে সাঁতার কাটছিল; কিন্তু মিথ্যার মনে ছিল ছলনা, সে যখন দেখলো সত্য সাঁতার কাটার মাঝে ডুবে আছে অন্যদিকে অমনোযোগী এই সুযোগেই মিথ্যা নদী থেকে উঠে পড়ল এবং সত্যের পোশাক নিয়ে দৌড় শুরু করল সত্য যখন এই দৃশ্য দেখল ততক্ষণে দেরি হয়ে গেছে। সে উলঙ্গ হয়ে পিছন থেকে মিথ্যাকে ডাকতে লাগলো কিন্তু মিথ্যা কি আর ধরা দেয় সে হারিয়ে গেল। তারপর থেকে মিথ্যা সত্যের পোশাকে যেখানেই যায় সম্মানিত হয় আর নগ্ন সত্যকে কেউ সম্মান করে না। এবং তাকে কেউ পছন্দ করেনা। তাই মিথ্যা সুস্বাদু হলেও সেটাকে পরিহার করুন এবং সত্য যদিও বা তিক্ত এবং লগ্ন তাকেই বরণ করুন। </p>
                </div>
            </div>
        </div>
<!-- card four-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_4.jpg') }}" alt="Memorize" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> How can I succeed? </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> জীবনে সাফল্য পেতে হলে কঠোর পরিশ্রম এবং অধ্যবসায় অপরিহার্য।
                        ❝নিজের ওপর বিশ্বাস রাখুন এবং কখনোই হার মানবেন না। সফলতার পথ সবসময় কঠিন, তবে প্রতিটি পদক্ষেপ আপনাকে লক্ষ্যের কাছে নিয়ে যাবে।❞</p>
                </div>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_5.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_6.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_7.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_8.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_9.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_10.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_11.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_12.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_13.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_14.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_15.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_16.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- Image one-->
        <div class="card bg-gray-200 p-4 rounded-lg shadow-md">
            <div class="max-w-sm bg-white my-3 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('frontend/images/memorize/image_17.jpg') }}" alt="Memorize" />
                </a>
            </div>
        </div>
<!-- card five-->
    </div>
  </div>
  