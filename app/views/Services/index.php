<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>Услуги</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10"></div>
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
                        <div class="row justify-content-center">
                            <a href="detail/index/<?= $arServices['id'] ?>" class="boxed-btn4">Подробнее...</a>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>

        </div>
    </div>
</div>
<!-- service_area_end -->

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
        <div class="row justify-content-center">

            <? foreach ($specialists as $arSpecialists): ?>

                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="<?= $arSpecialists['image'] ?>" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4><?= $arSpecialists['name'] ?>"</h4>
                                <p><?= $arSpecialists['specialization'] ?>"</p>
                            </div>
                        </div>
                    </div>
                </div>

            <? endforeach; ?>

        </div>
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


