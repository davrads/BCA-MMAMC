<x-layout>
    <!-- Gallery View -->
<section>
<div class="bg-gray-100 p-6 rounded-lg shadow-lg my-10">
    <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Our Gallery</h2>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example Image 1 -->
        <!-- <div class="relative group">
            <img src="{{ asset('images/gallery1.jpg')}}" alt="BCA_Profile" class="w-full h-56 object-cover rounded-lg shadow-md transition-transform transform group-hover:scale-105">
            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-40 transition-opacity rounded-lg"></div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                <a href="path-to-gallery1.jpg" class= "text-white text-lg font-semibold bg-blue-600 px-4 py-2 rounded-full shadow-lg" data-modal-target="imageModal1">View</a>
            </div>
        </div> -->
        @foreach ($gallery as $gall )

        <!-- Example Image 2 -->
        <div class="relative group">
            <img src="{{ Storage::url($gall->image)}}" alt="Gallery Image 2" class="w-full h-56 object-cover rounded-lg shadow-md transition-transform transform group-hover:scale-105">
            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-40 transition-opacity rounded-lg"></div>
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                <a href="path-to-image-2.jpg" class="text-white text-lg font-semibold bg-blue-600 px-4 py-2 rounded-full shadow-lg" data-modal-target="imageModal2">View</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal Template for Viewing Images -->
<div id="imageModal1" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-4 rounded-lg max-w-3xl w-full">
        <img src="path-to-image-1.jpg" alt="Gallery Image 1" class="w-full h-auto rounded-lg">
        <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg" data-modal-hide="imageModal1">Close</button>
    </div>
</div>

<div id="imageModal2" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 w-full h-full bg-black bg-opacity-50 items-center justify-center">
    <div class="bg-white p-4 rounded-lg max-w-3xl w-full">
        <img src="path-to-image-2.jpg" alt="Gallery Image 2" class="w-full h-auto rounded-lg">
        <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg" data-modal-hide="imageModal2">Close</button>
    </div>
</div>

</section>

</x-layout>