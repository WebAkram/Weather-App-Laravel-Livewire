<div class="main-div">
    <div>
        <h3 class="float-end me-2 mt-2 fst-italic text-light">Sahiwal</h3>
        <h4 class="position-absolute pk fst-italic  fw-bolder text-light">PK</h4>
        <div id="clock"></div>
    </div>



    <div class="d-flex justify-content-center search">
        <form class="d-flex col-md-8" wire:submit.prevent="getWeather">

            <input type="text"  placeholder="Search any city" id="location" wire:model="city">

            <input type="hidden" id="country" wire:model="country">

            <button class="btn btn-primary bi bi-search" type="submit"></button>
        </form>

    </div>

    <div class="bg2">

        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
            class="bi bi-sun text-light" viewBox="0 0 16 16">
            <path
                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </svg>
        @if ($weather)
            <h5 class="text-light conditionlg">{{ $weather['conditions'] }}</h5>
            <hr class="line">

            <h2 class="text-light date">{{ $weather['date'] }}</h2>
            <h2 class="text-light day">{{ $weather['day'] }}</h2>
            <h2 class="text-light city d-flex">{{ $weather['city'] }},{{ $weather['country'] }}
                <img src="http://openweathermap.org/img/wn/{{ $weather['icon'] }}.png" class="imgicon" height="75"
                    width="75" alt="Weather Icon">
            </h2>
            <h6 class="text-light temp">Temperature {{ $weather['temperature'] }}°C</h6>
            <div class="line2 p-0"></div>
            <h6 class="text-light condition">Condition ({{ $weather['conditions'] }})</h6>
            <div class="line3 p-0"></div>
            <h2 class="text-light humidity">Humidity
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $weather['humidity'] }}%</h2>
            <div class="line4 p-0"></div>
            <h2 class="text-light wind">Wind Speed {{ $weather['wind_speed'] }} km/h</h2>
            {{-- large size temp degree --}}
            <h2 class="text-light largedeg">{{ $weather['temperature'] }}°c</h2>
        @endif
    </div>
</div>
