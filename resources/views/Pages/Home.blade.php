@extends('Main')

@section('content')
        <div class="leading-loose h-screen flex flex-col justify-center text-white bg-[#0000ff] px-4 md:px-12">
            <!-- Desktop -->
            <div class="hero sm:flex sm:flex-col hidden">
                <h1 class="md:text-8xl font-extrabold sm:text-7xl mt-5 show">Chhun is a</h1>
                <h1 class="md:text-8xl font-extrabold sm:text-7xl mt-5 show">Web Developer</h1>
                <h1 class="md:text-8xl font-extrabold sm:text-7xl mt-5 show">base in Cambodia<span class="text-[#F5E30C]">.</span></h1>
            </div>
            <!-- Mobile -->
            <div class="flex flex-col sm:hidden text-center">
                <h1 class="text-6xl font-extrabold mt-5 show">Chhun Kim</h1>
                <h1 class="text-4xl font-semibold mt-5 show">Web Developer</h1>
                <h1 class="text-3xl font-normal mt-5 show">PhnomPenh<span class="text-[#F5E30C]">.</span></h1>
            </div>
        </div>
        
        <!-- about -->
        <div class="about bg-white h-auto xl:h-screen px-4 md:px-12 py-16 overflow-hidden">
            <div>
                <h1 data-aos="fade-right" class="text-3xl md:text-4xl font-extrabold text-[#0000ff]">About Me...</h1>
            </div>
            <div class="about__detail">
                <div data-aos="fade-right" class="">
                    <p class="txt-1 p-8 md:rounded-xl md:bg-gray-50 xl:w-[70%]  mt-12 md:shadow-lg text-sm sm:text-lg opacity-100">
                        Hello, World! I'm Chhun, a front end web developer 
                        with a background in Computer Science. I enjoy creating things that live on the 
                        internet and turning problems into beautiful designs. 
                        I primarily focus on JavaScript, HTML, CSS, JS Framwork 
                        and CSS Framwork.

                    </p>
                </div>
                <div data-aos="fade-left">
                    <p class="txt-2 md:bg-gray-50 xl:w-[70%] md:float-right p-8 md:rounded-xl md:mt-12 md:shadow-lg text-sm sm:text-lg opacity-100">
                        While I love front end development and design, I'm also 
                        comfortable using back-end tech including Laravel and MySQL.<br>
                        Transitioning to web development has enabled me to continue my passion for 
                        learning and embrace my status as a forever student.
                    </p>
                </div>
            </div>
        </div>

        <!-- Skills -->
        <div class="skills bg-[#fff] h-auto xl:h-screen px-4 md:px-12 py-12 md:flex md:justify-between overflow-hidden mb-8 md:mb-0">
            <div class="md:w-[30%]">
                <h1 data-aos="fade-right" class="text-3xl md:text-4xl font-extrabold text-[#0000ff] mb-12">Skills</h1>
                <!-- mobile show desktop hide -->
                <h1 data-aos="fade-left" class="text-xl my-3 opacity-75 flex md:hidden mb-8">Technologies I been working with :</h1>
            </div>
            <div class="md:w-[70%] grid grid-cols-3 justify-between">
                <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold">HTML5</h1>
                <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold">CSS3</h1>
                <h1 data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold">JavaScript</h1>
                <h1 data-aos-delay="100" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">Boostrap</h1>
                <h1 data-aos-delay="100" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">Tailwind</h1>
                <h1 data-aos-delay="100" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">Rect.JS</h1>
                <h1 data-aos-delay="150" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">Laravel</h1>
                <h1 data-aos-delay="150" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">MySQL</h1>
                <h1 data-aos-delay="150" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-xl md:text-2xl font-semibold opacity-75 md:font-bold mt-5 md:mt-0">Git/Github</h1>
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="project bg-[#0000ff] overflow-hidden h-auto  px-4 md:px-12 py-16">
            <div>
                <h1 data-aos="fade-right" class="text-3xl md:text-4xl font-extrabold text-[#fff]">My Recent Projects</h1>
            </div>
            <!-- projects -->
            <div class="mt-12">
                <a href="/projects/hr">
                    <div data-aos-delay="150" data-aos="fade-left" class="relative h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl hover:scale-105 duration-300" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312839291_659291439064434_3955676566590244185_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEGVZVItGjVkuQc8BRahazbyrnJle79MNnKucmV7v0w2ZvB4LElTIJHzKsH1hpIasf9Ovdyk_MHpd31FOHuMNET&_nc_ohc=6b5QoTrtyhQAX8I4tHs&tn=2qGUT_azd2xOJIKJ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT8ndPXcBWfswkSlYuFJ3zN6-XDVaXq-Rq9y68yolnhFrw&oe=635AF829"></img>
                    </div>
                </a>
                <a href="/projects/landing-page">
                    <div data-aos-delay="150" data-aos="fade-right" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl hover:scale-105 duration-300" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312844010_659292555730989_9217624950318314327_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFWn1Ur4KAj7sOps0nS9hJQ24Pdtqb3ZBTbg922pvdkFFi-on2tMGpc6ccKOAtmtiK70AqM0a9sdiPlnOiflptH&_nc_ohc=1VgIsdYdcLYAX-LnE3J&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT9KRVGWpDIxDUfSoJmskUeNmIej5QYyOBO884j9toqetw&oe=635AE58D"></img>
                    </div>
                </a>
                <a href="/projects/short-url">
                    <div data-aos-delay="150" data-aos="fade-left" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl hover:scale-105 duration-300" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312813612_659292589064319_524592538154143416_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHHwLaMny60laTYe-PqOhoc86l3_5EXR4vzqXf_kRdHi_BbinA60SGqxOm5jeJtZGgFR1aAQwH8LrwrKBwJi1F0&_nc_ohc=qPaCeSfffEUAX_eLewK&tn=2qGUT_azd2xOJIKJ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT8HNMxmHA4-PKS_IoFkDNxRSUg3yFJb5aluLLVUDKl6TQ&oe=635A6304"></img>
                    </div>
                </a>
                <a href="/projects/find-country">
                    <div data-aos-delay="150" data-aos="fade-right" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl hover:scale-105 duration-300" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312892024_659292462397665_5090045320392211253_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHcWCwHByqziORRKHVbhcQjEfZ_KznxdkQR9n8rOfF2RBcV_O1qLLycR1kWp2q3fsK4xltRfHZ2zNsQ3FNyOxRG&_nc_ohc=myN897PCsn0AX8xJjmZ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT_5ftTv0TCJvD5-s4IYbHlmpYic0zVYuSczcyvfo8JjLQ&oe=6359EFAC"></img>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contact  -->
        <div data-aos="fade-up" class="px-4 md:px-12 py-20 h-auto md:w-[70%]">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-[#0000ff]">Love to hear from you</h1>
            </div>
            <form action="/store-data" method="post">
                @csrf   
                <div class="flex flex-col md:flex-row mt-12">
                    <div class="flex-col flex md:mr-12">
                        <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="name">Name/Company</label>
                        <input class="h-[40px] md:w-[435px] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="name" name="name" type="text"></input>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="email">Email</label>
                        <input class="h-[40px] md:w-[435px] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="email" name="email" type="text"></input>
                    </div>
                </div>
                <div class="flex flex-col mt-12 mb-8">
                    <label class="text-normal md:text-lg font-bold text-[#0000ff] mb-2" for="message">Message</label>
                    <input class="h-[150px] md:h-[250px] md:w-[915px] border-2 rounded-lg bg-[#0000ff] bg-opacity-10 focus:outline-[#0000ff]" id="message" name="message" type="text"></input>
                </div>
                <button class="float-left md:float-right h-[45px] w-[150px] rounded-xl bg-[#0000ff] bg-opacity-10 hover:bg-opacity-100 duration-200 text-[#0000ff] hover:text-white text-xl font-semibold">Submit</button>
            </form>
        </div>
    
@endsection