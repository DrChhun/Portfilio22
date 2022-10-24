@extends('Main')

@section('content')
    <div class="px-12 py-16">
        <!-- <div class="flex justify-between">
            <div>
                <h1>Contact ME</h1>
            </div>
            <div>
                <img src="https://media1.giphy.com/media/bM88XsBjv37g4DqMoM/giphy.gif?cid=ecf05e478fbl54pjloi7vmpiufrd9xhq85gbz4a0bkkd30an&rid=giphy.gif&ct=g"></img>
            </div>
        </div> -->


        <!-- Contact  -->
        <div data-aos="fade-up" class="py-20 h-auto">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-[#0000ff]">Love to hear from you</h1>
            </div>
            <form action="/store-data" method="post">
                @csrf   
                <div class="flex flex-col md:justify-between md:flex-row mt-12">
                    <div class="flex-col md:flex md:mr-12 md:w-[50%]">
                        <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="name">Name/Company</label>
                        <input class="h-[40px] w-[100%] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="name" name="name" type="text"></input>
                    </div>
                    <div class="flex flex-col md:w-[50%]">
                        <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="email">Email</label>
                        <input class="h-[40px] w-[100%] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="email" name="email" type="text"></input>
                    </div>
                </div>
                <div class="flex flex-col mt-12 mb-8">
                    <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="message">Message</label>
                    <input class="h-[150px] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="message" name="message" type="text"></input>
                </div>
                <button class="float-left md:float-right h-[45px] w-[150px] rounded-xl bg-[#0000ff] bg-opacity-10 hover:bg-opacity-100 duration-200 text-[#0000ff] hover:text-white text-xl font-semibold">Submit</button>
            </form>
        </div>
        <h1>*If you want fastest response you can contact me via 081546985 or 085622539(Telegram)*</h1>
    </div>
@endsection