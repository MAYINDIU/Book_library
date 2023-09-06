<!DOCTYPE html>
<html lang="en">
<head>
    @include('homePartial._head')
</head>
<body>
    <!-- page header -->
    <header class="only-color">
        <!-- sticky menu -->
        <div class="sticky-wrapper">
            <div class="sticky-menu">
                <div class="grid-row clear-fix">
                    @include('homePartial._logo')
                    <!-- @include('homePartial._navbar') -->
                    @include('homePartial._navbar2')
                </div>
            </div>
        </div>
        <!-- sticky menu -->
    </header>
    
    <div id="home" class="page-content padding-none">
        @yield('content')
    </div>
      

        <div class="footer-bottom">
            @include('homePartial._bottom')     
            </div>       
    </footer>
        @include('homePartial._script') 
    

    </body>
</html>