<form action={{route('pomo.save')}} method="POST" enctype="multipart/form-data" id="formPomodoro">
    @csrf
    <input type="hidden" id="timerIcon" name="timerIcon" value="{{$icon}}">
    <input type="hidden" id="timerTag" name="timerTag" value="{{$tag}}">
    <input type="hidden" id="timeTimer" name="timeTimer" value="{{$timer}}">
    <input type="hidden" id="done" name="done" value=true>
    <div class="containerTimer" id="containerTimer">

        <div class="timerIcon">
            @isset($icon)
                @if ($icon == 1)
                    <img src="{{asset('pomoIcons/icon1.svg')}}" alt="icone 1">
                @endif 
                @if($icon == 2)
                    <img src="{{asset('pomoIcons/icon2.svg')}}" alt="icone 2">
                @endif
                @if($icon == 3)
                    <img src="{{asset('pomoIcons/icon3.svg')}}" alt="icone 3">
                @endif
            @else
                <img src="{{asset('pomoIcons/icon2.svg')}}" alt="icone padrão">
            @endisset 
        </div>
        @if(isset($timer))
            <p class="timerClock" id="timerClock" value={{$timer}}>{{{number_format($timer,2,':','.')}}}</p>
        @else
            <p class="timerClock" id="timerClock" value=25>25:00<p>
        @endif
        <button class="timerButton" id="btnCancel">
            Cancel
        </button>
    </div>    
</form>