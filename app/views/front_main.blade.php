<html>
    <head>
        {{HTML::style('/ext/css/style.css')}}
        {{HTML::style('/ext/css/bootstrap.css')}}
        {{HTML::style('/ext/css/bootstrap.theme.css')}}
        {{HTML::script('/ext/js/jquery.js')}}
        {{HTML::script('/ext/js/bootstrap.js')}}
        {{HTML::script('/ext/js/rhinoslider-1.05.js')}}
        {{HTML::script('/ext/js/easing.js')}}
        {{HTML::script('/ext/js/jquery-ui-1.10.4.min.js')}}
        {{HTML::script('/ext/js/jquery.isotope.min.js')}}
        {{HTML::script('/ext/js/animated-masonry-gallery.js')}}
    </head>
    <body>
        <header>
            <div class="logo left"><a href="#"><img src="{{asset('ext/images/main/logo.png')}}"></a></div>
            <nav class="menu right">
                <a href="#">Проекты</a>
                <a href="studio">О студии</a>
                <a href="#">Контакты</a>
                <a href="#">Прайс</a>
            </nav>
        </header>

            <div class="slider">
               <ul id="slider">
        		<li><img src="{{asset('ext/images/slide1.jpg')}}" alt="" /></li>
        		<li><img src="{{asset('ext/images/slide2.jpg')}}" alt="" /></li>
        		<li><img src="{{asset('ext/images/slide3.png')}}" alt="" /></li>
               </ul>
            </div>
        <section>
          <div class="about">
            <div>
             <img src="{{asset('ext/images/main/about_logo_white.png')}}" /> <br />
             <p>
               In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.
             </p>
          </div>
         </div>
        </section>
        <section>
            <div class="projects">
                <h1>Projects</h1>
                <div class="gmenu">
                <div id="filter-all">All</div>
                <div id="filter-studio">Studio</div>
                <div id="filter-landscape">Landscapes</div>
                </div>
                <div id="gallery-content-center">
                    <a href=""><img src="{{asset('ext/_assets/studio1.jpg')}}" class="all studio"/><p style="display: none" onmouseup="show()">Catsville</p></a>
                    <img src="{{asset('ext/_assets/landscape1.jpg')}}" class="all landscape">
                    <img src="{{asset('ext/_assets/studio2.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/studio25.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/landscape2.jpg')}}" class="all landscape">
                    <img src="{{asset('ext/_assets/studio27.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/studio3.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/landscape3.jpg')}}" class="all landscape">
                    <img src="{{asset('ext/_assets/studio26.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/studio4.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/landscape4.jpg')}}" class="all landscape">
                    <img src="{{asset('ext/_assets/studio5.jpg')}}" class="all studio"/>
                    <img src="{{asset('ext/_assets/landscape5.jpg')}}" class="all landscape">
                    <img src="{{asset('ext/_assets/studio6.jpg')}}" class="all studio"/>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <div class="socialmedia left">
                    <a href="https://vk.com/meow_studio"><img src="{{asset('ext/images/main/vk.png')}}" alt="Meow! Studio Вконтакте"/></a>
                    <a href="https://twitter.com/meow_studio"><img src="{{asset('ext/images/main/twitter.png')}}" alt="Meow! Studio в Twitter"/></a>
                    <a href="https://www.facebook.com/groups/studio.meow/"><img src="{{asset('ext/images/main/facebook.png')}}" alt="Meow! Studio в Facebook"/></a>
                </div>
                <div class="button">
                    <a href="" class="contactus" >Написать нам</a>
                </div>
                <div class="logo right"><a href="#"><img src="{{asset('ext/images/main/about_logo_white.png')}}"></a></div>
            </div>
        </footer>
    </body>
    	<script type="text/javascript">
    			$(document).ready(function() {
    				$('#slider').rhinoslider({
    					effect: 'fade',
    					showTime: 2000,
    					effectTime: 1000,
    					easing: 'easeOutCirc',
    					randomOrder: true,
    					controlsMousewheel: false,
    					controlsKeyboard: false,
    					controlsPrevNext: false,
    					controlsPlayPause: false,
    					autoPlay: true,
    					pauseOnHover: false,
    					showBullets: 'never',
    					showControls: 'never'
    				});
    			});
    		</script>
</html>