<header>
  <h1 class="logo">
    <a href="/">
      {{config('app.name')}}
    </a>
  </h1>
  <nav class="menu">
    <input type="checkbox" id="menu-btn-check">
    <label for="menu-btn-check" class="menu-btn bg-orange"><span></span></label>
    <ul class="overlay">
      @foreach(__('web/glovalNav') as $nav)
        <li data-text="{{ $nav['text'] }}">
          <a href="{{ $nav['href'] }}">{{ $nav['context'] }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</header>