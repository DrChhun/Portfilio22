@extends('Main')

@section('content')
    <div class="px-6 py-16 md:px-12 md:py-24">
        <div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-center mt-12 mb-12">HR WebApp</h1>
        </div>
        <div class="w-[100%]">
            <img class=" flex shadow-2xl rounded-xl m-auto w-[100%]" src="https://scontent.fpnh2-1.fna.fbcdn.net/v/t39.30808-6/312839291_659291439064434_3955676566590244185_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEGVZVItGjVkuQc8BRahazbyrnJle79MNnKucmV7v0w2ZvB4LElTIJHzKsH1hpIasf9Ovdyk_MHpd31FOHuMNET&_nc_ohc=6b5QoTrtyhQAX8rvXC9&_nc_zt=23&_nc_ht=scontent.fpnh2-1.fna&oh=00_AT-B77HEFad_CxCxbfNX9mfmSoPYFtTgOuHeqf3uxuV9eQ&oe=635AF829"></img>
        </div>
        <div class="mt-12 mb-12">
            <h1 class="text-xl md:text-3xl font-bold mb-8">Detail</h1>
            <p class="md:text-xl">This is a hr website allow you to create record of your employee also allow you to update and delete record. It has Login and Register function so only people who has account can only create post. it fully function so when 
                you create post it will store in MySql DataBase and I use Tailwind for styling. 
            </p>
            <p class="text-xl mt-8">check it out -> shrtco.de/spKwoN</p>
        </div>
        <div class="mt-12 mb-12">
            <h1 class="text-xl md:text-3xl font-bold">Technology use in this website</h1>
            <div class="flex justify-between text-xl mt-8">
                <p class="bg-blue-200 px-4 py-1 rounded-lg">Laravel</p>
                <p class="bg-blue-200 px-4 py-1 rounded-lg">MySql</p>
                <p class="bg-blue-200 px-4 py-1 rounded-lg">TailWind</p>
            </div>
        </div>
        <div class="flex w-[100%] mb-12 mt-12">
            <div class="w-[50%] border-2">
                <img src="https://scontent.fpnh2-1.fna.fbcdn.net/v/t39.30808-6/312885783_659688335691411_4010343751516059485_n.jpg?stp=dst-jpg_p552x414&_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHp9rq4n2HOkVZJMWSeWgi6CAw6MeJbWyEIDDox4ltbIZyjFV8k5GlWRn_KSS3axR4RVXCMbhkEsg4tax2oBzA7&_nc_ohc=G2KaPBnIijAAX9-5dGU&_nc_zt=23&_nc_ht=scontent.fpnh2-1.fna&oh=00_AT9_wetKxD5fSsMQdu59gPTyfCctCLMu_BKviRlcuu0nqg&oe=635B8A49"></img>
            </div>
            <div class="w-[50%] border-2">
                <img src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t39.30808-6/312756395_659688442358067_3990868188778259900_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFphrwJrgrizP_x0quxqru5aCcHytn4-KdoJwfK2fj4pxyl0hZ4gJtsD6YOfKSDShM4eNYqW09bPdaYAKTDJZvf&_nc_ohc=NwtZwsaY69EAX-RzEgz&_nc_zt=23&_nc_ht=scontent.fpnh2-2.fna&oh=00_AT-ZfIlmrxW0rT7ZiMKKsK0O-pY8w4zfz0TufSXSAq3pmQ&oe=635B53DF"></img>
            </div>
        </div>
        <div>
            <img class="border-2" src="https://scontent.fpnh2-1.fna.fbcdn.net/v/t39.30808-6/312937994_659688679024710_3869385315048902759_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEN0e3_baytmVKhRdLjStUV3byznXzX5gbdvLOdfNfmBlxmsxy2RzbVmqh-RopVodvi4fEelRw1JMJftc8Qjon5&_nc_ohc=KMEHL9vPrG0AX8yifts&_nc_zt=23&_nc_ht=scontent.fpnh2-1.fna&oh=00_AT-B018sfWp_fs2R8yxTa5nRGxnqo93kSluVaBx0lBB9sA&oe=635BA383"></img>
        </div>
    </div>
@endsection