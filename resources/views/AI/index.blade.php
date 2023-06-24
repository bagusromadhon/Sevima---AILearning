<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialised">
    <div class="flex flex-col space-y-4 p-4">
        @foreach ($messages as $message)
            <div class="flex rounded-lg p-r @if ($message['role'] == 'assistant') bg-green-200 flex-reverse @else bg-blue-200 @endif">
                    <div class="ml-4">
                        <div class="text-lg">
                            @if($message['role'] == 'assistant')
                            <a href="#" class="font-medium text-gray-900"> LAravel Chat Gpt</a>
                            @else
                            <a href="#" class="font-medium text-grey-900">you</a>
                            @endif
                        </div>
                        <div class="mt-1">
                            <p class="text-grey-600">
                                {{!! \illuminat\Mail\Markdown::parse($message['content']) !!}}
                            </p>
                        </div>
                    </div>
            </div>
        @endforeach
        <form class="p-4 flex space-x-4 justifly-center items-center" action="/" method="POST">
        @csrf
        <label for="message">Ask Somethin</label>
        <input type="text" id="message" name="message" autocomplete="off" class="border rounded-md p-2 flex-1">
            <a class="bg-gray-800 text-white p-2 rounded-md" href="#"></a>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
