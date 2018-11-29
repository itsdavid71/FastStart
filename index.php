<?php 
session_start();
if (isset($_SESSION['login'])) { 
    header('Location: admin.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>David - FastStart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="mdbootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="mdbootstrap/css/mdb.min.css" rel="stylesheet"> 
  <link href="mdbootstrap/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="styles/owl.carousel.min.css">
  <link rel="stylesheet" href="styles/owl.theme.default.min.css"> 
  <link rel="icon" href="img/icon.png">
  
</head>
  <div class="background">
    <div class="background-black">
      <div class="container">
        <div class="row main" id="main">
          <div class="col-xl-7 main-text">
            <div class="logo top1" id="logo"></div>
            <h1 class="left1">Разработка сайтов любой сложности</h1>
            <h3 class="bottom1">FastStart - команда опытных профессионалов по реализации задач любой сложности в области web-разработки и программирования. В кратчайшие сроки мы реализуем все ваши идеи и мысли и дадим мощный толчок вашему бизнесу!</h3>
            <div class="main-text-buttons left1">
              <button  class="about-link hover main-text-btn">О нас</button>
              <button class="price-link main-text-btn transparent">Стоимость</button>
            </div>
          </div>
          <div class="col-xl-5 col-sm-7">
            <form class="main-form bottom1" action="">
              <p class="main-form-title">Свяжитесь со мной</p>
              <input type="text" placeholder="Ваше имя" name="name" required>
              <input type="email" placeholder="Ваш E-Mail" name="email" required>
              <input class="hover-blue" type="submit" value="Отправить запрос">
              <p class="main-form-rules">Нажимая кнопку «ОТПРАВИТЬ ЗАПРОС» Вы даете согласие на обработку личных данных в соотстветствии правилами политики конфиденциальности.</p>
            </form>
          </div>
        </div>
      </div>
      
      <div class="about">
        <header>
          <div class="container">
            <div class=" navigation">
              <a href="#" class="logo-2"></a>
              <div class="nav-link">
                <a class="about-link">О нас</a>
                <a class="trips-link">Преимущества</a>
                <a class="contact-navlink">Как заказать</a>
                <a class="price-link">Стоимость</a>
                <a class="reviews-link">Отзывы</a>
                <a class="contact-navlink-2">Контакты</a>
                <a class="auth-link">Личный кабинет</a>
              </div>
              <div class="menu-mobile-btn">
                <div class="menu-mobile-btn-stick"></div>
                <div class="menu-mobile-btn-stick"></div>
                <div class="menu-mobile-btn-stick"></div>
              </div>
            </div>
          </div>  
          <div class="menu-mobile">
            <div class="menu-mobile-field">
              <a class="about-link">О нас</a>
              <a class="trips-link">Преимущества</a>
              <a class="contact-navlink">Как заказать</a>
              <a class="price-link">Стоимость</a>
              <a class="reviews-link">Отзывы</a>
              <a class="contact-navlink-2">Контакты</a>
              <a class="auth-link">Личный кабинет</a>

            </div>
          </div>
        </header>
        <div class="container">
          <div class="row about-block pb about-block-1">
            <div class="col-xl-6">
              <div class="intro-image"></div>
            </div>
            <div class="col-xl-6">
              <h2 class="about-block-title bottom">Наша главная задача - сделать ваш бизнес в интернете уникальным.</h2>
              <p class="about-block-desc right">Для нас нет сложных задач. Мы разрабатываем не просто интернет-ресурсы для бизнеса, а создаем уникальные сайты и порталы, которые максимально удовлетворяют потребности любого, даже самого требовательного, пользователя.</p>
              <div class="about-block-btn bottom"><button class="trips-link main-text-btn transparent">Подробнее</button></div>
            </div>
          </div>
        </div> 
        <div class="trips pb">
          <div class="container">
            <div class="trips-text pb">
                <h2 class="tac">Превращаем самые невероятные идеи в реальность</h2>
                <p class="tac">Если вы еще не знаете чего хотите, то мы придумаем все за вас!</p>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="feature-img"></div>
              </div>
              <div class="col-md-8 flex-container jcsb trips-area">
                <div class="trips-block">
                    <i class="fa fa-map-o" aria-hidden="true"></i>
                    <div class="trips-block-text">
                      <h4>Уникальный подход</h4>
                      <p>Мы подходим к идеям разработки с самых необычных сторон, что позволяет удивлять будущих пользователей.</p>
                    </div>
                </div>
                <div class="trips-block">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <div class="trips-block-text">
                      <h4>Монетизация</h4>
                      <p>Правильный дизайн быстро приводит потенциальных клиентов к покупке, поэтому наша команда уделяет этому самую важную роль.</p>
                    </div>
                </div>
                <div class="trips-block">
                  <i class="fa fa-rocket" aria-hidden="true"></i>
                  <div class="trips-block-text">
                    <h4>Повышение функционала</h4>
                    <p>Разработанные нами проекты всегда готовы к дополнительным расширеням функционала. За счет гибкости разработки, мы в кратчайшие добавим новые модули и решения.</p>
                  </div>
                </div>
                <div class="trips-block ">
                  <i class="fa fa-server" aria-hidden="true"></i>
                  <div class="trips-block-text">
                    <h4>Оптимизация процессов</h4>
                    <p>Весь оборот и отчетность по клиентам будут доступны в специальной системе userBox, которая разработана нашей командой для оптимизации процессов работы с клиентами.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="about-block pb pbottom about-block-2">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 about-block-text">
                  <h2>Качественный сайт в разумные сроки</h2>
                  <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются параллельно. Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.</p>
                  <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат. При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень функционала. Стоимость создания проекта начинается от 15 000 руб.</p>
                  <button class="main-text-btn transparent price-link">Узнать стоимость</button>
              </div>
              <div class="col-xl-6">
                <div class="feature-img-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact contact-first">
        <div class="container">
          <div class="row pb tac flex-container justify-center">
            <div class="contact-text flex pb tac">
              <h2 class="contact-text-h2">Хотите узнать, как развить свой бизнес?</h2>
              <p class="contact-text-p">Свяжитесь с нами и мы расскажем о том, что подойдет именно для вашего бизнеса и какие инструменты мы будем использовать.</p>
            </div>
            <a href="#" class="hover-blue contact-text-btn contact-navlink-2">Свяжитесь с нами</a>
          </div>
        </div>
      </div>
      <div class="price bgw pbottom">
        <div class="container">
          <div class="price-text tac pb">
              <h2 class="bluestick bs-1 tac">Стоимость</h2>
          </div>
          <div class="col-md-12 flex-container justify-center">
            <div class="card price-block">
              <div class="card-body">
                <h5 class="card-title">Сайт - визитка</h5>
                <div class="card-price">
                  <span class="card-price-start">от</span>
                  <span class="card-price-cost">15</span>
                  <span>тыс. руб.</span>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>1</b> страница</li>
                <li class="list-group-item"><b>Эксклюзивный</b> дизайн</li>
                <li class="list-group-item"><b>Адаптивная</b> верстка</li>
                <li class="list-group-item"><b>Внутренняя</b> оптимизация</li>
                <li class="list-group-item"><s>Платформа userBox</s></li>
              </ul>
              <div class="card-body">
                <a href="#" class="hover-blue card-btn contact-navlink-2">Заказать</a>
              </div>
            </div>

            <div class="card price-block">
              <div class="card-body">
                <h5 class="card-title">Сайт компании</h5>
                <div class="card-price">
                  <span class="card-price-start">от</span>
                  <span class="card-price-cost">40</span>
                  <span>тыс. руб.</span>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">До<b> 10</b> страниц</li>
                <li class="list-group-item"><b>Эксклюзивный</b> дизайн</li>
                <li class="list-group-item"><b>Адаптивная</b> верстка</li>
                <li class="list-group-item"><b>Внутренняя</b> оптимизация</li>
                <li class="list-group-item"><s>Платформа userBox</s></li>
              </ul>
              <div class="card-body">
                <a href="#" class="hover-blue card-btn contact-navlink-2">Заказать</a>
              </div>
            </div>

            <div class="card price-block">
              <div class="card-body">
                <h5 class="card-title">Магазин</h5>
                <div class="card-price">
                  <span class="card-price-start">от</span>
                  <span class="card-price-cost">220</span>
                  <span>тыс. руб.</span>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Эксклюзивный</b> дизайн</li>
                <li class="list-group-item"><b>Адаптивная</b> верстка</li>
                <li class="list-group-item"><b>Внутренняя</b> оптимизация</li>
                <li class="list-group-item"><b>Маргетинг</b> Решения</li>
                <li class="list-group-item">Платформа <b>userBox</b></li>
              </ul>
              <div class="card-body">
                <a href="#" class="hover-blue card-btn contact-navlink-2">Заказать</a>
              </div>
            </div>

            <div class="card price-block">
              <div class="card-body">
                <h5 class="card-title">Инернет - портал</h5>
                <div class="card-price">
                  <span class="card-price-start">от</span>
                  <span class="card-price-cost">500</span>
                  <span>тыс. руб.</span>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>1</b> страница</li>
                <li class="list-group-item"><b>Эксклюзивный</b> дизайн</li>
                <li class="list-group-item"><b>Адаптивная</b> верстка</li>
                <li class="list-group-item"><b>Внутренняя</b> оптимизация</li>
                <li class="list-group-item">Платформа <b>userBox</b></li>
              </ul>
              <div class="card-body">
                <a href="#" class="hover-blue card-btn contact-navlink-2">Заказать</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clients">
        <div class="container">
          <h2 class="bluestick bs-2 tac pb">Наши клиенты</h2>
          <div class="clients-block flex-container justify-center">
            <div class="clients-block-logo google"></div>
            <div class="clients-block-logo facebook"></div>
            <div class="clients-block-logo yandex"></div>
            <div class="clients-block-logo amazon"></div>
          </div>
          
        </div>
      </div>
      <div class="reviews pbottom">
        <div class="container">
          <h2 class="bluestick bs-3 tac pb ">Отзывы</h2>
          <div class="row justify-content-center tac reviews-area">
            <div class="owl-carousel owl-theme">
              <div class="col-xl-8 reviews-block">
                <div class="reviews-block-avatar one"></div>
                <p class="reviews-block-text">«Выражаем благодарность компании за работу над улучшением нашего сайта finnair.com Я высоко оцениваю качество выполненных работ по анализу потребностей пользователей и проектированию интерфейса новой системы личных сообщений. Считаю необходимым отдельно упомянуть ответственность по отношению к срокам выполнения поставленных задач и неукоснительное следование целям заказчика.»</p>
                <p class="reviews-block-name">Илья Бакланов, <span class="blue-text">Finnair</span></p>
              </div>
              <div class="col-xl-8 reviews-block">
                <div class="reviews-block-avatar two"></div>
                <p class="reviews-block-text">«С начала нашего сотрудничества чувствуется ответственное отношение менеджера к нашему проекту. В процессе своей деятельности специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. Нам отвечали своевременно на все возникающие вопросы, предоставляли консультации и рекомендации относительно нашего сайта. Чувствуется, что в данной компании работают настоящие профессионалы своего дела.»</p>
                <p class="reviews-block-name">Анна Старик, <span class="blue-text">Eventworld</span></p>
              </div>
              <div class="col-xl-8 reviews-block">
                <div class="reviews-block-avatar three"></div>
                <p class="reviews-block-text">«С начала нашего сотрудничества чувствуется ответственное отношение менеджера к нашему проекту. В процессе своей деятельности специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. Нам отвечали своевременно на все возникающие вопросы, предоставляли консультации и рекомендации относительно нашего сайта. Чувствуется, что в данной компании работают настоящие профессионалы своего дела.»</p>
                <p class="reviews-block-name">Денис Воробьев, <span class="blue-text">Viking Line</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact contact-second">
        <div class="container">
          <div class="row pb flex-container jcsb">
            <div class="contact-text">
              <h6 class="contact-text-h6"><span class="blue-text">Свяжитесь</span>  с нами</h6>
              <div class="fa-contact-block flex-container"><span class="fa fa-location-arrow"></span>
                <span>Большая Спасская ул. 12<br>Москва, Россия</span>
              </div>
              <div class="fa-contact-block flex-container"><span class="fa fa-phone"></span>
                <span>8(495)626-46-00</span>
              </div>
              <div class="fa-contact-block flex-container"><span class="fa fa-envelope-o"></span>
                <a class="contact-link">moscow@faststart.ru</a>
              </div>
              <div class="fa-contact-block flex-container"><span class="fa fa-laptop"></span>
                <a class="contact-link">www.faststart.ru</a>
              </div>
            </div>
            <div class="col-xl-7">
            <form class="contact-form" action="">
                <input class="contact-form-name" name="name" type="text" placeholder="Ваше имя">
                <input class="contact-form-email" name="email" type="email" placeholder="Ваш E-Mail">
                <textarea class="contact-form-message" name="message" id="" cols="30" rows="10" placeholder="Я хочу..."></textarea>
                <input class="hover-blue contact-form-button" type="submit" value="Отправить запрос">
                <p class="main-form-rules contact-form-rules">Нажимая кнопку «ОТПРАВИТЬ ЗАПРОС» Вы даете согласие на обработку личных данных в соотстветствии правилами политики конфиденциальности.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="socials pb flex-container justify-content-center">
          <div class="social-circle flex-container justify-content-center aic"><a class="fa fa-twitter" aria-hidden="true"></a></div>
          <div class="social-circle flex-container justify-content-center aic"><a class="fa fa-facebook" aria-hidden="true"></a></div>
          <div class="social-circle flex-container justify-content-center aic"><a class="fa fa-google" aria-hidden="true"></a></div>
          <div class="social-circle flex-container justify-content-center aic"><a class="fa fa-instagram" aria-hidden="true"></a></div>
      </div>
    </div>
  </div>
  

  <i class="fa fa-arrow-up" aria-hidden="true"></i>

  <div class="auth">
    <div class="auth-black">
      <div class="auth-block">
        <div class="auth-block-bg">
          <div class="auth-block-img"></div>
        </div>
        <div class="auth-block-area">
          <div class="auth-block-area-close">Вернуться на главную</div>
          <h4 class="tac pb">Авторизация</h4>
          <div class="authstick"></div>
          <form class="auth-form" action="auth.php" method="POST">
            <input class="contact-form-login auth-login" id="auth-login" name="login" type="text"  placeholder="Логин" required>
            <input class="contact-form-pass auth-pass" id="auth-pass" name="pass" type="password" placeholder="Пароль" required>
            <input class="hover-blue auth-form-btn" type="submit" value="Войти в аккаунт">
          </form>
          <div class="tac signup-btn">Зарегистрироваться</div>
        </div>
      </div>
    </div>
  </div>
  <!-- <h4 class="tac auth-title bluestick">Авторизация</h4> -->
<!-- signupG -->

<div class="signup">
    <div class="signup-black">
      <div class="signup-block">
        <div class="signup-block-area">
          <div class="signup-block-area-close">Вернуться на главную</div>
          <h4 class="tac pb">Регистрация</h4>
          <div class="signupstick"></div>
          <form class="signup-form" action="signup.php">
            <input class="contact-form-login" name="login" type="text" placeholder="Логин" id="signup-login">
            <input class="contact-form-pass" name="pass" type="password" placeholder="Пароль"  id="signup-pass">
            <input class="contact-form-pass" name="pass2" type="password" placeholder="Повторите пароль" id="signup-pass2">
            <input class="contact-form-mail" name="email" type="email" placeholder="Почта" id="signup-email">
            <input class="hover-white contact-form-btn" type="submit" value="Зарегистрировать аккаунт">
          </form>
          <div class="tac auth-back">Вернуться к авторизации</div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="mdbootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/mdb.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/overhang.min.css" />
  <script type="text/javascript" src="js/overhang.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
