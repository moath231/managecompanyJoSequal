<nav class="flex items-center justify-between">
   <a href="/" class="text-lg font-semibold text-gray-800 hover">My Site</a>
   <div class="flex items-center">
      @auth
         <span class="px-3 py-2 rounded-full text-sm font-semibold text-blue-700 bg-gray-200 mr-2">
            @if (Auth::check())
               {{ Auth::user()->name }}
            @endif
         </span>
         <a href="{{ route('adminCompany.index') }}"
            class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2 D {{ Request::routeIs('admincompany') ? 'active' : '' }}">dashboard
         </a>
         <a href="{{ route('welcome') }}"
            class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2 {{ Request::routeIs('welcome') ? 'active' : '' }}">Home
         </a>
         <a href="{{ route('employee.index') }}"
            class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2 {{ Request::routeIs('employee.index') ? 'active' : '' }}">employee
         </a>
         <a href="{{ route('company.index') }}"
            class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2 {{ Request::routeIs('company.index') ? 'active' : '' }}">company
         </a>
         
      @endauth
      @guest
         <a class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2"
            href="{{ route('login') }}">
            {{ __('Login') }}
         </a>
      @else
         <a href="{{ route('logout') }}"
            class="px-3 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 hover:text-gray-800 mr-2"
            onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
         </form>
      @endguest

   </div>
</nav>
