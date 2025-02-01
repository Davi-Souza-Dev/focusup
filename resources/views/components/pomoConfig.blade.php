<form action="{{route("pomo.setConfig")}}" method="POST" enctype="multipart/form-data" class="configForm" id="containerTimer">
  @csrf
    <div class="containerConfig">
        <a class="configClose" href={{route('site.index')}}>
          <svg
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                stroke="var(--roxo)"
                stroke-width="1.5"
                stroke-linecap="round"
              ></path>
              <path
                d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                stroke="var(--roxo)"
                stroke-width="1.5"
                stroke-linecap="round"
              ></path>
            </g>
          </svg>
        </a>
        <div class="containerItem" id="iconContainer">
          <label>
            <input type="radio" name="rdIcon" value="1" />
            <div class="item">
              <svg
                height="200px"
                width="200px"
                version="1.1"
                id="_x32_"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 512 512"
                xml:space="preserve"
                fill="#000000"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                    .st0 {
                      fill: var(--roxo);
                    }
                  </style>
                  <g>
                    <path
                      class="st0"
                      d="M389.251,0H122.748C95.719,0.007,73.833,21.898,73.821,48.927v414.146 c0.011,27.029,21.898,48.92,48.927,48.928h266.503c27.029-0.008,48.916-21.899,48.927-48.928V48.927 C438.167,21.898,416.28,0.007,389.251,0z M405.549,463.072c-0.007,4.548-1.8,8.523-4.775,11.527 c-2.999,2.972-6.97,4.764-11.523,4.772H122.748c-4.552-0.008-8.523-1.8-11.523-4.772c-2.975-3.004-4.768-6.978-4.775-11.527V48.927 c0.007-4.548,1.8-8.523,4.775-11.527c3-2.971,6.97-4.764,11.523-4.771h266.503c4.553,0.007,8.524,1.8,11.523,4.771 c2.975,3.004,4.768,6.978,4.775,11.527V463.072z"
                    ></path>
                    <path
                      class="st0"
                      d="M258.784,179.012c-0.972-1.1-0.804-0.996-0.804-0.996c-0.51-0.614-1.227-0.98-1.976-0.98 c-0.765,0-1.482,0.366-1.984,0.98c0,0,0.175-0.104-0.804,0.996c-24.201,27.292-68.794,42.745-68.794,82.042 c0,2.031,0.095,4.126,0.279,6.308c1.944,23.078,18.656,36.166,36.731,36.166c10.244,0,20.01-6.843,26.519-16.752 c-3.051,19.158-6.97,40.435-8.086,43.064c-1.872,4.493,0.398,5.25,1.506,5.25h29.251c1.131,0,3.386-0.757,1.514-5.25 c-1.107-2.629-5.034-23.906-8.078-43.064c6.508,9.909,16.259,16.752,26.511,16.752c18.075,0,34.796-13.088,36.739-36.166 c0.191-2.183,0.263-4.278,0.263-6.308C327.571,221.758,282.977,206.304,258.784,179.012z"
                    ></path>
                  </g>
                </g>
              </svg>
            </div>
          </label>
          <label>
            <input type="radio" name="rdIcon" value="2" checked />
            <div class="item">
              <svg
                viewBox="0 -0.5 17 17"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                class="si-glyph si-glyph-game-1"
                fill="#000000"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <title>1079</title>
                  <defs></defs>
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <path
                      d="M8.931,7.986 L13.744,1.643 C12.408,0.617 10.743,-0.000999999989 8.931,-0.000999999989 C4.551,-0.000999999989 1,3.561 1,7.956 C1,12.352 4.551,15.915 8.931,15.915 C12.448,15.915 15.426,13.615 16.464,10.434 L8.931,7.986 L8.931,7.986 Z M7.49947239,5 C6.6732325,5 6,4.3286418 6,3.50105559 C6,2.67241379 6.6732325,2 7.49947239,2 C8.3267675,2 9,2.67241379 9,3.50105559 C9,4.3286418 8.32782272,5 7.49947239,5 L7.49947239,5 Z"
                      fill="var(--roxo)"
                      class="si-glyph-fill"
                    ></path>
                  </g>
                </g>
              </svg>
            </div>
          </label>
          <label>
            <input type="radio" name="rdIcon" value="3" />
            <div class="item">
              <svg
                height="200px"
                width="200px"
                version="1.1"
                id="_x32_"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 512 512"
                xml:space="preserve"
                fill="#000000"
              >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                  id="SVGRepo_tracerCarrier"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                    .st0 {
                      fill: var(--roxo);
                    }
                  </style>
                  <g>
                    <path
                      class="st0"
                      d="M510.441,322.894l-29.76-126.56c-15.073-56.252-66.047-95.363-124.286-95.363H155.604 c-58.239,0-109.212,39.11-124.285,95.363l-29.76,126.56c-7.618,36.303,13.34,72.524,48.626,84.001l1.74,0.558 c32.658,10.632,68.288-3.07,85.429-32.831l25.894-38.289c6.502-11.288,18.538-18.25,31.55-18.25h122.406 c13.012,0,25.048,6.962,31.549,18.25l25.894,38.289c17.142,29.761,52.779,43.463,85.438,32.831l1.732-0.558 C497.1,395.418,518.06,359.197,510.441,322.894z M191.046,238.081h-41.689v41.696h-36.295v-41.696H71.373v-36.279h41.689v-41.68 h36.295v41.68h41.689V238.081z M374.728,151.436c12.626,0,22.847,10.221,22.847,22.848c0,12.61-10.221,22.831-22.847,22.831 c-12.61,0-22.831-10.221-22.831-22.831C351.897,161.656,362.118,151.436,374.728,151.436z M329.049,242.801 c-12.61,0-22.839-10.23-22.839-22.856c0-12.602,10.229-22.831,22.839-22.831c12.618,0,22.839,10.229,22.839,22.831 C351.889,232.572,341.668,242.801,329.049,242.801z M374.728,288.471c-12.61,0-22.831-10.221-22.831-22.831 c0-12.627,10.221-22.848,22.831-22.848c12.626,0,22.847,10.221,22.847,22.848C397.575,278.25,387.354,288.471,374.728,288.471z M420.406,242.801c-12.61,0-22.832-10.23-22.832-22.856c0-12.602,10.222-22.831,22.832-22.831 c12.618,0,22.847,10.229,22.847,22.831C443.253,232.572,433.024,242.801,420.406,242.801z"
                    ></path>
                  </g>
                </g>
              </svg>
            </div>
          </label>
        </div>
        <div class="containerItem" id="tagContainer">
          @foreach ($tags as $tag)
            @if($tag->id != 1)
              <label>
                <input type="radio" name="rdTag" class="rdTag" value={{$tag->id}}/>
                <p class="tag">{{$tag->name}}</p>
              </label>
            @endif
          @endforeach
        </div>
        <div class="containerItem" id="timerContainer">
          <label>
            <input type="radio" name="rdTimer" class="rdTimer" value="15">
            <p class="timer">15</p>
          </label>
          <label>
            <input type="radio" name="rdTimer" class="rdTimer"  value="25" checked>
            <p class="timer">25</p>
          </label>
          <label>
            <input type="radio" name="rdTimer" class="rdTimer"  value="50">
            <p class="timer">50</p>
          </label>
        </div>
        <div class="containerButtom">
          <button type="submit" class="btnStart">Start</button>
          <a type="submit" class="btnCancel" href="index.html">Cancel</a>
        </div>
    </div>
</form>