<nav class="main-menu">
	<ul>
		<li><a href="{{route('home')}}">Home</a>
		</li>
		<li><a href="{{route('about')}}">About</a></li>
		<li><a href="#">Pages</a>
			<ul class="sub-menu">
				<li><a href="{{route('404')}}">404 page</a></li>
				<li><a href="{{route('about')}}">About</a></li>
				<li><a href="{{route('cart.list')}}">Cart</a></li>
				<li><a href="{{route('checkout')}}">Check Out</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="{{route('news')}}">News</a></li>
				<li><a href="{{route('shop')}}">Shop</a></li>
			</ul>
		</li>
		<li><a href="{{route('news')}}">News</a>
			<ul class="sub-menu">
				<li><a href="{{route('news')}}">News</a></li>
				<li><a href="{{route('singlenews')}}">Single News</a></li>
			</ul>
		</li>
		<li><a href="{{route('contact')}}">Contact</a></li>
		<li><a href="{{route('shop')}}">Shop</a>
			<ul class="sub-menu">
				<li><a href="{{route('shop')}}">Shop</a></li>
				<li><a href="{{route('checkout')}}">Check Out</a></li>
				<li><a href="{{route('singleproduct')}}">Single Product</a></li>
				<li><a href="{{route('cart.list')}}">Cart</a></li>
			</ul>
		</li>
		<li>
			<div class="header-icons">
				<a class="shopping-cart" href="{{route('cart.list')}}"><i class="fas fa-shopping-cart"></i> {{ Cart::getTotalQuantity()}}</a>
				<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
			</div>
		</li>
	</ul>
</nav>
<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
<div class="mobile-menu"></div>

 @if ($message = Session::get('success'))
      <div class="p-4 mb-3 bg-green-400 rounded">
          <p class="text-green-800">{{ $message }}</p>
      </div>
  @endif