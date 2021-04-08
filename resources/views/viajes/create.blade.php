<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100 font-sans min-h-full items-center justify-center flex flex-col">
    <div class="max-w-7xl mx-auto">
        <div class="max-w-5xl bg-white px-8 py-2 mt-20 rounded-lg shadow-lg">
            <form method="post" action="{{ route('viajes.store') }}">
                {{ csrf_field() }}
                <div class="pb-4">
                    <label for="origen" class="block text-sm font-medium text-gray-700">Origen</label>
                    <input type="text" name="origen" id="origen" autocomplete="given-name" class="px-4 mt-1 border border-indigo focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-10">
                </div>
    
                <div class="pb-4">
                    <label for="destino" class="block text-sm font-medium text-gray-700">Destino</label>
                    <input type="text" name="destino" id="destino" class="px-4 mt-1  border border-indigo focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-10">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="pb-4">
                        <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="px-4 mt-1 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-10">
                    </div>
                    <div class="pb-4">
                        <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                        <input type="time" name="hora" id="hora" class="mt-1 px-4 border border-indigo  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md h-10">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-600 text-white rounded shadow">
                        Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>