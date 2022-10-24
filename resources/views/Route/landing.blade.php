@extends('Main')

@section('content')
<div class="px-6 py-16 md:px-12 md:py-24">
        <div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-center mt-12 mb-12">Landing Page</h1>
        </div>
        <div class="w-[100%]">
            <img class=" flex shadow-2xl rounded-xl m-auto w-[100%]" src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t39.30808-6/312844010_659292555730989_9217624950318314327_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFWn1Ur4KAj7sOps0nS9hJQ24Pdtqb3ZBTbg922pvdkFFi-on2tMGpc6ccKOAtmtiK70AqM0a9sdiPlnOiflptH&_nc_ohc=1VgIsdYdcLYAX9BzZ8Q&_nc_zt=23&_nc_ht=scontent.fpnh2-2.fna&oh=00_AT-6HLBhcd834MtuGKSdbPez3J5rxDahsfo7Z-i9l8ZYEQ&oe=635AE58D"></img>
        </div>
        <div class="mt-12 mb-12">
            <h1 class="text-xl md:text-3xl font-bold mb-8">Detail</h1>
            <p class="md:text-xl">This is a landing website that I create to show off that i can design any layout that I see.
                this website use React for frontend and have no backend in it also I use Aos for animate and Tailwind for styling. (Mobile Friendly)
            </p>
            <p class="text-xl mt-8">check it out -> shrtco.de/FssmYx</p>
        </div>
        <div class="mt-12 mb-12">
            <h1 class="text-xl md:text-3xl font-bold">Technology use in this website</h1>
            <div class="flex justify-between text-xl mt-8">
                <p class="bg-blue-200 px-4 py-1 rounded-lg">React</p>
                <p class="bg-blue-200 px-4 py-1 rounded-lg">AOS</p>
                <p class="bg-blue-200 px-4 py-1 rounded-lg">TailWind</p>
            </div>
        </div>
        
    </div>
@endsection