<x-layout>
    <!-- Hero Section -->


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg md:h-96" style="min-height: 650px;">
            <!-- Item 1 -->
            @foreach($slides as $slide)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url($slide->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover" alt="..." style="height: 650px;">
            </div>
            @endforeach

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!-- <x-hero/> -->
    <!-- Message -->
    <div class="bg-white p-6 rounded-lg shadow-lg py-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
            <!-- Principal's Image -->
            <div class="col-span-1">
                <img src="{{Storage::url($message->image)}}" alt="Principal" class="rounded-full w-50 h-50 mx-auto shadow-md ">
            </div>

            <!-- Principal's Message -->
            <div class="col-span-2">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Message from the Program Director</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    The Bachelor of Computer Applications (BCA) program at MMAMC is designed to equip students
                    with the essential skills and knowledge required to thrive in the dynamic field of information
                    technology. Our curriculum blends theoretical understanding with hands-on experience, ensuring that graduates are well-prepared to meet the demands of the digital age. At MMAMC, we are committed to fostering innovation, critical thinking, and practical problem-solving abilities. I invite all aspiring IT professionals to join this transformative
                    journey and become leaders in the ever-evolving world of technology.
                </p>

                <!-- Principal's Name and Designation -->
                <div class="text-right">
                    <p class="text-lg font-semibold text-gray-800">Dr. [Achut Raj Katel]</p>
                    <p class="text-sm text-gray-500">Director,BCA@MMAMC</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <!-- About Us Section -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg my-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">At a Glance</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Mission -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Mission</h3>
                    <p class="text-gray-600">
                        To provide a comprehensive education that nurtures the intellectual, physical, and emotional growth of each student, fostering lifelong learning and success.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Vision</h3>
                    <p class="text-gray-600">
                        To be a leading institution in academic excellence, innovation, and character development, preparing students for the challenges of the future.
                    </p>
                </div>

                <!-- Values -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Core Values</h3>
                    <ul class="list-disc pl-5 text-gray-600">
                        <li>Respect</li>
                        <li>Integrity</li>
                        <li>Collaboration</li>
                        <li>Excellence</li>
                    </ul>
                </div>

                <!-- Facilities -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-600 mb-2">Facilities</h3>
                    <ul class="list-disc pl-5 text-gray-600">
                        <li>Modern Computer Labs</li>
                        <li>Library & Research Center</li>
                        <li>Sports Complex</li>
                        <li>Seminars & Workshop</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

</x-layout>