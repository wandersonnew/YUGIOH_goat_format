<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'YU-GI-OH')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/goat.jpg') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center">YU-GI-OH goat format</h1>
            <!-- <p class="lead">Only list of all cards of goat format.</p> -->
            <div class="text-center">
                <img src="{{ asset('img/goat.jpg') }}" alt="" width="400">
            </div>
            <hr class="my-4">
            <p>Click on button from card type.</p>
            <p class="lead">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary btn-lg" href="{{ url('') }}" role="button">All types</a>
                    <a class="btn btn-primary btn-lg" href="{{ url('card_type', ['type' => 'monster']) }}" role="button">Monsters</a>
                    <a class="btn btn-primary btn-lg" href="{{ url('card_type', ['type' => 'spell']) }}" role="button">Spells</a>
                    <a class="btn btn-primary btn-lg" href="{{ url('card_type', ['type' => 'trap']) }}" role="button">Traps</a>
                </div>
            </p>

            <!-- <div class="row">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <a class="btn btn-primary" href="" role="button">Search card</a> -->
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input type="text" id="name" class="form-control" placeholder="Card Name">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" onclick="selectCardByName($('#name').val())">Search card</button>
                            <!-- <a class="btn btn-outline-secondary" href="" role="button">Search card</a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr class="my-4">
        @yield('content')
    </div>

    <script>
        function selectCardByName(param) {
            window.location.href = "/card_name/" + param;
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>