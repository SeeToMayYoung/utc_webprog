@extends('layout.master')
@section('title','Home Page')
@section('content')
<div class="flex flex-col items-center justify-center">
    {{-- Hightlight Section --}}
    <a class="w-[100%]" href="/detail/{{$highlight->id}}">
        <div class="container mx-auto border-8 border-gray-500 my-2 py-4 px-8 flex flex-row">
            <img class="w-96 h-auto" src="{{$highlight->thumbnail_image}}" alt="">
            <div class="ml-10 font-bold">
                <h2 class="border-b-2 border-black w-max">{{$highlight->sub_title}}</h2>
                <h1 class="mt-4 text-5xl">{{$highlight->title}}</h1>
                <h2 class="mt-4">{{$highlight->description}}</h2>
            </div>
        </div>
    </a>

    {{-- Latest Book Reviews --}}
    <div class="container mx-auto border-8 border-gray-500 my-2 py-4 px-8 flex flex-col">
        <h2 class="border-b-2 border-black w-max font-bold">LATEST BOOK REVIEWS</h2>
        <div class="mt-4 flex flex-row justify-aroun">
            @foreach ($latest as $lat)
                <a href="/detail/{{$lat->id}}">
                    <div class="flex flex-col w-96">
                        <img class="w-72 h-auto" src="{{$lat->thumbnail_image}}" alt="">
                        <h2 class="font-bold text-2xl w-72">{{$lat->title}}</h2>
                        <h2 class="text-1xl w-72">{{$lat->description}}</h2>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- Book Series Review --}}
    <div class="w-[100%] h-max bg-black">
        <div class="container mx-auto border-8 border-gray-500 my-2 py-8 px-8 flex flex-col h-max">
            <h2 class="border-b-2 border-white w-max font-bold text-white">LATEST BOOK REVIEWS</h2>
            <div id="controls-carousel" class="relative w-full mt-4" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @foreach($posts as $post)
                        <div class="hidden duration-700 ease-in-out flex flex-col items-center" data-carousel-item>
                            <img class="h-72 w-auto" src="{{$post->thumbnail_image}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <h2 class="text-white font-bold text-3xl my-4">{{$post->title}}</h2>
                            <a class="" href="/detail/{{$post->id}}">
                                <button class="bg-transparent hover:bg-gray-300 text-gray-300 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded">Read Post</button>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </div>

</div>
@endsection
