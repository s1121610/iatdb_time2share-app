@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
    <article class="create-form">
        <form class="create-form__form" action="/aanbod" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="create-form__section">
                <label for="name">Titel</label>
                <input class="create-form__input" name="name" id="name" type="text" required>
            </section>
            <section class="create-form__section">
                <label for="category">Categorie</label>
                <select class="create-form__input" name="category" id="category" required>
                    @foreach($categories as $category)
                        <option value={{$category->category}}>{{$category->category}}</option>
                    @endforeach
                </select>
            </section>
            <section class="create-form__section">
                <label for="description">Beschrijving</label><br>
                <textarea rows="4" cols="50" class="create-form__textarea" name="description" type="text" required></textarea>
            </section>
            <section class="create-form__section">
                <label for="location">Woonplaats</label>
                <input class="create-form__input" name="location" id="location" type="text" required>
            </section>
            <section class="create-form__section">
                <label for="image">Afbeelding</label>
                <input type="file" name="image" id="image" required />
            </section>
            <!-- <section class="create-form__section">
                <label for="image2">Afbeelding 2</label>
                <input type="file" name="image2" id="image2" />
            </section>
            <section class="create-form__section">
                <label for="image3">Afbeelding 3</label>
                <input type="file" name="image3" id="image3" />
            </section> -->
            <section class="create-form__section">
                <label for="owner">Owner</label>
                <select class="create-form__input" name="owner" id="owner" required>
                    @foreach($user as $user)
                        <option value={{$user->username}}>{{$user->username}}</option>
                    @endforeach
                </select>
            </section>
            <section class="create-form__section">
                <label for="deadline">Deadline</label>
                <input class="create-form__input" type="date" name="deadline" id="deadline" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+1 year')); ?>" required>
            </section>
            <section class="create-form__section">
                <button class="sushiCard__button" type="submit">Uitlenen</button>
            </section>
        </form>
    </article>   
