<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semka</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <!--Сцена 1: Шапка сайта-->

    @include('inc.header')

    <!--Сцена 2: Превью салата-->

    @include('inc.scene_1')

    <!--Сцена 3: Меню ингредиентов-->

    <div class="scene_ingridients scene ">
        <p class="ingridients_menu_title">Соберите свой салат</p>
        <div class="ingridients">
            <div class="ingridient">
                <p class="ingridient_title K">K</p>
                <label class ="ingridient_check">
                    <input type="checkbox" class="check">
                    <div class="switch">
                        <div class="lines">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </label>
                <p class="ingridient_description">Молекулы калия играют важную роль в функционировании нервной системы, сокращении мышц, поддержании нормального кровяного давления и сахара в крови</p>
            </div>
            <div class="ingridient">
                <p class="ingridient_title He">He</p>
                <label class ="ingridient_check">
                    <input type="checkbox" class="check">
                    <div class="switch">
                        <div class="lines">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </label>
                <p class="ingridient_description">Лёгкий гелий способен рассмешить любую компанию!</p>
            </div>
            <div class="ingridient">
                <p class="ingridient_title Au">Au</p>
                <label class ="ingridient_check">
                    <input type="checkbox" class="check">
                    <div class="switch">
                        <div class="lines">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </label>
                <p class="ingridient_description">Роскошная подача со съедобными молекулами золота</p>
            </div>
            <div class="ingridient">
                <p class="ingridient_title U">U</p>
                <label class ="ingridient_check">
                    <input type="checkbox" class="check">
                    <div class="switch">
                        <div class="lines">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </label>
                <p class="ingridient_description">Ядерная заправка с высоким радиационным фоном *_*</p>
            </div>
            <div class="ingridient">
                <p class="ingridient_title Na">Na</p>
                <p class="ingridient_title Cl">Cl</p>
                <label class ="ingridient_check">
                    <input type="checkbox" class="check">
                    <div class="switch">
                        <div class="lines">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </label>
                <p class="ingridient_description">Просто соль...</p>
            </div>
        </div>
    </div>

    <!--Сцена 4 Форма для клиентов-->

    <div class="scene_application scene">
        <p class="application_title title">Оставьте ваш отзыв!</p>
        <p class="scene_text">Нам важно знать ваше мнение, помогите сделать ваш любимый салат ещё вкуснее!</p>
        @include('inc.messages')
        <form action="{{route('data')}}" method="post" id="main_form">
            @csrf
            <div class="user_data">
                <label class="label_box">Введите ваше имя<input type="text" class="text_box" name="name" id="name"></label>
                <label class="label_box">Введите ваш Mail<input type="text" class="text_box" name="email" id="email"></label>
                <label class="label_box">Введите ваше сообщение<textarea class="message_box" name="message" id="message"></textarea></label>
                <button type="submit" class="button_box">Отправить</button>
            </div>
        </form>
    </div>
    
    <script src="{{ asset('/js/app.js')}}"></script>
    <!-- <script>
        $('#main_form').on('submit',function(event){
            event.preventDefault();

            $.ajax({
              url: "/User_data",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
              },
              success:function(response){
                console.log(response);
              },
             });
            });
    </script> -->
    <!-- Возникли сложности с отправкой формы с помощью ajax -->
</body>
</html>