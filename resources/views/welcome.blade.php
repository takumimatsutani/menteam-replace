<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- styles -->
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #FDFDFC;
                color: #1b1b18;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }
            /* @media (prefers-color-scheme: dark) {
                body {
                    background-color: #0a0a0a;
                    color: #f3f4f6;
                }
            } */
        </style>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="flex flex-col items-center justify-center w-full max-w-3xl p-6 bg-color-gray-50">
            <div class="text-center mb-8">
                <h1 class="text-5xl font-black font-['Noto_Sans_JP'] leading-tight text-color-gray-900 mb-4">MENTEAM</h1>
                <h2 class="text-2xl font-semibold font-['Hiragino_Kaku_Gothic_Pro'] leading-tight text-color-gray-900">ログイン</h2>
            </div>
            
            <div class="w-full max-w-md">
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-base font-semibold font-['Hiragino_Kaku_Gothic_Pro'] leading-tight text-color-gray-900">メールアドレス</label>
                    </div>
                    <div class="relative">
                        <input type="email" placeholder="メールアドレス" class="w-full h-12 px-4 py-3 bg-color-gray-0 rounded-lg border border-color-gray-300 text-base font-light font-['Hiragino_Kaku_Gothic_Pro']">
                    </div>
                </div>
                
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-base font-semibold font-['Hiragino_Kaku_Gothic_Pro'] leading-tight text-color-gray-900">パスワード</label>
                    </div>
                    <div class="relative">
                        <input type="password" id="password" placeholder="パスワード" class="w-full h-12 px-4 py-3 bg-color-gray-0 rounded-lg border border-color-gray-300 text-base font-light font-['Hiragino_Kaku_Gothic_Pro']">
                        <button type="button" id="togglePassword" class="absolute right-3 top-3 w-6 h-6 flex items-center justify-center">
                            <!-- 目のアイコン（パスワード表示用） -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-color-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="text-right mb-6">
                    <a href="#" class="text-xs font-light font-['Hiragino_Kaku_Gothic_Pro'] leading-normal text-blue">パスワードをお忘れですか？</a>
                </div>
                
                <button class="w-full h-12 px-4 py-3 bg-color-primarycolor-500 rounded-lg flex justify-center items-center gap-2.5 mb-6">
                    <span class="text-center text-color-gray-0 text-base font-semibold font-['Hiragino_Kaku_Gothic_Pro'] leading-snug tracking-wide">ログイン</span>
                </button>
                
                <div class="text-center">
                    <a href="#" class="text-base font-semibold font-['Hiragino_Kaku_Gothic_Pro'] leading-tight text-blue">新規登録はこちら</a>
                </div>
            </div>
        </div>
        
        <!-- The original commented out code section remains untouched -->
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toggleButton = document.getElementById('togglePassword');
                const passwordInput = document.getElementById('password');
                
                toggleButton.addEventListener('click', function() {
                    // パスワードの表示/非表示を切り替え
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // アイコンを切り替え
                    if (type === 'text') {
                        toggleButton.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-color-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                        `;
                    } else {
                        toggleButton.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-color-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        `;
                    }
                });
            });
        </script>
    </body>
</html>