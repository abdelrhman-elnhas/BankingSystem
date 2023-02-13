@extends('Includes.head')


@section('body')

<section id="home">
    <div class="row ms-5">
        <div class=" col-lg-5 d-flex" style="align-items: center;">
            <div class="mm ps-lg-5">
                <h1 class="Slogan">Money Flies</h1>
                <br>
                <p class="IntroTxt">This is an online banking service.
                you can send and recieve money using this platform in seconds.
                </p>
                <br>
                <a class="transferBtn" href="{{url('customers')}}">Transfer Now !</a>
            </div>
        </div>
        <div class=" col-lg-7 text-center">
            <img src="img/walletx.png" alt="">
        </div>
    </div>
</section>

@endsection
