@extends('layout')

@section('content')
    <h1>Create a New Monster</h1>
    <form method="POST" action="{{ route('monsters.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                placeholder="Enter monster name" 
                required
            >
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <select
                class="form-control"
                id="class"
                name="class"
                required
            >
                <option value="TEMNOCERAN">Temnoceran</option>
                <option value="BIRD_WYVERN">Bird Wyvern</option>
                <option value="FLYING_WYVERN">Flying Wyvern</option>
                <option value="PISCINE_WYVERN">Piscine Wyvern</option>
                <option value="CARAPACEON">Carapaceon</option>
                <option value="AMPHIBIAN">Amphibian</option>
                <option value="FANGED_BEAST">Fanged Beast</option>
                <option value="LEVIATHAN">Leviathan</option>
                <option value="SNAKE_WYVERN">Snake Wyvern</option>
                <option value="BRUTE_WYVERN">Brute Wyvern</option>
                <option value="FANGED_WYVERN">Fanged Wyvern</option>
                <option value="ELDER_DRAGON">Elden Dragon</option>
                <option value="UNKNOWN">Unknown</option>
                <option value="RELICTS">Relicts</option>
            </select>
        </div>
        <div class="form-group">
            <label for="element">Element</label>
            <select
                class="form-control"
                id="element"
                name="element"
                required
            >
                <option value="">None</option>;
                <option value="FIRE">Fire</option>;
                <option value="WATER">Water</option>;
                <option value="THUNDER">Thunder</option>;
                <option value="ICE">Ice</option>;
                <option value="DRAGON">Dragon</option>;
            </select>
        </div>
        <div class="form-group">
            <label for="ailment">Ailment</label>
            <select
                class="form-control"
                id="ailment"
                name="ailment"
                required
            >
                <option value="">None</option>
                <option value="POISON">Poison</option>
                <option value="PARALYSIS">Paralysis</option>
                <option value="SLEEP">Sleep</option>
                <option value="STUN">Stun</option>
                <option value="BLASTBLIGHT">Blastblight</option> 
                <option value="BUBBLEBLIGHT">Bubbleblight</option> 
                <option value="HELLFIREBLIGHT">Hellfireblight</option>
                <option value="FIREBLIGHT">Fireblight</option>
                <option value="WATERBLIGHT">Waterblight</option>
                <option value="THUNDERBLIGHT">Thunderblight</option>
                <option value="ICEBLIGHT"> Iceblight</option>
                <option value="DRAGONBLIGHT"> Dragonblight</option> 
            </select>
        </div>
        <div class="form-group">
            <label for="weakness">Weakness</label>
            <select
                class="form-control"
                id="weakness"
                name="weakness"
                required
            >
                <option value="">None</option>;
                <option value="FIRE">Fire</option>;
                <option value="WATER">Water</option>;
                <option value="THUNDER">Thunder</option>;
                <option value="ICE">Ice</option>;
                <option value="DRAGON">Dragon</option>;
            </select>
        </div>
        <div class="form-group">
            <label for="info">Info</label>
            <textarea
                class="form-control"
                id="info"
                name="info" 
                required
            >
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('monsters.index') }}">Back to the list</a>
    </form>
@endsection
