<h3>Сервисы</h3>
<form class="form-contact contact_form" action="" method="post">
    <div class="row">
        <div class="col-12">

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="title" id="title" type="text" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Введите название услуги'" placeholder="Введите название услуги">
            </div>
        </div>
        <div class="col-sm-6">
        </div>
        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control w-100" name="shot_description" id="shot_description" cols="30" rows="3"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Краткое описание услуги'"
                          placeholder="Краткое описание услуги"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-control w-100" name="description" id="description" cols="30" rows="5"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Описание услуги'"
                          placeholder="Описание услуги"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="services" id="services" class="button button-contactForm boxed-btn"
               value="Отправить">
    </div>
</form>

<!--<h3 style="margin-top: 100px">Специалисты</h3>
<form class="form-contact contact_form" action="" method="post">
    <div class="row">
        <div class="col-12">

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ФИО'" placeholder="Введите ФИО">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Специальность'" placeholder="Специальность">
            </div>
        </div>
        <div class="col-12">
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="feedback" id="feedback" class="button button-contactForm boxed-btn" value="Отправить">
    </div>
</form>-->

<h3 style="margin-top: 100px">Сообщения пользователей</h3>
<? foreach ($feedback as $arFeedback): ?>

    <div>Тема сообщения: <?= $arFeedback['subject'] ?>  </div>
    <div>ФИО: <?= $arFeedback['name'] ?>  </div>
    <div>Email: <?= $arFeedback['email'] ?>  </div>
    <div style="margin-bottom: 30px">Текст сообщения: <?= $arFeedback['message'] ?>  </div>

<? endforeach; ?>