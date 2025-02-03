<form action="{{route('pomo.start')}}" method="POST">
    @csrf
    <div class="containerTimer" id="containerTimer">
            <a class="timerConfig" id="btnConfig" href={{route('pomo.config')}}>
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99996 2C9.44768 2 8.99996 2.44772 8.99996 3V4.58178C8.30471 4.86318 7.65844 5.23923 7.07704 5.69365L5.70573 4.90193C5.47605 4.76932 5.20309 4.73338 4.94691 4.80202C4.69073 4.87067 4.47232 5.03827 4.33971 5.26795L2.33971 8.73205C2.06357 9.21034 2.22744 9.82193 2.70573 10.0981L4.07654 10.8895C4.02603 11.2528 3.99997 11.6236 3.99997 12C3.99997 12.3764 4.02603 12.7471 4.07654 13.1105L2.70574 13.9019C2.47605 14.0345 2.30846 14.2529 2.23981 14.5091C2.17117 14.7653 2.2071 15.0382 2.33971 15.2679L4.33971 18.732C4.47232 18.9617 4.69074 19.1293 4.94692 19.198C5.2031 19.2666 5.47605 19.2307 5.70574 19.0981L7.07706 18.3063C7.65846 18.7607 8.30472 19.1368 8.99996 19.4182V21C8.99996 21.5523 9.44768 22 9.99996 22H14C14.5522 22 15 21.5523 15 21V19.4182C15.6952 19.1368 16.3415 18.7607 16.9229 18.3063L18.2942 19.0981C18.5239 19.2307 18.7968 19.2666 19.053 19.198C19.3092 19.1293 19.5276 18.9617 19.6602 18.7321L21.6602 15.268C21.7928 15.0383 21.8288 14.7653 21.7601 14.5091C21.6915 14.253 21.5239 14.0345 21.2942 13.9019L19.9234 13.1105C19.9739 12.7472 20 12.3764 20 12C20 11.6236 19.9739 11.2528 19.9234 10.8895L21.2942 10.0981C21.7725 9.82191 21.9364 9.21032 21.6602 8.73203L19.6602 5.26793C19.5276 5.03824 19.3092 4.87065 19.053 4.802C18.7968 4.73336 18.5239 4.76929 18.2942 4.9019L16.9229 5.69364C16.3415 5.23922 15.6952 4.86318 15 4.58178V3C15 2.44772 14.5522 2 14 2H9.99996ZM11 5.28986V4H13V5.28986C13 5.73228 13.2907 6.12211 13.7147 6.24831C14.6258 6.51947 15.4475 7.00198 16.1223 7.64029C16.4436 7.94424 16.9264 8.00099 17.3095 7.77984L18.4282 7.13395L19.4282 8.866L18.3109 9.51107C17.9281 9.73205 17.7358 10.1781 17.8379 10.6081C17.9437 11.0538 18 11.5197 18 12C18 12.4803 17.9437 12.9462 17.8379 13.3919C17.7358 13.8219 17.9281 14.2679 18.3109 14.4889L19.4282 15.134L18.4282 16.866L17.3094 16.2201C16.9264 15.999 16.4436 16.0557 16.1222 16.3597C15.4475 16.998 14.6258 17.4805 13.7147 17.7516C13.2907 17.8778 13 18.2677 13 18.7101V20H11V18.7101C11 18.2677 10.7092 17.8778 10.2852 17.7516C9.37409 17.4805 8.55246 16.998 7.87767 16.3597C7.55635 16.0557 7.07352 15.999 6.69048 16.2201L5.57176 16.866L4.57176 15.134L5.68905 14.4889C6.0718 14.2679 6.26409 13.8219 6.16201 13.3919C6.05621 12.9462 5.99997 12.4803 5.99997 12C5.99997 11.5197 6.0562 11.0538 6.16201 10.6081C6.26409 10.1781 6.07179 9.73207 5.68905 9.51109L4.57176 8.86603L5.57176 7.13398L6.69046 7.77986C7.07351 8.00101 7.55633 7.94425 7.87766 7.6403C8.55245 7.00199 9.37409 6.51948 10.2852 6.24831C10.7092 6.12211 11 5.73228 11 5.28986ZM9.99998 12C9.99998 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 9.99998 13.1046 9.99998 12ZM12 8C9.79084 8 7.99998 9.79086 7.99998 12C7.99998 14.2091 9.79084 16 12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8Z" fill="var(--branco)"></path> </g></svg>
            </a>
            @session('config')
                @php
                    $config = session()->get('config');
                    $icon = $config['icon'];
                    $timer = $config['timer'];
                    $tag = $config['tag'];
                @endphp
                <div class="timerIcon">
                    <input type="hidden" value={{$icon}} name="icon">
                    @if ($icon == 1)
                        <img src="{{asset('pomoIcons/icon1.svg')}}" alt="icone 1">
                    @endif 
                    @if($icon == 2)
                        <img src="{{asset('pomoIcons/icon2.svg')}}" alt="icone 2">
                    @endif
                    @if($icon == 3)
                        <img src="{{asset('pomoIcons/icon3.svg')}}" alt="icone 3">
                    @endif
                </div>
                <div class="timerTag">
                    <p class="tagTitle">
                            <input type="hidden" value={{$tag->id}} name="tag">
                            {{$tag->name}}
                    </p>
                </div>
                <input type="hidden" value={{$timer}} name="timer">
                <p class="timerClock" id="timerClock" value={{$timer}}>{{{number_format($timer,2,':','.')}}}</p>
            @else
                <div class="timerIcon">
                    <div class="progress-ring">
                        <div class="progress-fill"></div>
                    </div>
                    @isset($icon)
                        <input type="hidden" value={{$icon}} name="icon">
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
                    <input type="hidden" value="2" name="icon">
                        <img src="{{asset('pomoIcons/icon2.svg')}}" alt="icone padrão">
                    @endisset
                </div>
                <div class="timerTag">
                    <p class="tagTitle">
                        @if(isset($tag))
                            <input type="hidden" value={{$tag->id}} name="tag">
                            {{$tag->name}}
                        @else
                            <input type="hidden" value="0" name="tag">
                            Sem Tag    
                        @endif
                    </p>
                </div>
                {{-- COMFIGURAÇÂO DO TIMER --}}
                @if(isset($timer))
                <input type="hidden" value={{$timer}} name="timer">
                <p class="timerClock" id="timerClock" value={{$timer}}>{{{number_format($timer,2,':','.')}}}</p>
                @else
                    <input type="hidden" value='25' name="timer">
                    <p class="timerClock" id="timerClock" value=25>25:00<p>
                @endif
            @endsession  
            <button class="timerButton" type="submit">
                Start
            </button>
    </div>
</form>