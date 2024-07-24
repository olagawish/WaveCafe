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

            @yield('drinkMenu')

            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->

          @yield('aboutUs')

          <!-- end About Us Page -->

          <!-- Special Items Page -->

          @yield('specialItems')

          <!-- end Special Items Page -->

          <!-- Contact Page -->

          @yield('contact')

          <!-- end Contact Page -->

        </main>
      </div>    
    </div>

    @include('includes.footer')
    
  <!-- Background video -->
  @include('includes.backgroundV')

  @include('includes.footerJs')

</body>

</html>