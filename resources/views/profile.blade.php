@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
    <section class="profile"">
        <div class="container">

            {{-- Based on user logged in or not switch these two blocks .profile__login and .profile__logged --}}
            <div class="profile__login">

                {{-- User can select option to register new accanount or sign in existed one (changes the reqired inputs) --}}

                {{-- Toggling happens on this button --}}
                <button onclick="toggleForms()">Sign/Register</button>

                <form action="" class="profile__form profile__form-reg">
                    <p class="profile__sub">Hello, new customer!</p>
                    <input type="text" class="stages__input" placeholder="e-mail">
                    <input type="text" class="stages__input" placeholder="your name">
                    <input type="text" class="stages__input" placeholder="password">
                </form>
                
                <form action="" class="profile__form profile__form-log isHidden">
                    <input type="text" class="stages__input">
                    <input type="text" class="stages__input">
                    <input type="text" class="stages__input">
                </form>


                {{-- Function to implement form toggling --}}
                <script>
                    function toggleForms() {
                        document.querySelector(".profile__form.profile__form-reg").classList.toggle("isHidden");
                        document.querySelector(".profile__form.profile__form-log").classList.toggle("isHidden");
                    }
                </script>
            </div>

            <div class="profile__logged">

            </div>
        </div>
    </section>
@endsection
