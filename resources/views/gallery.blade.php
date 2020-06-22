@extends('layouts.header')

@section('content')
   
    <div id="banner">
       <h1>фото дня</h1>
        <div id='dayphoto'>
            <img src="img/photos/photoday.jpg" style="width: 90%; margin-top: 20px; border-radius: 10px;"><br>
        </div>
    </div>
	
	<div id="osnova">
		<div class="zagolovok"><h2>фото</h2></div>

            <div class="row">  
                <div class="column">
                    <img src="img/photos/photo%20(1).jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/photos/photo%20(2).jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/photos/photo%20(3).jpg" class="news">
                </div>
            </div>
            <div class="row">  
                <div class="column">
                    <img src="img/photos/photo%20(4).jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/photos/photo%20(5).jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/photos/photo%20(6).jpg" class="news">
                </div>
            </div>
            <div class="row">  
                <div class="column">
                    <img src="img/photos/photo%20(7).jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/photos/photo%20(8).jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/photos/photo%20(9).jpg" class="news">
                </div>
            </div>
            <div class="row">  
                <div class="column">
                    <img src="img/photos/photo%20(10).jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/photos/photo%20(11).jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/photos/photo%20(12).jpg" class="news">
                </div>
            </div>
            
            
            
            
            <div class="zagolovok"><h2>Ретро</h2></div>

            <div class="row">  
                <div class="column">
                    <img src="img/retro/retro1.jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/retro/retro2.jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/retro/retro3.jpg" class="news">
                </div>
            </div>
            <div class="row">  
                <div class="column">
                    <img src="img/retro/retro4.jpg" class="news">
                </div>
                <div class="overlay"></div>
                <div class="column">
                    <img src="img/retro/retro5.jpg" class="news">
                </div>
              <div class="column">
                    <img src="img/retro/retro6.jpg" class="news">
                </div>
            </div>
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