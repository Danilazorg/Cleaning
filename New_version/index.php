<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pro-Cleaning</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;800&family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,900">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<!--Start Navbar-->        
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container text-center">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Pro-Cleaning<span></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.html" data-value="home">Главная</a></li>
                <li><a href="#" data-value="about">О нас</a></li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-value="service">Услуги</a>
                 
                </li>
                <li><a href="#" data-value="contact">Контакты</a></li>
                <?php
                if (isset($_COOKIE['UserID'])) {
                    echo'<li><a href="https://e92579fm-beget-tech.retailcrm.ru/chats" data-value="contact">CRM</a></li>
                    <li><a href="http://e92579fm.beget.tech/New_version/logout.php#" data-value="contact">Выход</a></li>';
                } else {
                    echo '<li><a href="http://e92579fm.beget.tech/New_version/loginUltraSecret.php#" data-value="contact">Вход</a></li>';
                } ?>
    
                <li class="number"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+7 964 789 28 88</a></li>  
              </ul>              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>  
<!--End Navbar-->
        
<!--Start carousel-->
       <!-- Wrapper for slides -->
        <div id="myslide" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="img-responsive" src="images/car1.jpg" width="1366" height="660" alt="hello">
              <div class="carousel-caption">
                <p class="lead">Лучший сервис уборки <br></p>
                <button type="button" data-toggle="modal" data-target="#exampleModal">Заказать клининг</button>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" src="images/car2.jpg" width="1366" height="660" alt="hello">
              <div class="carousel-caption">
                <p class="lead">Работаем с утра до вечера<br></p>
                <button type="button" data-toggle="modal" data-target="#exampleModal">Заказать клининг</button>
              </div>
            </div>  
            <div class="item">
              <img class="img-responsive" src="images/car3.jpg" width="1366" height="660" alt="hello">
              <div class="carousel-caption">
                
                <p class="lead">Все необходимое собой</p>
                
                <button type="button" data-toggle="modal" data-target="#exampleModal">Заказать клининг</button>
              </div>
            </div>
          </div>
        </div>    
<!--End Carousel-->
        
<!--Start Welcome-->
        <div class="welcome" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 im">
                        <img class="img-responsive" src="images/Capture.PNG" alt="Welcome">
                    </div>
                    <div class="col-md-6 ccol-xs-12">
                        <h2 class="h1">Профессиональная уборка</h2>
                        <p>Наша компания создана для предоставления услуг клининга, соответствующих всем стандартам и нормам, присущим сотрудникам высокой квалификации. Наши сотрудники проходят регулярное обучение и заботятся о том, чтобы оказанные услуги радовали клиентов качеством и доступностью в цене.
Работаем как с частными лицами, так и с юридическими.</p>
                        <button type="button" class="one uppercase btn btn-primary" data-toggle="modal" data-target="#exampleModal">Связаться с нами</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Отправить заявку на заказ</h4>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Ваше имя</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Ваш телефон</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Ваш адрес</label>
            <input type="text" class="form-control" name="address">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Сколько квадратных метров помещения требуется убрать?</label>
                <input type="text" class="form-control" name="quantity">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Комментарии к заявке</label>
            <input type="text" class="form-control" name="comment">
          </div>
          <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
             <label class="form-check-label" for="flexCheckDefault">
                Соглашаюсь на обработку персональных данных
              </label>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <input type="submit" class="btn btn-primary">
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
<!--End Welcome-->        

<?php
			$link = new mysqli('localhost', 'e92579fm_dp', '%d2EVoLk', 'e92579fm_dp');
					if (mysqli_connect_errno()) {
					printf("ОШИБКА", mysqli_connect_error());
					exit;
					}
				    if(isset($_POST['name'])&&($_POST['phone'])) {
					$name = $_POST['name'];
					$phone = $_POST['phone'];
					$address = $_POST['address'];
					$quantity = $_POST['quantity'];
					$comment = $_POST['comment'];
					$result = $link->query("INSERT INTO cleaning (name, phone, address, quantity, comment) VALUES ('$name', '$phone', '$address', '$quantity', '$comment')");
					}
					
					$result = $link->query("SELECT id FROM cleaning WHERE id=LAST_INSERT_ID()");
					 while($article = $result->fetch_assoc()) {
					     echo '<div  style="text-align: center; font-size: 20px" class="container">Номер вашей заявки: '.$article['id'].'</div>';
					 }
					
															
		?>

<!--Start Service-->
        <div class="service text-center" id="service">
            <div class="container">
                <span>Услуги</span>
                <h2 class="h1">Уборка любой сложности</h2>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">  
                            <div class="one">
                                <img src="images/vubr.jpg" alt="img">
                            </div>
                            <div class="over">
                                <p>Преимущество сухой уборки в том, что мы не используем никаких химических средств, что особо важно людям, страдающим аллергией.</p>
                            </div>
                        </div>
                        <h2 class="p">Сухая уборка</h2>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">  
                            <div class="one">
                                <img src="images/subr.jpg" alt="img">
                            </div>
                            <div class="over">
                                <p>При влажной уборке мы устрняем всю пыль с поверхностей, а также благодаря этому воздух в комнате увлажняется и становится чище. </p>
                            </div>
                        </div>
                        <h2 class="p">Влажная уборка</h2>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">  
                            <div class="one">
                                <img src="images/pubr.jpg" alt="img">
                            </div>
                            <div class="over">
                                <p>Наши сотрудники смогут справиться с пятнами любой сложности.</p>
                            </div>
                        </div>
                        <h2 class="p">Устранение пятен </h2>
                    </div>    
                </div>
                
            </div>
        </div>
<!--End Service-->     
        
<!--Start Dog-->
       <!-- <div class="dog" id="dog">
           <div class="container">
               <div class="col-md-5 col-xs-12">
                   <span>Carpetserv</span>
                   <h2 class="h1">Is Your Source For Expert Carpet</h2>
                   <p>We guarantee satisfaction. Just call us within 30 days of service and we’ll return to your home to remedy the problem</p>
                   <button><i class="fa fa-phone " aria-hidden="true"></i>0 100 138 7241</button>
                </div>   
           </div>
        </div> 
<!--End Dog-->
    
<!--Start Process-->
        <div class="process text-center" id="process">
            <div class="container">
                <!-- <span>Steps</span> -->
                <h3 class="h1">Наши процессы</h3>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="info">
                            <i class="fa fa-shower fa-4x" aria-hidden="true"></i>
                            <br>
                            <span>1</span>
                            <h2>Уборка пылесосом</h2>
                        </div>    
                        <i class="fa fa-chevron-right fa-2x xs-hidden pull-right  hidden-xs  hidden-sm" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="info">
                            <i class="fa fa-bath fa-4x" aria-hidden="true"></i>
                            <br>
                            <span>2</span>
                            <h2>Удаление пятен</h2>
                        </div>    
                        <i class="fa fa-chevron-right fa-2x xs-hidden pull-right  hidden-xs  hidden-sm" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="info">
                            <i class="fa fa-tint fa-4x" aria-hidden="true"></i>
                            <br>
                            <span>3</span>
                            <h2> Сушка </h2>
                        </div>    
                        <i class="fa fa-chevron-right fa-2x xs-hidden pull-right  hidden-xs  hidden-sm" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="info">
                            <i class="fa fa-shower fa-4x" aria-hidden="true"></i>
                            <br>
                            <span>4</span>
                            <h2> Сухая уборка </h2>
                        </div>    
                    </div>
                </div>    
            </div>
        </div>
<!--End Process-->   
    
<!--Start Faq-->
        <div class="faq" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <!-- <h2 class="h1">Image</h2> -->
                        <img style="width: 100%;" src="images/FAQs.svg" alt="image">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h2 class="h1">Частые вопросы</h2>
                        <section class="faq-questions">
        
                                <div class="panel-group" id="accordion">

                                    <!-- Start Question 1 -->

                                    <div class="panel panel-default">
                                        <div class="panel-heading active" id="heading-one">
                                            <h4 class="panel-title">
                                                <a class="collapsed uppercase" data-toggle="collapse" data-parent="#accordion" href="#collapse-one" aria-expanded="true">
                                                     Как оформить подписку на уборку?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-one" class="panel-collapse collapse in" aria-labelledby="heading-one">
                                            <div class="panel-body">
                                                Начните оформлять разовую уборку: введите дату и время, параметры квартиры, привяжите карту, а в конце выберите подходящий вариант регулярности подписки на уборки. После этого в разделе Мои заказы вы увидите 4 ближайшие уборки со скидкой. Подписка продлевается автоматически, но каждая уборка оплачивается отдельно. При необходимости уборки можно переносить или отменять.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Question 1 -->

                                    <!-- Start Question 2 -->

                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="heading-two">
                                            <h4 class="panel-title">
                                                <a class="collapsed uppercase" data-toggle="collapse" data-parent="#accordion" href="#collapse-two" aria-expanded="true">
                                                    Я смогу оставить клиннера одного?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-two" class="panel-collapse collapse" aria-labelledby="heading-two">
                                            <div class="panel-body">
                                                Да, вы можете спокойно оставить клинера наводить порядок и отправиться по делам. Но не забудьте вернуться домой к завершению уборки, чтобы принять работу. Или добавьте в уборку дополнительную опцию по доставке ключей — тогда клинер приедет и заберёт ключи перед уборкой, а после привезёт обратно.

                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Question 2 -->

                                    <!-- Start Question 3 -->

                                    <div class="panel panel-default">
                                        <div class="panel-heading " id="heading-three">
                                            <h4 class="panel-title">
                                                <a class="collapsed uppercase" data-toggle="collapse" data-parent="#accordion" href="#collapse-three" aria-expanded="true">
                                                    Клиннер сможет убраться в труднодоступных местах?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-three" class="panel-collapse collapse" aria-labelledby="heading-three">
                                            <div class="panel-body">
                                                Вы можете подготовить стремянку, чтобы клинер очистил доступные вертикальные и горизонтальные поверхности даже на высоте. Также клинер сможет помыть поверхности под кроватью, в стыках между мебелью и прочие в зоне доступа или полностью с вашей помощью. Жалюзи, стены и потолки не входят в поддерживающую уборку — только в генеральную .
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Question 3 -->

                                    <!-- Start Question 4 -->

                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="heading-four">
                                            <h4 class="panel-title">
                                                <a class="collapsed uppercase" data-toggle="collapse" data-parent="#accordion" href="#collapse-four" aria-expanded="true">
                                                    Что клиннер привезет собой и что нужно подготовить?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-four" class="panel-collapse collapse" aria-labelledby="heading-four">
                                            <div class="panel-body">
                                               У клинера с собой весь необходимый инвентарь для качественной поддерживающей уборки: губки и салфетки, моющие средства и телескопическая штанга длиной 1,5 метра.
Вы можете подготовить пылесос, чтобы сделать вашу уборку более тщательной. Если у вас нет пылесоса, клинер очистит поверхности там, где достанет, своими силами.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Question 4 -->

                                </div>
                            
                        </section>

                <!-- End FAQ Accordion -->
                    </div>
                </div>
            </div>
        </div>
<!--End  Faq-->
        
<!--Start Child-->
        <!-- <div class="child img-responsive" id="testi"> 
            <div class="over">
                <div class="container">
                    <div class="col-md-6 col-xs-12">
                        <q>It’s amazing what two kids can do to a carpet… spills & spots everywhere! I had no idea it could get this clean.</q>
                        <p><span>Thanks,</span> Sara Harrington</p>
                        <button class="uppercase">See more testimonial</button>
                    </div>    
                </div>
            </div>    
        </div>
<!--End Child-->     
        
<!--Start Plans-->
        <div class="plan text-center" id="plan">
            <div class="container">
                <!-- <span>Price</span> -->
                <h2 class="h1">Стоимость уборки квартиры</h2>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">
                            <div class="head">
                                <h2>&#8381;40<span>/m<sup>2</sup></span></h2>
                                <span>Уборка квартир</span>
                            </div>
                            <div class="body">
                                <p>Комплексная уборка квартир.</p>
                                <button class="uppercase" type="button" data-toggle="modal" data-target="#exampleModal">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="box premium">
                            <div class="head">
                                <h2>&#8381;70<span>/m<sup>2</sup></span></h2>
                                <span>Генеральная уборка</span>
                            </div>
                            <div class="body">
                                <p>Полная и тщательная процедура очищения всех поверхностей в доме.</p>
                                <button class="uppercase" type="button" data-toggle="modal" data-target="#exampleModal">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="box">
                            <div class="head">
                                <h2>&#8381;80<span>/m<sup>2</sup></span></h2>
                                <span>Уборка офисных помещений</span>
                            </div>
                            <div class="body">
                                <p>Ежедневная влажная уборкка всего офиса.</p>
                                <button class="uppercase" type="button" data-toggle="modal" data-target="#exampleModal">Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
<!--End Plans-->
        
<!--Start Log-->
        <div class="log" id="blog">
            <div class="container">
                <span class="text-center">Блог</span>
                <h2 class="h1 text-center">Последние посты</h2>
                <div class="row " >
                    <div class="col-sm-6 col-xs-12 ">
                        <div class="box">  
                            <img class="img-responsive text-center" src="images/n1.jpg" alt="blog">
                        </div>
                        <p>Дезинфекция</p>
                        <div class="info">
                            <span class="date"><i class="fa fa-calendar"></i>10 января 2022 </span>
                            <span class="comment"><i class="fa fa-comment-o"></i>Оставьте свой комментарий!</span>
                        </div>    
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="box">  
                            <img class="img-responsive text-center" src="images/n2.jpg" alt="blog">
                        </div>
                        <p>Меры безопасности</p>
                        <div class="info">
                            <span class="date"><i class="fa fa-calendar"></i>17 января 2022 </span>
                            <span class="comment"><i class="fa fa-comment-o"></i>3 Комментариев</span>
                        </div> 
                    </div>
                </div>
                <div class="text-center">
                  
                </div>    
            </div>
        </div>
<!--End Log-->        
        <div class="plan">
            <div class="container">
                <h2 class="h1 text-center" style="font-size: 55px !important">Отследить заказ</h2>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" style="width: 50%;margin: 0 auto;padding: 30px;border: 2px solid #549EFF;border-radius: 30px;" class="form-control" name="id" placeholder="Введите номер вашего заказа">
                        <input class="but_cont" style="margin: 0 auto; margin-top: 50px; display:block;" type="submit" class="btn btn-primary">
                      </div>
                </form>
                 <?php 
                                                       
                                                       $link = new mysqli('localhost', 'e92579fm_dp', '%d2EVoLk', 'e92579fm_dp');
                                                       $link->set_charset("utf8");
									                         if (mysqli_connect_errno()) {
									                             printf("ОШИБКА", mysqli_connect_error());
									                             exit;
									                         }
									                         $link->set_charset("utf8");
									                         $id = $_POST['id'];
									                         $result = $link->query("SELECT id, name, phone, address, quantity, comment, done FROM cleaning WHERE id = ${id}");
									                         if (isset($_POST['id'])) {
									                         while($article = $result->fetch_assoc()) {
									                   echo '
									                   <table class="p-2">
                                                            <th class="column-1" style="padding: 50px">Номер заявки:<br> '.$article['id'].'</th>
                                                            <th class="column-2" style="padding: 50px">Имя: <br>  '.$article['name'].'</th>
                                                            <th class="column-3" style="padding: 50px">Телефон: <br>  '.$article['phone'].'</th>
                                                            <th class="column-4" style="padding: 50px">Адрес: <br>  '.$article['address'].'</th>
                                                            <th class="column-5" style="padding: 50px">Квадратные метры: <br> '.$article['quantity'].'</th>
                                                            <th class="column-6" style="padding: 50px">Примечание: <br>  '.$article['comment'].'</th>
                                                            <th class="column-7" style="padding: 50px">Статус: <br>  '.$article['done'].' </th>
                                                        </table>
                                                            
                                                            ';
									                         }
									                         }
                                                        ?>
            </div>
        </div>
<!--Start contact-->
        <div class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <h2>Pro-Cleaning<span></span></h2>
                        <p></p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        
                        <ul class="list-unstyled">
                            
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <h2>Услуги</h2>
                        <ul class="list-unstyled">
                            <li>Для физических лиц</li>
                            <li>Для юридических лиц</li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <h2>Контакты</h2>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Адрес</h4>
                                <p>Москва, МЦК Крымская, улица Севастопольская 17</p>
                            </div>
                        </div>    
                        <div class="media">
                            <div class="media-left">
                                 <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Телефон:</h4>
                                <p>+7 964 789 28 88</p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--End contact-->  

<!--Start Footer-->        
       
<!--End Footer-->        
        
<!--Start Button Scroll-->
        <div id="scroll-top">
            <i class="fa fa-chevron-up fa-3x"></i>
        </div>   
<!--End Button Scroll-->        
        <!--^^jS Files^^-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>    