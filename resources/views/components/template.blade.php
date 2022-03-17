<!DOCTYPE html>
<html lang="ja">
<head>
  <head>
   <x-head>
   </x-head>
  </head>
  @hasSection('wraperClass')
    <body id="goTop" class="site-wrap bg-white rg40 @yield('wraperClass')">
  @else
    <body id="goTop" class="site-wrap bg-white rg40">
  @endif
  <x-header />
  @hasSection('hero')
    @yield('hero')
  @endif
  @yield('contents')
  <x-footer />
  <x-pad />
</body>
</html>