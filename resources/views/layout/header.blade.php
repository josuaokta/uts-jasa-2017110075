<head>
    <meta charset="UTF-8">
    <title>Cilame Towing - Pricing</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/style.css" rel="stylesheet">
</head>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Cilame Towing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item {{ Route::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::is('service') ? 'active' : '' }}">
              <a class="nav-link" href="service">Service</a>
            </li>
            <li class="nav-item {{ Route::is('testimoni') ? 'active' : '' }}">
              <a class="nav-link" href="testimoni">Testimoni</a>
            </li>
            <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
              <a class="nav-link" href="about">About Us</a>
            </li>
          </ul>
        </div>
    </nav>
</div>

<script src="/js/app.js"></script>
