<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider slider_bg_1 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="slider_text">
                        <h3>Забота <br> <span>о вашем питомце</span></h3>
                        <p>ОТЕЛЬ  <br> ДЛЯ ДОМАШНИХ ЖИВОТНЫХ</p>
                        <a href="/contacts" class="boxed-btn4">Свяжитесь с нами</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dog_thumb d-none d-lg-block">
            <img src="../img/banners/dog.png" alt="">
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Услуги отеля</h3>
                    <p>У Вас появилась возможность спокойно планировать отпуск или решать возникающие проблемы, не беспокоясь о том, кому оставить на попечение своего друга! Мы с любовью примем на время Вашего отсутствия собаку, кошку и других домашних животных!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">


            <? foreach ($services as $arServices): ?>

                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="<?= $arServices['image'] ?>" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                            <h3><?= $arServices['title'] ?></h3>
                            <p><?= $arServices['shot_description'] ?></p>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>

        </div>
    </div>
    <div class="row justify-content-center">
    <a href="/services" class="boxed-btn3">Подробнее об услугах</a>
    </div>
</div>
<!-- service_area_end -->

<!-- pet_care_area_start  -->
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="/img/about/pet_care.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info">
                    <div class="section_title">
                        <h3><span>Мы заботимся о вашем питомце </span> <br>
                            так же, как и вы</h3>
                        <p>Наш отель для домашних животных работает без выходных и праздничных дней, поэтому Вы можете отдать животное в надежные руки в любой удобный для Вас день с 10:00 до 18:00!</p>
                        <a href="/about" class="boxed-btn3">Подробнее о нас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->

<!-- team_area_start  -->
<div class="team_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Наша команда специалистов</h3>
                    <p>В штат нашей компании входят только настоящие профессионалы с большим опытом работы.</p>
                </div>
            </div>
        </div>
        <!-- testmonial_area_start  -->
        <div class="testmonial_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="textmonial_active owl-carousel">

                            <? foreach ($specialists as $arSpecialists): ?>

                                <div class="testmonial_wrap">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="test_thumb">
                                            <img src="<?= $arSpecialists['image'] ?>" alt="">
                                        </div>
                                        <div class="test_content">
                                            <h4><?= $arSpecialists['name'] ?></h4>
                                            <span><?= $arSpecialists['specialization'] ?></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                            <? endforeach; ?>


                           <!--
                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                        <img src="/img/testmonial/3.png" alt="">
                                    </div>
                                    <div class="test_content">
                                        <h4>Мария Кац</h4>
                                        <span>Кинолог</span>
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                            <div class="testmonial_wrap">
                                <div class="single_testmonial d-flex align-items-center">
                                    <div class="test_thumb">
                                        <img src="/img/testmonial/4.png" alt="">
                                    </div>
                                    <div class="test_content">
                                        <h4>Наталья Иванова</h4>
                                        <span>Страховщик</span>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            -->





                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- testmonial_area_end  -->
    </div>
</div>
<!-- team_area_start  -->

<div class="contact_anipat anipat_bg_1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact_text text-center">
                    <div class="section_title text-center">
                        <h3>Почему стоит обращаться в Anipat?</h3>
                        <p>Потому что мы знаем, что нужно вашим питомцам. ТЕХПОДДЕРЖКА 24/7.</p>
                    </div>
                    <div class="contact_btn d-flex align-items-center justify-content-center">
                        <a href="/contacts" class="boxed-btn4">Напишите нам</a>
                        <p>Или позвоните  <a href="#"> +375 29 593 85 00</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


