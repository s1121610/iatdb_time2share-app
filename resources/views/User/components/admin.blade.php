<h2>Beheer</h2>
<a class="u-button u-button--primary" href="/aanbod">Verwijder een advertentie</a>
<form action="/account/block" method="POST">
    @csrf
    <select name="username" id="username">
        <option value="" disabled selected hidden>Kies een gebruiker</option>
        @foreach($userList as $userList)
            <option value="{{$userList->username}}">{{$userList->username}}</option>
        @endforeach
    </select>
    <button type="submit">Blokkeren</button>
</form>
<form action="/account/deblock" method="POST">
    @csrf
    <select name="username" id="username">
        <option value="" disabled selected hidden>Kies een gebruiker</option>
        @foreach($blockedUsersList as $blockedUsersList)
            <option value="{{$blockedUsersList->username}}">{{$blockedUsersList->username}}</option>
        @endforeach
    </select>
    <button type="submit">Deblokkeren</button>
</form>
