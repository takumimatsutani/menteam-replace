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
                        <input type="password" placeholder="パスワード" class="w-full h-12 px-4 py-3 bg-color-gray-0 rounded-lg border border-color-gray-300 text-base font-light font-['Hiragino_Kaku_Gothic_Pro']">
                        <div class="absolute right-3 top-3">
                            <div class="w-6 h-6 bg-zinc-300 border border-color-gray-100">
                                <div class="w-5 h-3.5 bg-color-gray-100 border-[0.03px] border-color-gray-100"></div>
                                <div class="w-4 h-4 rounded-[1px] outline outline-2 outline-offset-[-1px] outline-color-gray-100"></div>
                            </div>
                        </div>
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
    </body>
</html>