<x-layout>
<section>
<div class="bg-gray-100 p-6 rounded-lg shadow-lg my-10">
    <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Latest Notices</h2>

    <!-- Notices List -->
    <div class="space-y-6">
        <!-- Example Notice 1 -->
    
         @foreach($notice as $not)
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <h3 class="text-2xl font-semibold text-blue-600 mb-2">{{$not->title}}</h3>
            <p class="text-sm text-gray-500 mb-4">Published on: <span class="font-semibold">{{ $not->created_at->diffForHumans()}}</span></p>
            <div class="mb-4">
            {!! $not->description !!}
            </div>
            <a href="" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors duration-200">Read More</a>
        </div>
    @endforeach

       

        <!-- Add more notices similarly -->

    </div>
</div>
</section>

</x-layout>