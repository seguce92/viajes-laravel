<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <form action="">
                <div>
                    <label for="origen"></label>
                    <input type="text" name="origen" id="origen" value="{{ $old('origen') }}">
                </div>
                <div>
                    <label for="destino"></label>
                    <input type="text" name="origen" id="origen" value="{{ $old('destino') }}">
                </div>
                <div>
                    <label for="fecha"></label>
                    <input type="date" name="fecha" id="fecha" value="{{ $old('fecha') }}">
                </div>
                <div>
                    <label for="hora"></label>
                    <input type="time" name="origen" id="origen" value="{{ $old('hora') }}">
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-600 text-white">
                        Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>