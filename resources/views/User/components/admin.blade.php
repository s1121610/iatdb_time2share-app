<p>U bent admin</p>
<ul>
    @foreach($users as $users)
        <li>{{$users->username}}
            <button>Blokkeren</button>
        </li>
    @endforeach
</ul>
