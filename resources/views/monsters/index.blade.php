@extends('layout')

@section("content")
    <form class="btn btn-primary" method="GET" action={{ route('monsters.create') }}>
        <input type="submit" value="Create"></input>
    </form>
    <h1>Monster list</h1>
    <div class="monster-list">
        @foreach ($monsters as $m)
        <div class="monster-container">
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
                <h3>Class: <span>{{ $m->class }}</span></h2>
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
        </div>
        @endforeach
    </div>
@endsection