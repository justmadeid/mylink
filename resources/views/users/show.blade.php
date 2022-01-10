<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div id="app">
      <div class="container">
        <div class="media mt-5">
          <img src="https://res.cloudinary.com/phonerefer/image/upload/v1575096088/ve0o2n85nfvgdatgqer2.jpg" class="m-3" alt="image" width="75px" height="75px">
          <div class="media-body m-2">
            <h5 class="align-items-center mt-2">Your Name</h5>
            <p>Hello!
            I am (Your Name)
            Developer based in (Your City), (Your Country).</p>
          </div>
        </div>
      <div class="mt-4">
          @foreach($user->links as $link)
                          <div class="link">
                              <a
                                  class="user-link d-block p-4 mb-4 rounded h3 text-center"
                                  style="border: 2px solid;"
                                  href="{{ $link->link }}"
                                  target="_blank"
                                  rel="nofollow"
                                  data-link-id="{{ $link->id }}"
                              >{{ $link->name }}</a>
                          </div>
                      @endforeach
      </div>
        <div class="footer mt-5">
          <hr/>
          <h6>Made With <span class="love">♥</span> in (Your City), (Your Country)</h6>
          <h6>
            Proudly Hosted By
            <a href="/" class="name" target="_blank"> (Your Name) </a>
            <a id="email" href="mailto:Your Mail"> <i class="fa fa-envelope"> </i> </a>
          </h6>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
