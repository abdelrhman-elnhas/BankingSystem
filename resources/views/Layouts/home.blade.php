@extends('Includes.head')


@section('body')

                <section id="home">
                    <div class="txt col-lg-5">
                        <h1 class="Slogan">Money Flies</h1>
                        <br>
                        <p class="IntroTxt">This is an online banking service.
                        you can send and recieve money using this platform in seconds.
                        </p>
                        <br>
                        <a class="transferBtn" href="{{url('customers')}}">Transfer Now !</a>
                    </div>
                    <div class="icon col-lg-7">
                        <img src="img/walletx.png" alt="">
                    </div>
                </section>

@endsection
