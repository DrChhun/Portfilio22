@extends('Main')

@section('content')
    <div class="py-16 px-12">
        <div class="flex justify-between">
            <div>
                <h1 class="text-5xl font-extrabold">My Projects</h1>
            </div>
            <div>
                <img src="https://media3.giphy.com/media/6w5C6yoUlPeDwtZTx9/giphy.gif?cid=ecf05e47aipfp5hjki85s224w87n90jw3brxgdgv506x8y59&rid=giphy.gif&ct=g"></img>
            </div>
        </div>

        <div class="mt-24 overflow-hidden">
        <a href="/projects/hr">
                    <div data-aos-delay="150" data-aos="fade-left" class="relative h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl shadow-xl border-2" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312839291_659291439064434_3955676566590244185_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEGVZVItGjVkuQc8BRahazbyrnJle79MNnKucmV7v0w2ZvB4LElTIJHzKsH1hpIasf9Ovdyk_MHpd31FOHuMNET&_nc_ohc=6b5QoTrtyhQAX8I4tHs&tn=2qGUT_azd2xOJIKJ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT8ndPXcBWfswkSlYuFJ3zN6-XDVaXq-Rq9y68yolnhFrw&oe=635AF829"></img>
                    </div>
                </a>
                <a href="/projects/landing-page">
                    <div data-aos-delay="150" data-aos="fade-right" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl shadow-xl border-2" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312844010_659292555730989_9217624950318314327_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFWn1Ur4KAj7sOps0nS9hJQ24Pdtqb3ZBTbg922pvdkFFi-on2tMGpc6ccKOAtmtiK70AqM0a9sdiPlnOiflptH&_nc_ohc=1VgIsdYdcLYAX-LnE3J&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT9KRVGWpDIxDUfSoJmskUeNmIej5QYyOBO884j9toqetw&oe=635AE58D"></img>
                    </div>
                </a>
                <a href="/projects/short-url">
                    <div data-aos-delay="150" data-aos="fade-left" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl shadow-xl border-2" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312813612_659292589064319_524592538154143416_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHHwLaMny60laTYe-PqOhoc86l3_5EXR4vzqXf_kRdHi_BbinA60SGqxOm5jeJtZGgFR1aAQwH8LrwrKBwJi1F0&_nc_ohc=qPaCeSfffEUAX_eLewK&tn=2qGUT_azd2xOJIKJ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT8HNMxmHA4-PKS_IoFkDNxRSUg3yFJb5aluLLVUDKl6TQ&oe=635A6304"></img>
                    </div>
                </a>
                <a href="/projects/find-country">
                    <div data-aos-delay="150" data-aos="fade-right" class="h-[200px] md:h-[400px] w-[100%] bg-gray-50 rounded-xl mt-12">
                        <img class="absolute object-contain w-screen h-[100%] rounded-xl shadow-xl border-2" src="https://scontent.fpnh1-1.fna.fbcdn.net/v/t39.30808-6/312892024_659292462397665_5090045320392211253_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHcWCwHByqziORRKHVbhcQjEfZ_KznxdkQR9n8rOfF2RBcV_O1qLLycR1kWp2q3fsK4xltRfHZ2zNsQ3FNyOxRG&_nc_ohc=myN897PCsn0AX8xJjmZ&_nc_ht=scontent.fpnh1-1.fna&oh=00_AT_5ftTv0TCJvD5-s4IYbHlmpYic0zVYuSczcyvfo8JjLQ&oe=6359EFAC"></img>
                    </div>
                </a>
            </div>
    </div>
@endsection