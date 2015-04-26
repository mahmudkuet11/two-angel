<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('css/paper.css') }}
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/datepicker.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
        {{ HTML::script('js/vendor/jquery-1.10.2.min.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      @include('layout.navigation')

              <div class="icon_nav"  id="hideable_row">
                  <ul>
                      <li><a href="{{ URL::route('getNewVouchar') }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getSearchVouchar') }}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getAddNewProduct') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getAddNewExpense') }}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getReportByDate') }}"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getDueReport') }}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></li>
                      <li><a href="{{ URL::route('getBarcode') }}"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></a></li>
                  </ul>
              </div>


      @yield('content')

        
        <div class="status_bar">
            <marquee>
                Software Developed by <a href="www.unitech4u.com">UniTech4U</a>, Morol Plaza, 1st floor,

                K.D.A Plot #29,30. Badamtala, Khulna.

                Telephone : 041-786177

                Mobile : +88 01789200027, +88 01954160203

                Email : info@unitech4u.com
                website : www.unitech4u.com
            </marquee>

        </div>

        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/vendor/bootstrap-datepicker.js') }}
        {{ HTML::script('js/main.js') }}

    </body>
</html>
