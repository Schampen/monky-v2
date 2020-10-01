<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&family=Merriweather:ital@1&family=Nunito&display=swap" rel="stylesheet">
    <title>MONKY</title>
</head>

<body>
    <header class="container my-4">
        <img src="bild/Monkyloga.svg" alt="MONKY logo">
    </header>
    <div class="w-100 d-flex justify-content-center">
        <img class="img-fluid" src="bild/monky.jpg" alt="Monky">
    </div>
    <div class="container pt-3 text-center">
        <h1 class="h3 text-justified text-uppercase">Return of the monke</h1>
        <p class="mb-3 mx-3 text-justify">Introducing the new MONKY, the newest sensation in the jungle! With a face that everybody loves he
            is the MONKY! Have you ever wondered how it feels to be a monkey? Then MONKY is just the thing for you. He can
            bobble his head just like a MONKY would and looks majestic when he's sitting on your desk looking fly like a real
            MONKY.</p>
        <div class="interestbutton">
            <a href="#form" class="btn btn-light btn-lg">INTERESTED</a>
        </div>
    </div>
    <div class="w-100 mt-3 d-flex justify-content-center">
        <img class="img-fluid" src="bild/dark.jpg" alt="Scary monky">
    </div>
    <div class="w-100 d-flex justify-content-center">
        <img class="img-fluid" src="bild/slanted.jpg" alt="Slanted monky">
    </div>
    <form class="container text-center text-justify" id="form" action="/" method="POST">
        @csrf

        <label class="h2 mt-3" for="form">INTERESTED?</label>
        <p class="mx-2 mt-2 mb-3">Register and get notified when Monky goes up for sale!</p>
        <div class="w-60 d-flex justify-content-center my-2">
            <input type="email" class="form-control mx-2 @error ('email') {{ $errors->has('email') ? 'alert-danger' : ''}}  @enderror " placeholder="Email" name="email" id="email">
        </div>
        @error ('email')
            <p class="text-danger"> {{ $errors->first('email') }} </p>
        @enderror
        <div class="submitbtn my-3">
            <button type="submit" class="btn btn-light btn-lg">Submit</button>
        </div>
        <p class="gdpr mx-2 my-3 font-weight-light text-justify">NOTE: By submitting your email you are agreeing to us storing your emails with the goal to notify you
            with updates of the product. Your information will be removed from our databases when the product no longer is for
            sale or if you would want it removed beforehand.</p>
    </form>
    <div class="w-100 d-flex justify-content-center">
        <img class="img-fluid" src="bild/closeup.jpg" alt="close up of monky">
    </div>
    <footer class="container my-4">
        <img class="img-fluid" src="bild/Monkyloga.svg" alt="MONKY logo">
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>