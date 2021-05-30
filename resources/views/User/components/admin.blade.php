<h2>Beheer</h2>
<a class="u-button u-button--primary" href="/aanbod">Verwijder een advertentie</a>
<ul>
    @foreach($users as $users)
        <li>{{$users->username}}
            <button>Blokkeren</button>
        </li>
    @endforeach
</ul>
