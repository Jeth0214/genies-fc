<li class="has-children">
  <a href="#" class="ps-1 pe-3">{{config('app.locale') == 'ar' ? 'عربي' : 'English' }}</a>
  <ul class="dropdown">
    @foreach(config('localization.locales') as $locale)
    <li>
      <a class="ml-1 underline ml-2 mr-2" href="/localization/{{$locale}} ">
        <span>{{ __($locale) == 'ar' ? 'عربي' : 'English'  }}</span>
      </a>
    </li>
    @endforeach
  </ul>
</li>