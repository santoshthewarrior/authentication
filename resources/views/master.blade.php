<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>

	    
        
        <div class="wrapper">
	        <div class="header">
	        	@yield('header')
	        </div>
	        <div class="body">
            	@yield('content')
            </div>
            <div class="footer">
            	@yield('footer')
            </div>
        </div>
    </body>
</html>