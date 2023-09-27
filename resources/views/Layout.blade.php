<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('assets/css/layout.css')}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   


</head>
<body>
    <div class="container">
        <header>
            <div class="p-3 header">
                <div class="d-flex align-items-center">
                    <div class="col-lg-4">
                        <a href="#" class="">Laravel 10</a>
                    </div>
                    <div class="col-lg-8">
                        <div class="navbar">
                            <ul class="d-flex list-unstyled">
                                <li><a href="#" class="list-item">Home</a></li>
                                <li><a href="#" class="list-item">cars</a></li>
                                <li><a href="#" class="list-item">customres</a></li>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </div>
        
            
     
        </header>
    
         <div class="row" >
                    @yield('content')
        </div>
    
         <footer class="footer p-4">
                    <div id="copyright text-right" class="text-center text-white">© Copyright 2023 progmix </div>
        </footer>
    

    </div>

    
        
    
    
   
 
</body>
</html>