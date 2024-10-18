@extends('layout')

@section("content")
    <h1>Monster list</h1>
    <ul>
        @foreach ($monsters as $m)
            <h2>{{ $m->name }}</h2>
            {{-- <p>{{ print "edit" }}</p> --}}
            <form class="btn btn-primary" method="GET" action={{ route('monsters.edit', [$m->id]) }}>
                <input type="submit" value="Edit"></input>
            </form>
            <form class="btn btn-primary" method="POST" action={{ route('monsters.destroy', $m->id) }}>
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete"></input>
            </form>
            {{-- <a href="{{ route('monsters.edit', $m->id) }}">Edit</a> --}}
            {{-- <a href="{{ route('monsters.destroy', $m->id) }}">Delete</a> --}}
            <li>
                <h3>Class: {{ $m->class }}</h3>
                <h3>
                    Element:  
                    <img 
                        class="icon" 
                        src="{{ $m->element !== "" ? sprintf( "/images/Element_%s_Icon.webp", $m->element ) : "" }}" 
                        alt="{{ $m->element !== "" ? $m->element : "None" }}"
                    >
                </h3>
                <h3>Ailment:  
                    <img 
                        class="icon" src="{{ $m->ailment !== "" ? sprintf( "/images/Status_%s_Icon.webp",  $m->ailment ) : "" }}" 
                        alt="{{ $m->ailment !== "" ? $m->ailment : "None" }}"
                    >
                </h3>
                <h3>Weakness: 
                    <img 
                        class="icon" 
                        src="{{ $m->element !== "" ? sprintf( "/images/Element_%s_Icon.webp", $m->element ) : "" }}" 
                        alt="{{ $m->element !== "" ? $m->element : "None" }}"
                        alt="{{ $m->element  }}"
                    >
                </h3>
                <h3>Info:</h3>
                <p>{{ $m->info }}</p>
            </li>
        @endforeach
    </ul>
@endsection