<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>

    <link rel="stylesheet" href="defaults.css">
    <link rel="stylesheet" href="task-view.css">
    <link rel="stylesheet" href="task-edit-modal.css">
</head>
<body>

<header class="header">

    <div class="header__brand">
        <a href="#" class="header__brand-wrapping-link">
            <img src="https://lh3.googleusercontent.com/ERTZ2DcD3VPwzKlkHuip46iIDyMPKH55XNszOjgaYxUKa_ApvOa_bdAVwmoL3YJY5g=w300"
                 alt="logo" class="header__brand-image">
            <h1 class="header__brand-title">Наши Дела</h1>
        </a>
    </div>

</header>

<div class="anchors">
    <a href="" name="001" class="anchors__column-anchor column-anchor"></a>
    <a href="" name="002" class="anchors__column-anchor column-anchor"></a>
    <a href="" name="003" class="anchors__column-anchor column-anchor"></a>
</div>

<main class="flex-centering">
    <div class="task-view">

        <div class="task-column task-view__column">
            <h2 class="task-column__title">Ожидающие <span class="task-column__task-number">(1)</span></h2>

            <div class="task-column__add-task-button control-button">
                <div class="task-column__add-task-button-wrapper">
                    <span class="task-column__add-task-button-title js-task-column__add-task-button-title">Добавить задачу</span>
<!--                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/archive/2/22/20110815144330%21Greek_cross.svg/120px-Greek_cross.svg.png"-->
<!--                         alt="" class="task-column__add-task-button-image">-->
                </div>
            </div>

            <div class="task-column__task-container">

                <!--            Сама задача-->
                <div class="task task-column__task">

                    <h3 class="task__title">Название задачи</h3>
                    <p class="task__body">Тело задачи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        aperiam architecto
                        asperiores aut beatae dolor, doloremque.</p>

                    <div class="task__meta-info">
                        <div><b>Уполномоченный</b></div>
                        <div><span>Глеб – megas781@gmail.com</span></div>
                    </div>

                    <div class="task__controls">
                        <div class="control-button task__control-button task__control-button-delete"></div>
                        <div class="control-button task__control-button task__control-button-edit js-task__control-button-edit"></div>
                    </div>

                </div>


            </div>


        </div>
        <div class="task-column task-view__column">
            <h2 class="task-column__title">В процессе <span class="task-column__task-number">(2)</span></h2>

            <div class="task-column__task-container">

                <!--            Сама задача-->
                <div class="task task-column__task">

                    <h3 class="task__title">Название задачи</h3>
                    <p class="task__body">Тело задачи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        aperiam architecto
                        asperiores aut beatae dolor, doloremque.</p>

                    <div class="task__meta-info">
                        <div><b>Время начала</b></div>
                        <div><span>21 февраля 2019 г., 16:52</span></div>
                    </div>

                    <div class="task__meta-info">
                        <div><b>Уполномоченный</b></div>
                        <div><span>Глеб – megas781@gmail.com</span></div>
                    </div>

                    <div class="task__controls">
                        <div class="control-button task__control-button task__control-button-delete"></div>
                        <div class="control-button task__control-button task__control-button-edit"></div>
                    </div>

                </div>


                <!--            Сама задача-->
                <div class="task task-column__task">

                    <h3 class="task__title">Название задачи</h3>
                    <p class="task__body">Тело задачи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        aperiam architecto
                        asperiores aut beatae dolor, doloremque.</p>

                    <div class="task__meta-info">
                        <div><b>Время начала</b></div>
                        <div><span>21 февраля 2019 г., 16:52</span></div>
                    </div>
                    <div class="task__meta-info">
                        <div><b>Уполномоченный</b></div>
                        <div><span>Глеб – megas781@gmail.com</span></div>
                    </div>

                    <div class="task__controls">
                        <div class="control-button task__control-button task__control-button-delete"></div>
                        <div class="control-button task__control-button task__control-button-edit"></div>
                    </div>

                </div>

            </div>

        </div>
        <div class="task-column task-view__column">

            <h2 class="task-column__title">Выполненные <span class="task-column__task-number">(1)</span></h2>


            <div class="task-column__task-container">


                <!--            Сама задача-->
                <div class="task task-column__task">

                    <h3 class="task__title">Название задачи</h3>
                    <p class="task__body">Тело задачи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        aperiam architecto
                        asperiores aut beatae dolor, doloremque.</p>

                    <div class="task__meta-info">
                        <div><b>Время начала</b></div>
                        <div><span>21 февраля 2019 г., 16:52</span></div>
                    </div>
                    <div class="task__meta-info">
                        <div><b>Время конца</b></div>
                        <div><span>22 февраля 2019 г., 16:52</span></div>
                    </div>
                    <div class="task__meta-info">
                        <div><b>Уполномоченный</b></div>
                        <div><span>Глеб – megas781@gmail.com</span></div>
                    </div>

                    <div class="task__controls">
                        <div class="control-button task__control-button task__control-button-delete"></div>
                        <div class="control-button task__control-button task__control-button-edit"></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</main>

<footer class="footer">

    <div class="footer__info">
        <span class="footer__info-line">Выполнил Калачев Глеб, 181-321. Наши Дела</span>
        <span class="footer__info-line">Все права защищены.</span>
    </div>

</footer>

<div class="task-edit-modal modal">
    <div class="task-edit-modal__background"></div>

    <div class="task-edit-modal__view">

        <div class="task-edit-modal__header">
            <h3 class="task-edit-modal__title">Создание задачи</h3>
        </div>

        <div class="task-edit-modal__body">

            <div class="task-edit-modal__field">
                <h4 class="task-edit-modal__field-title">Задача</h4>
                <input type="text" required placeholder="" class="text-input task-edit-modal__text-input js-task-edit-modal__task-title-input">
            </div>
            <div class="task-edit-modal__field">
                <h4 class="task-edit-modal__field-title">Заметки</h4>
                <textarea name="" id="" placeholder="" class="task-edit-modal__task-notes-input js-task-edit-modal__task-notes-input"></textarea>
            </div>
            <div class="task-edit-modal__field">
                <h4 class="task-edit-modal__field-title">Выполняющий</h4>
                <input type="text"  class="text-input task-edit-modal__text-input js-task-edit-modal__task-responsible-input">
            </div>

        </div>
        <div class="task-edit-modal__footer">

            <div class="task-edit-modal__footer-wrapper">
                <button class="control-button task-edit-modal__control-button task-edit-modal__cancel-button js-task-edit-modal__cancel-button">Отмена</button>
                <button class="control-button task-edit-modal__control-button task-edit-modal__create-button js-task-edit-modal__create-button">Создать</button>
            </div>
        </div>

    </div>

</div>


<script src="script.js"></script>

</body>
</html>