<!DOCTYPE html>
<html lang="en">
<head>

@include('includes.head')

</head>
<body>
<div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->

      @include('includes.siteHeader')

      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->

            @include('includes.drinkMenu')

            <!-- end Drink Menu Page -->
          </div>
          @yield('content')
        </main>
      </div>    
    </div>

    @include('includes.footer')
    
  <!-- Background video -->
  @include('includes.backgroundV')

  @include('includes.footerJs')

</body>
</html>