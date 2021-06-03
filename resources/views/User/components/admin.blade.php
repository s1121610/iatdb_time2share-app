<section class="account__beheer">
    <header>
        <h2 class="account--subtitle">Beheer</h2>
    </header>
    <section>
        <a class="u-button u-button--primary" href="/aanbod">Verwijder een advertentie</a>
    </section>
    <h3 class="account__beheer__blokkeren__title">Blokkeren</h3>
    <section class="account__beheer__blokkeren">
        <form action="/account/block" method="POST">
            @csrf
            <select class="account__beheer__blokkeren__input" name="username" id="username">
                <option value="" disabled selected hidden>Kies een gebruiker</option>
                @foreach($userList as $userList)
                    <option value="{{$userList->username}}">{{$userList->username}}</option>
                @endforeach
            </select>
            <button class="u-button u-button--primary" type="submit">Blokkeren</button>
        </form>
        <form class="account__beheer__blokkeren" action="/account/deblock" method="POST">
            @csrf
            <select class="account__beheer__blokkeren__input" name="username" id="username">
                <option value="" disabled selected hidden>Kies een gebruiker</option>
                @foreach($blockedUsersList as $blockedUsersList)
                    <option value="{{$blockedUsersList->username}}">{{$blockedUsersList->username}}</option>
                @endforeach
            </select>
            <button class="u-button u-button--primary" type="submit">Deblokkeren</button>
        </form>
    </section>
</section>