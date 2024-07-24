
<nav class="tm-black-bg tm-drinks-nav">
  <ul>
    <li>
      <a href="{{ route('drink.cold') }}" class="tm-tab-link {{ request()->is('drink/cold') ? 'active' : '' }}" data-id="cold">Iced Coffee</a>
    </li>
    <li>
      <a href="{{ route('drink.hot') }}" class="tm-tab-link {{ request()->is('drink/hot') ? 'active' : '' }}" data-id="hot">Hot Coffee</a>
    </li>
    <li>
      <a href="{{ route('drink.juice') }}" class="tm-tab-link {{ request()->is('drink/juice') ? 'active' : '' }}" data-id="juice">Fruit Juice</a>
    </li>
  </ul>
</nav>