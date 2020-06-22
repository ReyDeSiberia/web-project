@extends('layouts.header')

@section('content')
   
    <div id="banner">
       <h1>ГЛАВНАЯ НОВОСТЬ</h1>
        <div name='novosti'>
            <img src="img/news/news.jpg" style="width: 90%; margin-top: 20px; border-radius: 10px;"><br>
            <h1 style="font-family: Roboto;"><strong>АПЛ провела еще 1130 тестов на коронавирус – в лиге не осталось зараженных</strong></h1>
            <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7762865.shtml">
                <div class="button_more">узнать больше</div>
            </a>
        </div>
    </div>

	<div id="place_table">
	<a name="table"></a>
		<h2>ТАБЛИЦА</h2>
        <div id="table">
            <table>
                <tr>
                	<td>№</td>
                    <td></td>
                    <td>Команда</td>
                    <td>Сыграно</td>
                    <td>Побед</td>
                    <td>Ничьих</td>
                    <td>Поражений</td>
                    <td>Разница мячей</td>
                    <td>Очки</td>
                </tr>
                <!-- 	1-5 -->
                <tr>
                	<td bgcolor='#9fff96'>1</td>
                    <td bgcolor="green"></td>
                    <td bgcolor='#9fff96' style="text-align: left; padding-left: 25px;">LIVERPOOL</td>
                    <td bgcolor='#9fff96'>29</td>
                    <td bgcolor='#9fff96'>27</td>
                    <td bgcolor='#9fff96'>1</td>
                    <td bgcolor='#9fff96'>1</td>
                    <td bgcolor='#9fff96'>+45</td>
                    <td bgcolor='#9fff96'>82</td>
                </tr>
                <tr>
                	<td bgcolor='#9fff96'>2</td>
                    <td bgcolor="green"></td>
                    <td bgcolor='#9fff96' style="text-align: left; padding-left: 25px;">Manchester City</td>
                    <td bgcolor='#9fff96'>28</td>
                    <td bgcolor='#9fff96'>18</td>
                    <td bgcolor='#9fff96'>3</td>
                    <td bgcolor='#9fff96'>7</td>
                    <td bgcolor='#9fff96'>+37</td>
                    <td bgcolor='#9fff96'>57</td>
                </tr>
                <tr>
                	<td bgcolor='#9fff96'>3</td>
                    <td bgcolor="green"></td>
                    <td bgcolor='#9fff96' style="text-align: left; padding-left: 25px;">Leicester</td>
                    <td bgcolor='#9fff96'>29</td>
                    <td bgcolor='#9fff96'>16</td>
                    <td bgcolor='#9fff96'>5</td>
                    <td bgcolor='#9fff96'>8</td>
                    <td bgcolor='#9fff96'>+30</td>
                    <td bgcolor='#9fff96'>53</td>
                </tr>
				<tr>
                	<td bgcolor='#9fff96'>4</td>
                    <td bgcolor="green"></td>
                    <td bgcolor='#9fff96' style="text-align: left; padding-left: 25px;">Chelsea</td>
                    <td bgcolor='#9fff96'>29</td>
                    <td bgcolor='#9fff96'>14</td>
                    <td bgcolor='#9fff96'>6</td>
                    <td bgcolor='#9fff96'>9</td>
                    <td bgcolor='#9fff96'>+12</td>
                    <td bgcolor='#9fff96'>48</td>
                </tr>
                <tr>
                	<td bgcolor='#fff27f'>5</td>
                    <td bgcolor="orange"></td>
                    <td bgcolor='#fff27f' style="text-align: left; padding-left: 25px;">Manchester United</td>
                    <td bgcolor='#fff27f'>29</td>
                    <td bgcolor='#fff27f'>12</td>
                    <td bgcolor='#fff27f'>9</td>
                    <td bgcolor='#fff27f'>8</td>
                    <td bgcolor='#fff27f'>+14</td>
                    <td bgcolor='#fff27f'>45</td>
                </tr>
                <!-- 	6-10 -->
                <tr>
                	<td>6</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Wolves</td>
                    <td>29</td>
                    <td>10</td>
                    <td>13</td>
                    <td>6</td>
                    <td>+7</td>
                    <td>43</td>
                </tr>
                <tr>
                	<td>7</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Sheffield</td>
                    <td>28</td>
                    <td>11</td>
                    <td>10</td>
                    <td>7</td>
                    <td>+5</td>
                    <td>43</td>
                </tr>
                <tr>
                	<td>8</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Spurs</td>
                    <td>29</td>
                    <td>11</td>
                    <td>8</td>
                    <td>10</td>
                    <td>+7</td>
                    <td>41</td>
                </tr>
                <tr>
                	<td>9</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Arsenal</td>
                    <td>28</td>
                    <td>9</td>
                    <td>13</td>
                    <td>6</td>
                    <td>+4</td>
                    <td>40</td>
                </tr>
                <tr>
                	<td>10</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Burnley</td>
                    <td>29</td>
                    <td>11</td>
                    <td>6</td>
                    <td>12</td>
                    <td>-6</td>
                    <td>39</td>
                </tr>
                <!-- 	11-15 -->
                <tr>
                	<td>11</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Crystal Palace</td>
                    <td>29</td>
                    <td>10</td>
                    <td>9</td>
                    <td>10</td>
                    <td>-6</td>
                    <td>39</td>
                </tr>
                <tr>
                	<td>12</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Everton</td>
                    <td>29</td>
                    <td>10</td>
                    <td>7</td>
                    <td>12</td>
                    <td>-9</td>
                    <td>37</td>
                </tr>
                <tr>
                	<td>13 </td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Newcastle</td>
                    <td>29</td>
                    <td>9</td>
                    <td>8</td>
                    <td>12</td>
                    <td>-16</td>
                    <td>35</td>
                </tr>
                <tr>
                	<td>14</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Southampton</td>
                    <td>29</td>
                    <td>10</td>
                    <td>4</td>
                    <td>15</td>
                    <td>-17</td>
                    <td>34</td>
                </tr>
                <tr>
                	<td>15</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Brighton</td>
                    <td>29</td>
                    <td>6</td>
                    <td>11</td>
                    <td>12</td>
                    <td>-8</td>
                    <td>29</td>
                </tr>
                <!-- 	16-20 -->
                <tr>
                	<td>16</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">West Ham</td>
                    <td>29</td>
                    <td>7</td>
                    <td>6</td>
                    <td>16</td>
                    <td>-15</td>
                    <td>27</td>
                </tr>
                <tr>
                	<td>17</td>
                    <td></td>
                    <td style="text-align: left; padding-left: 25px;">Watford</td>
                    <td>29</td>
                    <td>6</td>
                    <td>9</td>
                    <td>14</td>
                    <td>-17</td>
                    <td>27</td>
                </tr>
                <tr>
                	<td bgcolor='#ffa6a6'>18</td>
                    <td bgcolor="red"></td>
                    <td bgcolor='#ffa6a6' style="text-align: left; padding-left: 25px;">Bournemouth</td>
                    <td bgcolor='#ffa6a6'>29</td>
                    <td bgcolor='#ffa6a6'>7</td>
                    <td bgcolor='#ffa6a6'>6</td>
                    <td bgcolor='#ffa6a6'>16</td>
                    <td bgcolor='#ffa6a6'>-18</td>
                    <td bgcolor='#ffa6a6'>27</td>
                </tr>
                <tr>
                	<td bgcolor='#ffa6a6'>19</td>
                    <td bgcolor="red"></td>
                    <td bgcolor='#ffa6a6' style="text-align: left; padding-left: 25px;">Aston Villa</td>
                    <td bgcolor='#ffa6a6'>28</td>
                    <td bgcolor='#ffa6a6'>7</td>
                    <td bgcolor='#ffa6a6'>4</td>
                    <td bgcolor='#ffa6a6'>17</td>
                    <td bgcolor='#ffa6a6'>-22</td>
                    <td bgcolor='#ffa6a6'>25</td>
                </tr>
                <tr>
                	<td bgcolor='#ffa6a6' class='ugol'>20</td>
                    <td bgcolor="red"></td>
                    <td bgcolor='#ffa6a6' style="text-align: left; padding-left: 25px;">Norwich</td>
                    <td bgcolor='#ffa6a6'>29</td>
                    <td bgcolor='#ffa6a6'>5</td>
                    <td bgcolor='#ffa6a6'>6</td>
                    <td bgcolor='#ffa6a6'>18</td>
                    <td bgcolor='#ffa6a6'>-27</td>
                    <td bgcolor='#ffa6a6'>21</td>
                </tr>
                <tr>
                	<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>&copy; EPL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
	</div>
	
	<div id="osnova">
	    <a name="novosti"></a>
		<div class="zagolovok"><h2>НОВОСТИ КЛУБОВ И ЛИГИ</h2></div>

            <div class="row">  
                <div class="column">
                    <h3>17-летний игрок «Ливерпуля» Эллиотт отказался от встречи с Рамосом из-за эпизода с Салахом</h3>
                    <img src="img/news/news1.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7763830.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <h3>«Дерьмо было везде». Сотрудник «МЮ» рассказал, как клубную раздевалку затопило из канализации</h3>
                    <img src="img/news/news2.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7763130.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="column">
                    <h3>АПЛ опубликовала расписание первого тура после возобновления</h3>
                    <img src="img/news/news3.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7767334.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
            </div>
            
            
            
            <div class="row">  
                <div class="column">
                    <h3>Варди с женой сгоняли в «МакАвто» на Bentley за 145 тыс евро</h3>
                    <img src="img/news/news4.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7768168.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <h3>Зинченко: «С чемпионством «Ливерпуля» все смирились»</h3>
                    <img src="img/news/news5.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7766802.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="column">
                    <h3>Абрамович купил самую дорогую виллу Израиля за 58 миллионов евро</h3>
                    <img src="img/news/news6.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7764568.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
            </div>
            
            
            
            <div class="row">  
                <div class="column">
                    <h3>АПЛ вернется 17 июня матчами «Ман Сити» – «Арсенал» и «Астон Вилла» – «Шеффилд»</h3>
                    <img src="img/news/news7.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7760811.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <h3>Mundo Deportivo: Коутиньо может вернуться в АПЛ. Игроком интересуются «Арсенал», «МЮ» и «Челси»</h3>
                    <img src="img/news/news8.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7760861.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
                <div class="column">
                    <h3>Manchester Evening News: «МЮ» взял 156 млн евро кредитов на трансферы</h3>
                    <img src="img/news/news9.jpg" class="news">
                    <a href="https://www.eurosport.ru/football/premier-league/2019-2020/story_sto7760341.shtml" target="_blank">
                        <div class="button_more">узнать больше</div>
                    </a>
                </div>
            </div>
            
            
            <a href="https://www.eurosport.ru/football/premier-league/" target="_blank">
                <div class="button_news">перейти к главному источнику новостей</div>
            </a>
	</div>
	

</body>
<footer>
   <p style="color: #aaa; font-size: 1.2em; line-height: 1.9em;">
       <a href="/">главная&emsp;</a>
       <a href="/gallery">галерея&emsp;</a>
       <a href="/video">видео&emsp;</a>
       <a href="/stats">статистика</a>
   </p>
   <a name='connection'></a>
    <p style="color: #fff; text-transform: none;">e-mail: ostapchuksergey@bk.ru<br>
    all rights reserved<br>
    &copy; 2020</p>
    </footer>
@endsection()