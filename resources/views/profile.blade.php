@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
    <section class="profile"">
        <div class="container">


            {{-- Based on user logged in or not switch these two blocks .profile__login and .profile__logged --}}

            {{-- Created temporary variable which suppose to be user object, which would prove if user is logged in or not --}}
            {{-- based on that display login/register froms or profile data --}}
            {{ $temp = false }}

            @if ($temp)
                <p class="profile__title">Hello, there!</p>

                <div class="profile__login">

                    {{-- User can select option to register new accanount or sign in existed one (changes the reqired inputs) --}}

                    <form action="" class="profile__form profile__form-reg">
                        <p class="profile__sub">Register</p>
                        <input type="text" class="stages__input" placeholder="e-mail">
                        <input type="text" class="stages__input" placeholder="your name">
                        <input type="text" class="stages__input" placeholder="password">
                    </form>

                    <form action="" class="profile__form profile__form-log isHidden">
                        <p class="profile__sub">Login</p>
                        <input type="text" class="stages__input" placeholder="e-mail">
                        <input type="text" class="stages__input" placeholder="password">
                    </form>

                    {{-- Toggling happens on this button --}}
                    <p class="profile__toggle underline" onclick="toggleForms()">Sign in • Register</p>

                    {{-- Function to implement form toggling --}}
                    <script>
                        function toggleForms() {
                            document.querySelector(".profile__form.profile__form-reg").classList.toggle("isHidden");
                            document.querySelector(".profile__form.profile__form-log").classList.toggle("isHidden");
                        }
                    </script>
                </div>
            @else
                <p class="profile__title">Wellcome, `username`</p>

                <div class="profile__logged">
                    <div class="profile__logged-wrapper">
                        <p class="profile__text">You have `3` confirmed orders</p>
                        <div class="profile__orders">


                            <div class="profile__card">
                                <div class="profile__card-col">
                                    <div class="profile__thumbs">
                                        {{-- here will be images --}}
                                        {{-- styles not ready yet --}}
                                    </div>
                                </div>
                                <div class="profile__card-col">
                                    <p class="profile__text underline">Order num: `KDJKL41LKS`</p>
                                    <div class="profile__items">
                                        <p>SpringGreen Energy Candle <span class="underline">x3</span></p>
                                        <p>Sienna Church Candle <span class="underline">x1</span></p>
                                        <p>Ivory History Candle <span class="underline">x2</span></p>
                                        <p>SlateBlue Change Candle <span class="underline">x7</span></p>
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                    </div>
                                    <p class="profile__total">Total $33.33</p>
                                </div>
                            </div>


                            <div class="profile__card">
                                <div class="profile__card-col">
                                    <div class="profile__thumbs">
                                        {{-- here will be images --}}
                                        {{-- styles not ready yet --}}
                                    </div>
                                </div>
                                <div class="profile__card-col">
                                    <p class="profile__text underline">Order num: `U23AKL4KS`</p>
                                    <div class="profile__items">
                                        <p>SpringGreen Energy Candle <span class="underline">x3</span></p>
                                        <p>LightGray First Candle <span class="underline">x5</span></p>
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                    </div>
                                    <p class="profile__total">Total $13133.33</p>
                                </div>
                            </div>


                            <div class="profile__card">
                                <div class="profile__card-col">
                                    <div class="profile__thumbs">
                                        {{-- here will be images --}}
                                        {{-- styles not ready yet --}}
                                    </div>
                                </div>
                                <div class="profile__card-col">
                                    <p class="profile__text underline">Order num: `U23AKL4KS`</p>
                                    <div class="profile__items">
                                        <p>LightGray First Candle <span class="underline">x3</span></p>
                                    </div>
                                    <p class="profile__total">Total $13.33</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
