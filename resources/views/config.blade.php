<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("style/reset.css")}}">
    <link rel="stylesheet" href="{{asset("style/style.css")}}">
    <link rel="stylesheet" href="{{asset("style/pomodoro.css")}}">
    <link rel="stylesheet" href="{{asset("style/menu.css")}}">
    <title>Menu Layout</title>
</head>
<body>
    @include('components.pomoConfig')
    <div class="menuContainer">
        <div class="menuLink active ">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 2C11 1.44772 11.4477 1 12 1C12.0161 1 12.0322 1.00038 12.0481 1.00114C12.0632 1.00051 12.0785 1.00026 12.0938 1.00039C14.1199 1.01765 16.1091 1.59455 17.8374 2.67665C19.8492 3.93625 21.3996 5.8128 22.2571 8.02608C23.1146 10.2394 23.2332 12.6706 22.5951 14.9569C21.9571 17.2431 20.5967 19.2616 18.717 20.711C16.8373 22.1604 14.5393 22.9629 12.1659 22.9988C9.79262 23.0346 7.47138 22.3017 5.54884 20.9097C3.6263 19.5177 2.2056 17.5411 1.49889 15.2752C0.891759 13.3285 0.839553 11.258 1.33799 9.29413C1.47385 8.75881 2.05308 8.48753 2.57385 8.67143C3.09462 8.85532 3.36505 9.4271 3.24007 9.96506C2.8794 11.5176 2.93657 13.1446 3.4147 14.6776C3.99248 16.5302 5.15399 18.1461 6.72579 19.2842C8.29758 20.4223 10.1953 21.0214 12.1357 20.9921C14.076 20.9629 15.9548 20.3068 17.4916 19.1218C19.0283 17.9368 20.1405 16.2866 20.6622 14.4174C21.1838 12.5483 21.0869 10.5606 20.3858 8.75108C19.6847 6.94158 18.4172 5.40739 16.7724 4.37759C15.6232 3.65806 14.3329 3.21174 13 3.06259V5C13 5.55229 12.5523 6 12 6C11.4477 6 11 5.55229 11 5V2Z" fill="var(--roxo)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.31205 3.92537C4.91543 3.66095 4.38731 3.71325 4.05025 4.05031C3.71318 4.38738 3.66089 4.9155 3.9253 5.31212L9.30753 13.3855C9.50568 13.6827 9.80929 14.101 10.283 14.3927C10.6282 14.6053 11.1764 14.8627 11.8475 14.871C12.5576 14.8799 13.2918 14.6077 13.9497 13.9498C14.6076 13.2919 14.8798 12.5577 14.871 11.8475C14.8626 11.1764 14.6053 10.6283 14.3927 10.2831C14.1009 9.80935 13.6826 9.50574 13.3854 9.30759L5.31205 3.92537ZM10.9716 12.2761L8.36291 8.36297L12.276 10.9717C12.5267 11.1388 12.6362 11.2449 12.6897 11.3319C12.7963 11.5049 12.8689 11.6951 12.8711 11.8724C12.8728 12.0107 12.8361 12.235 12.5355 12.5356C12.2349 12.8362 12.0106 12.8729 11.8723 12.8712C11.695 12.869 11.5048 12.7964 11.3318 12.6898C11.2448 12.6362 11.1388 12.5267 10.9716 12.2761Z" fill="var(--roxo)"></path> </g></svg>
        </div>
        <div class="menuLink ">
            <svg fill="var(--roxo)" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>list-solid-badged</title> <path d="M23.66,10H15V8h7.78a7.42,7.42,0,0,1,.89-6H8A2,2,0,0,0,6,4V32a2,2,0,0,0,2,2H28a2,2,0,0,0,2-2V13.5A7.49,7.49,0,0,1,23.66,10ZM13,26H11V24h2Zm0-4H11V20h2Zm0-4H11V16h2Zm0-4H11V12h2Zm0-4H11V8h2ZM25,26H15V24H25Zm0-4H15V20H25Zm0-4H15V16H25Zm0-4H15V12H25Z" class="clr-i-solid--badged clr-i-solid-path-1--badged"></path><circle cx="30" cy="6" r="5" class="clr-i-solid--badged clr-i-solid-path-2--badged clr-i-badge"></circle> <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect> </g></svg>
        </div>
        <div class="menuLink">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.5 16V18.5C20.5 20.43 18.93 22 17 22H7C5.07 22 3.5 20.43 3.5 18.5V17.85C3.5 16.28 4.78 15 6.35 15H19.5C20.05 15 20.5 15.45 20.5 16Z" fill="var(--roxo)"></path> <path d="M15.5 2H8.5C4.5 2 3.5 3 3.5 7V14.58C4.26 13.91 5.26 13.5 6.35 13.5H19.5C20.05 13.5 20.5 13.05 20.5 12.5V7C20.5 3 19.5 2 15.5 2ZM13 10.75H8C7.59 10.75 7.25 10.41 7.25 10C7.25 9.59 7.59 9.25 8 9.25H13C13.41 9.25 13.75 9.59 13.75 10C13.75 10.41 13.41 10.75 13 10.75ZM16 7.25H8C7.59 7.25 7.25 6.91 7.25 6.5C7.25 6.09 7.59 5.75 8 5.75H16C16.41 5.75 16.75 6.09 16.75 6.5C16.75 6.91 16.41 7.25 16 7.25Z" fill="var(--roxo)"></path> </g></svg>
        </div>
        <div class="menuLink">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13 3H8.2C7.0799 3 6.51984 3 6.09202 3.21799C5.71569 3.40973 5.40973 3.71569 5.21799 4.09202C5 4.51984 5 5.0799 5 6.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.0799 21 8.2 21H15.8C16.9201 21 17.4802 21 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C19 19.4802 19 18.9201 19 17.8V9M13 3L19 9M13 3V7.4C13 7.96005 13 8.24008 13.109 8.45399C13.2049 8.64215 13.3578 8.79513 13.546 8.89101C13.7599 9 14.0399 9 14.6 9H19M8 6H10M8 9H10M16 17H14L13 15.5L12 17L10 14L9.5 17H8" stroke="var(--roxo)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
    </div>

    <script>
        // MODAL DAS CONFIGURAÇÔES DO POMODORO
        const containerTimer = document.getElementById('containerTimer');
        const modalConfig = document.getElementById('configForm');
        const btnConfig = document.getElementById('btnConfig');
    </script>
</body>
</html>